<?php

/**
 * 面单查询请求
 * @author auto create
 */
class WaybillDetailQueryRequest
{
	
	/** 
	 * CP快递公司编码
	 **/
	public $cp_code;
	
	/** 
	 * 0:根据cp_code和waybil_code查询;1:根据订单号查询(默认根据cp_code和waybill_code查询)
	 **/
	public $query_by;
	
	/** 
	 * 需要查询的订单号
	 **/
	public $trade_order_list;
	
	/** 
	 * 电子面单单号
	 **/
	public $waybill_codes;	
}
?>