<?php

/**
 * 子单退款创建请求
 * @author auto create
 */
class ExternalCreateRefundOrderDetailRequest
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
	 * 外部子订单号
	 **/
	public $out_sub_order_no;
	
	/** 
	 * 退款举证图片列表
	 **/
	public $proof_pic_urls;
	
	/** 
	 * 退款金额
	 **/
	public $refund_fee;
	
	/** 
	 * 退货数量
	 **/
	public $refund_quantity;
	
	/** 
	 * 退款原因
	 **/
	public $refund_reason;
	
	/** 
	 * 退款类型
	 **/
	public $refund_type;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 销售订单号
	 **/
	public $sale_order_no;
	
	/** 
	 * 子销售单号
	 **/
	public $sub_sale_order_no;	
}
?>