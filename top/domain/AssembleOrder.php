<?php

/**
 * 批量回传集合,一次接口最多40
 * @author auto create
 */
class AssembleOrder
{
	
	/** 
	 * 组合id，服务商内部的合单操作id，取消合单会根据group_id进行删除操作。
	 **/
	public $group_id;
	
	/** 
	 * 合单订单列表，一个列表最多200
	 **/
	public $order_list;	
}
?>