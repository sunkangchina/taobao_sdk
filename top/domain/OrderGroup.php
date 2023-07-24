<?php

/**
 * 合单订单列表，一个列表最多200
 * @author auto create
 */
class OrderGroup
{
	
	/** 
	 * erp系统内的订单id
	 **/
	public $erp_order_id;
	
	/** 
	 * 商品类型, 0:下单货品，1:赠品，2:其他
	 **/
	public $item_type;
	
	/** 
	 * 淘宝单号可以是交易订单、换货单、补货单、代发单或分销单等，当 order_type=0时，order_id =  taobao_parent_order_id。
	 **/
	public $order_id;
	
	/** 
	 * order_id的类型，0:淘宝交易订单,1: 换货单,2:分销单，3:补货单，4:代发单
	 **/
	public $order_type;
	
	/** 
	 * 淘宝交易主订单id
	 **/
	public $taobao_parent_order_id;
	
	/** 
	 * 淘宝交易子订单id
	 **/
	public $taobao_sub_order_id;	
}
?>