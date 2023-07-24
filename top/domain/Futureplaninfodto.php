<?php

/**
 * 期货计划信息
 * @author auto create
 */
class Futureplaninfodto
{
	
	/** 
	 * 业务活动代码, 新增：FU010 是aic_future_inv_publish_type=3，修改：FU020 aic_future_inv_publish_type=2
	 **/
	public $aic_future_inv_publish_type;
	
	/** 
	 * 考拉默认填2
	 **/
	public $aic_future_inv_time_strategy;
	
	/** 
	 * 销售结束时间，YYYYMMDDHHMMSS，默认是销售开始时间之后延长5年
	 **/
	public $end_date;
	
	/** 
	 * 相对时间天数(单位:天 适用于相对计划)
	 **/
	public $relative_time;
	
	/** 
	 * 销售开始时间，YYYYMMDDHHMMSS
	 **/
	public $start_date;	
}
?>