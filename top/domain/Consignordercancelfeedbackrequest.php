<?php

/**
 * 取消发货反馈回告请求
 * @author auto create
 */
class Consignordercancelfeedbackrequest
{
	
	/** 
	 * 履约单号
	 **/
	public $biz_order_code;
	
	/** 
	 * 业务时间
	 **/
	public $biz_time;
	
	/** 
	 * 一盘货业务模式，默认为0代表商家仓商家配，为1代表商家仓自营配 (为1时会强制校验配CP和单号必须与取号时一致，且多包裹必须一次性发货)
	 **/
	public $business_model;
	
	/** 
	 * 取消失败原因
	 **/
	public $cancel_reason;
	
	/** 
	 * 是否取消成功,true成功/false失败
	 **/
	public $cancel_result;
	
	/** 
	 * 供应商id
	 **/
	public $supplier_id;	
}
?>