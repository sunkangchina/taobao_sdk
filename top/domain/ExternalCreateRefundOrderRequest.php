<?php

/**
 * 逆向单创建请求
 * @author auto create
 */
class ExternalCreateRefundOrderRequest
{
	
	/** 
	 * 币种
	 **/
	public $currency_type;
	
	/** 
	 * 外部订单号
	 **/
	public $out_order_no;
	
	/** 
	 * 外部退款单号
	 **/
	public $out_refund_no;
	
	/** 
	 * 退款举证图片列表
	 **/
	public $proof_pic_urls;
	
	/** 
	 * 退款原因
	 **/
	public $refund_reason;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 销售订单号
	 **/
	public $sale_order_no;	
}
?>