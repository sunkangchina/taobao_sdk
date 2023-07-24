<?php

/**
 * 结果
 * @author auto create
 */
class OrderRightsResult
{
	
	/** 
	 * 赔付列表
	 **/
	public $payout_list;
	
	/** 
	 * 赔付列表总数，超过系统最大展示数量是以200+的格式返回，
	 **/
	public $total_count;	
}
?>