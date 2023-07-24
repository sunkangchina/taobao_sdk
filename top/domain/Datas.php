<?php

/**
 * 响应数据
 * @author auto create
 */
class Datas
{
	
	/** 
	 * 渠道编码
	 **/
	public $channel_code;
	
	/** 
	 * 1-良品 101 -在库残次
	 **/
	public $inventory_type;
	
	/** 
	 * 占用库存
	 **/
	public $lock_quantity;
	
	/** 
	 * 总库存
	 **/
	public $quantity;
	
	/** 
	 * 供应链中台货品ID
	 **/
	public $sc_item_id;
	
	/** 
	 * 供应链中台货主ID
	 **/
	public $source_user_id;
	
	/** 
	 * 供应链中台货仓code
	 **/
	public $store_code;	
}
?>