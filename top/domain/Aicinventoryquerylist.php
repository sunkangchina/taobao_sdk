<?php

/**
 * 参数列表
 * @author auto create
 */
class Aicinventoryquerylist
{
	
	/** 
	 * 销售渠道列表不能用6500，已切换至1000
	 **/
	public $channel_code_list;
	
	/** 
	 * 库存类型列表
	 **/
	public $inventory_type_list;
	
	/** 
	 * 协议ID列表，一般不用入参
	 **/
	public $publish_order_nos;
	
	/** 
	 * 货品ID
	 **/
	public $sc_item_id;
	
	/** 
	 * 货主ID
	 **/
	public $source_user_id;
	
	/** 
	 * 仓库编码列表，一般不用入参
	 **/
	public $store_code_list;	
}
?>