<?php

/**
 * 通话记录信息
 * @author auto create
 */
class ServiceCallRecordCO
{
	
	/** 
	 * 呼叫记录的call_id
	 **/
	public $call_id;
	
	/** 
	 * 主叫拨打时间
	 **/
	public $call_time;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改日期
	 **/
	public $gmt_modified;
	
	/** 
	 * 唯一标识
	 **/
	public $id;
	
	/** 
	 * 录音文件链接
	 **/
	public $record_link;	
}
?>