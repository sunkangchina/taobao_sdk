<?php

/**
 * 包裹信息
 * @author auto create
 */
class Packagedto
{
	
	/** 
	 * 发货LP单号
	 **/
	public $consign_lg_order_code;
	
	/** 
	 * 订单号
	 **/
	public $order_code;
	
	/** 
	 * 外部订单号
	 **/
	public $out_biz_id;
	
	/** 
	 * 包裹号
	 **/
	public $package_code;
	
	/** 
	 * 包裹状态
	 **/
	public $status;
	
	/** 
	 * 发货仓code
	 **/
	public $store_code;
	
	/** 
	 * 配送公司code
	 **/
	public $tms_res_code;	
}
?>