<?php

namespace Common\Model;

use Think\Model;

/**
 * 公众号配置操作集成
 */
class AppsModel extends Model {
	protected $tableName = 'apps';
	function getInfo($id, $filed = '', $update = false, $data = array()) {
		if (empty ( $id )) {
			return empty ( $filed ) ? array () : '';
		}
		
		$key = 'Common_Apps_getInfo_' . $id;
		$info = S ( $key );
		if ($info === false || $update) {
			$info = empty ( $data ) ? $this->find ( $id ) : $data;
			S ( $key, $info );
		}
		
		return empty ( $filed ) ? $info : $info [$filed];
	}
	function getInfoByToken($token, $filed = '', $update = false) {
		$key = 'Common_Apps_getInfoByToken';
		$arr = S ( $key );
		if ($arr === false || ! isset ( $arr [$token] ) || $update) {
			$list = $this->field ( 'id,token' )->select ();
			foreach ( $list as $vo ) {
				$arr [$vo ['token']] = $vo ['id'];
			}
			
			S ( $key, $arr, 604800 ); // 缓存一周
		}
		$id = isset ( $arr [$token] ) ? $arr [$token] : '';
		return $this->getInfo ( $id, $filed, $update );
	}
	function getInfoByAppid($appid, $filed = '', $update = false) {
		$key = 'Common_Apps_getInfoByAppid';
		$arr = S ( $key );
		if ($arr === false || ! isset ( $arr [$appid] ) || $update) {
			$list = $this->field ( 'id,appid' )->select ();
			foreach ( $list as $vo ) {
				$arr [$vo ['appid']] = $vo ['id'];
			}
			
			S ( $key, $arr, 604800 ); // 缓存一周
		}
		$id = isset ( $arr [$appid] ) ? $arr [$appid] : '';
		return $this->getInfo ( $arr [$appid], $filed, $update );
	}
	function clear($id, $type = '', $uid = '') {
		$info = $this->getInfo ( $id, '', true );
		if (empty ( $info ))
			return false;
		
		$this->getInfoByToken ( $info ['token'], '', true );
		$this->getInfoByAppid ( $info ['appid'], '', true );
	}
	function getMyPublics($uid, $type) {
		$map ['uid'] = $uid;
		$list = M ( 'apps_link' )->where ( $map )->select ();
		foreach ( $list as $vo ) {
			$info = $this->getInfo ( $vo ['mp_id'] );
			$res [$vo ['mp_id']] = array_merge ( $vo, $info );
		}
		return $res;
	}
	function updateInfo($id, $save) {
		$map ['id'] = $id;
		$res = $this->where ( $map )->save ( $save );
		if ($res !== false) {
			$this->clear ( $id );
		}
		
		return $res;
	}
	function updateRefreshToken($appid, $refresh_token) {
		$map ['appid'] = $appid;
		$info = $this->where ( $map )->field ( 'id' )->find ();
		if (! $info) {
			return false;
		}
		
		$save ['authorizer_refresh_token'] = $refresh_token;
		$res = $this->where ( $map )->save ( $save );
		if ($res) {
			$this->clear ( $info ['id'] );
		}
	}
}
?>
