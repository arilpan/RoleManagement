<?php

namespace Home\Model;

use Think\Model;

/**
 *
 * 得到单个
 * 得到全部
 *
 * @author aril
 *        
 */
class UserModel extends Model
{
	public function addOne($map)
	{
		$Gropus = D ( "User" );
		return $Gropus->add ( $map );
	}
	public function updateOne($id,$map)
	{
		$Gropus = D ( "User" );
		return $Gropus->where("id ='$id'")->save ( $map );
	}
	/**
	 * 是否存在id为指定id的数据，存在返回数据数组，不存返回空数组
	 *
	 * @param unknown $id        	
	 * @return int
	 */
	public function exist($id)
	{
		$Gropus = D ( "User" );
		$results= $Gropus->where ( "id='$id'" )->select ();
		return count($results);
	}
	/**
	 * 得到一个
	 */
	public function get($id)
	{
		$Gropus = D ( "User" );
		$group = $Gropus->where ( "id='$id'" )->select ();
		return $group [0];
	}
	/**
	 * 得到全部
	 */
	public function getAll()
	{
		$Gropus = D ( "User" );
		$AllGroups = $Gropus->select ();
		return $AllGroups;
	}
	/**
	 * 返回删除成功与否1或者0->true or false
	 *
	 * @param 需要删除的资源条件 $map        	
	 * @return int
	 */
	public function del($map)
	{
		$Gropus = D ( "User" );
		return $Gropus->where ( $map )->delete ();
	}
}