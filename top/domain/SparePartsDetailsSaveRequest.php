<?php

/**
 * 请求入参
 * @author auto create
 */
class SparePartsDetailsSaveRequest
{
	
	/** 
	 * 备件申请单信息
	 **/
	public $application_info_dto;
	
	/** 
	 * 备件明细
	 **/
	public $spare_parts_info_dto;
	
	/** 
	 * 天猫服务工单号
	 **/
	public $work_card_id;	
}
?>