<?php

/**
 * 三方鉴定物流相关信息
 * @author auto create
 */
class IdentifyLogisticsInfo
{
	
	/** 
	 * 子订单号
	 **/
	public $detail_order_id;
	
	/** 
	 * 运单号
	 **/
	public $invoice_no;
	
	/** 
	 * 物流公司
	 **/
	public $logistics_company;
	
	/** 
	 * 是否退货
	 **/
	public $refund;
	
	/** 
	 * 退款单号
	 **/
	public $refund_id;
	
	/** 
	 * 阶段号
	 **/
	public $stage_no;	
}
?>