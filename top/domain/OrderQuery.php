<?php

/**
 * 查询条件列表，多个条件之间是OR关系，最多支持20个。receiver_name、receiver_mobile、receiver_phone至少有一个值不为空。
 * @author auto create
 */
class OrderQuery
{
	
	/** 
	 * 查询三个月内交易创建时间开始。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $end_created;
	
	/** 
	 * 收件人的手机号
	 **/
	public $receiver_mobile;
	
	/** 
	 * 收件人的姓名
	 **/
	public $receiver_name;
	
	/** 
	 * 收件人电话号码
	 **/
	public $receiver_phone;
	
	/** 
	 * 查询交易创建时间结束。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $start_created;	
}
?>