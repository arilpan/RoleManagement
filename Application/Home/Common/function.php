<?php
function existId($id)
{
	$Table = D ( "AuthGroup" );
	if($Table->exist($id))
	{
	
	}else
	{
		$this->error("不存在该资源id",U('Role/index'));
		return ;
	}
}