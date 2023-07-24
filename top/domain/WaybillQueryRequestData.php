<?php

/**
 * 包裹列表
 * @author auto create
 */
class WaybillQueryRequestData
{
	
	/** 
	 * 包裹code，同一个订单唯一，同一个lp单号多次或同一次传重复的包裹号会被幂等
	 **/
	public $code;
	
	/** 
	 * 包裹描述信息
	 **/
	public $description;
	
	/** 
	 * 高，单位mm
	 **/
	public $height;
	
	/** 
	 * 商品信息
	 **/
	public $items;
	
	/** 
	 * 长，单位mm
	 **/
	public $length;
	
	/** 
	 * 子包裹数，在快运取号场景可能会用到
	 **/
	public $total_package_count;
	
	/** 
	 * 包裹体积，单位立方厘米
	 **/
	public $volume;
	
	/** 
	 * 包裹重量，单位克
	 **/
	public $weight;
	
	/** 
	 * 宽，单位mm
	 **/
	public $width;	
}
?>