<?php

/**
 * 工单回传理赔信息入参
 * @author auto create
 */
class WorkcardInsuranceCallbackRequest
{
	
	/** 
	 * 理赔单数量：理论都为1
	 **/
	public $claim_count;
	
	/** 
	 * 拒绝理赔原因（拒绝时启用
	 **/
	public $claim_desc;
	
	/** 
	 * 理赔金额（分
	 **/
	public $claim_fee;
	
	/** 
	 * 理赔单号
	 **/
	public $claim_order_no;
	
	/** 
	 * 理赔状态0：未理赔 1 理赔成功 2：理赔失败
	 **/
	public $claim_status;
	
	/** 
	 * 理赔时间
	 **/
	public $claim_time;
	
	/** 
	 * 工单ID
	 **/
	public $workcard_id;	
}
?>