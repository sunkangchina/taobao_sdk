<?php

/**
 * 服务单投保信息回传入参
 * @author auto create
 */
class ServiceInsuranceCallbackRequest
{
	
	/** 
	 * 投保数量
	 **/
	public $insurance_count;
	
	/** 
	 * 保单号
	 **/
	public $insurance_order_no;
	
	/** 
	 *  保单状态 1 投保成功； 99 投保失败
	 **/
	public $insurance_order_status;
	
	/** 
	 * 退保时间(暂定）
	 **/
	public $insurance_refund_time;
	
	/** 
	 * 投保对应服务单
	 **/
	public $insurance_service_order_id;
	
	/** 
	 * 投保时间
	 **/
	public $insurance_start_time;
	
	/** 
	 * 投保类型 1：只换不修；2：碎屏；3：延长保修；4:全面保修
	 **/
	public $insurance_type;	
}
?>