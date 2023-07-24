<?php

/**
 * 查询面单请求参数
 * @author auto create
 */
class Waybillqueryrequest
{
	
	/** 
	 * 自营接口配业务模式，默认为1代表商家仓自营配 (为1时会强制校验发货的配CP和单号必须与取号时一致，且多包裹必须一次性发货)
	 **/
	public $business_model;
	
	/** 
	 * 发货LP单号
	 **/
	public $consign_lp_order_code;
	
	/** 
	 * 操作人id
	 **/
	public $operator;
	
	/** 
	 * 操作人名称
	 **/
	public $operator_name;
	
	/** 
	 * 包裹列表
	 **/
	public $packages;
	
	/** 
	 * 物流服务编码
	 **/
	public $service_code;
	
	/** 
	 * 供应商id
	 **/
	public $supplier_id;	
}
?>