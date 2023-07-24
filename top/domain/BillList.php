<?php

/**
 * 分页数据
 * @author auto create
 */
class BillList
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
	 * 费用备注
	 **/
	public $fee_notice;
	
	/** 
	 * 费用类型
	 **/
	public $fee_type;
	
	/** 
	 * 费用产生时间
	 **/
	public $gmt_create;
	
	/** 
	 * 提现时间
	 **/
	public $pay_time;
	
	/** 
	 * 提现支付宝流水号
	 **/
	public $pay_trade_no;
	
	/** 
	 * 提现支付宝备注
	 **/
	public $pay_trade_notice;
	
	/** 
	 * 抽佣比例
	 **/
	public $platform_commission_rate;
	
	/** 
	 * 费用来源单号，仅退款和增加费用有值
	 **/
	public $src_order_id;
	
	/** 
	 * 工单ID
	 **/
	public $workcard_id;	
}
?>