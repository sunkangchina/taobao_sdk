<?php

/**
 * 发货回传请求模型
 * @author auto create
 */
class Consignordershiprequest
{
	
	/** 
	 * 履约单号
	 **/
	public $biz_order_code;
	
	/** 
	 * 一盘货业务模式，默认为0代表商家仓商家配，为1代表商家仓自营配 (为1时会强制校验配CP和单号必须与取号时一致，且多包裹必须一次性发货)
	 **/
	public $business_model;
	
	/** 
	 * 履约子单明细
	 **/
	public $order_items;
	
	/** 
	 * 外部业务号，幂等控制使用
	 **/
	public $out_biz_id;
	
	/** 
	 * 发件人信息
	 **/
	public $sender_info;
	
	/** 
	 * 发货仓编码
	 **/
	public $store_code;
	
	/** 
	 * 发货仓名称
	 **/
	public $store_name;
	
	/** 
	 * 供应商id
	 **/
	public $supplier_id;
	
	/** 
	 * 包裹列表
	 **/
	public $tms_orders;
	
	/** 
	 * 是否整单发货,目前只支持履约单整单发货回传
	 **/
	public $whole_sheet_consigned;	
}
?>