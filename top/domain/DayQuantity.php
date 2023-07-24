<?php

/**
 * 具体的调整值参数
 * @author auto create
 */
class DayQuantity
{
	
	/** 
	 * 非必填，
	 **/
	public $available;
	
	/** 
	 * 必须是YYYY-MM-DD格式
	 **/
	public $day;
	
	/** 
	 * 容量值为1
	 **/
	public $quantity;
	
	/** 
	 * 表示具体的某一天内的一个时间段。注意：如果配置了改值，则这里容量调整的值则是2022-07-01 08:00-09:00的容量，不配置则是调整07-01这一天的容量
	 **/
	public $time_range;	
}
?>