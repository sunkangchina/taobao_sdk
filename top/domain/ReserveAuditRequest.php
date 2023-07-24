<?php

/**
 * 审核接口入参
 * @author auto create
 */
class ReserveAuditRequest
{
	
	/** 
	 * 审核工单id
	 **/
	public $id;
	
	/** 
	 * 改派师傅手机号
	 **/
	public $new_worker_mobile;
	
	/** 
	 * 审核操作人
	 **/
	public $operator;
	
	/** 
	 * 审核拒绝原因
	 **/
	public $reject_reason;
	
	/** 
	 * 审核状态
	 **/
	public $state;
	
	/** 
	 * 变更时间（日期）
	 **/
	public $update_time;
	
	/** 
	 * 变更时间（时间段）
	 **/
	public $update_time_range;	
}
?>