<?php

/**
 * 查询可用工人model
 * @author auto create
 */
class AvailableWorkerQueryForTopReqDTO
{
	
	/** 
	 * 地址编码
	 **/
	public $area_code;
	
	/** 
	 * 服务容量查询结束日期。使用场景预约结束时间
	 **/
	public $end_date;
	
	/** 
	 * 服务编码
	 **/
	public $service_code;
	
	/** 
	 * 服务skuCode
	 **/
	public $service_sku_code;
	
	/** 
	 * 网点code
	 **/
	public $service_store_code;
	
	/** 
	 * 服务容量查询开始日期。使用场景预约开始时间
	 **/
	public $start_date;	
}
?>