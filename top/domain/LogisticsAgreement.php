<?php

/**
 * 物流服务承诺
 * @author auto create
 */
class LogisticsAgreement
{
	
	/** 
	 * 物流信息，多个值时用英文逗号隔开
	 **/
	public $asdp_ads;
	
	/** 
	 * 物流服务业务身份
	 **/
	public $asdp_biz_type;
	
	/** 
	 * 服务承诺/异常文案
	 **/
	public $logistics_service_msg;
	
	/** 
	 * 承诺/最晚送达时间
	 **/
	public $promise_sign_time;
	
	/** 
	 * 计划送达时间
	 **/
	public $sign_time;	
}
?>