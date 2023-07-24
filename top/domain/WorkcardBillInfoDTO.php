<?php

/**
 * 工单结算信息
 * @author auto create
 */
class WorkcardBillInfoDTO
{
	
	/** 
	 * 分成金额（分）
	 **/
	public $amount;
	
	/** 
	 * 费用明细
	 **/
	public $details;
	
	/** 
	 * 平台抽佣比例 0.0 ~ 1.0
	 **/
	public $platform_commission_rate;
	
	/** 
	 * 工单ID
	 **/
	public $workcard_id;	
}
?>