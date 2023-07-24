<?php

/**
 * 货品明细
 * @author auto create
 */
class HiErpItemDTO
{
	
	/** 
	 * 扩展字段，json格式
	 **/
	public $feature;
	
	/** 
	 * 货品金额
	 **/
	public $item_amount;
	
	/** 
	 * 货品数量
	 **/
	public $item_qty;
	
	/** 
	 * 外部订单明细唯一标识
	 **/
	public $out_order_item_id;
	
	/** 
	 * 后端货品编码， 货品id和货品编码二选一必填，优先取货品ID
	 **/
	public $sc_item_code;
	
	/** 
	 * 后端货品ID， 货品id和货品编码二选一必填，优先取货品ID
	 **/
	public $sc_item_id;
	
	/** 
	 * 子交易单号
	 **/
	public $sub_trade_id;	
}
?>