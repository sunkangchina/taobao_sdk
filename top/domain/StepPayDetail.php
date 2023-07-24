<?php

/**
 * 分阶段支付详情
 * @author auto create
 */
class StepPayDetail
{
	
	/** 
	 * 分阶段支付单Id
	 **/
	public $id;
	
	/** 
	 * 支付状态
	 **/
	public $pay_status;
	
	/** 
	 * 支付金额
	 **/
	public $step_actual_pay_fee;
	
	/** 
	 * 支付宝交易号
	 **/
	public $step_channel_no;
	
	/** 
	 * 支付方式
	 **/
	public $step_instrument_code;
	
	/** 
	 * 支付顺序
	 **/
	public $step_no;	
}
?>