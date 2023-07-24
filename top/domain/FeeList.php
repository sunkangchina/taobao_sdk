<?php

/**
 * 工单费用清单
 * @author auto create
 */
class FeeList
{
	
	/** 
	 * 费用金额
	 **/
	public $fee_amount;
	
	/** 
	 * 费用名称
	 **/
	public $fee_name;
	
	/** 
	 * 费用描述
	 **/
	public $fee_title;
	
	/** 
	 * 费用产生时间
	 **/
	public $gmt_create;
	
	/** 
	 * 费用来源单号，仅增加费用、退款有值
	 **/
	public $src_order_id;	
}
?>