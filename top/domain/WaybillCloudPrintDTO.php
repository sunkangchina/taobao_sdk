<?php

/**
 * 电子面单信息
 * @author auto create
 */
class WaybillCloudPrintDTO
{
	
	/** 
	 * 对应传入的packageCode
	 **/
	public $package_code;
	
	/** 
	 * 父面单号 本次没有，为子母单预留
	 **/
	public $parent_waybill_code;
	
	/** 
	 * 面单信息
	 **/
	public $print_data;
	
	/** 
	 * 面单号
	 **/
	public $waybill_code;	
}
?>