<?php

/**
 * 修改运单号请求模型
 * @author auto create
 */
class Modifymailnorequest
{
	
	/** 
	 * 发货LP
	 **/
	public $biz_order_code;
	
	/** 
	 * 新运单号
	 **/
	public $new_tms_order_code;
	
	/** 
	 * 原运单号
	 **/
	public $old_tms_order_code;
	
	/** 
	 * 原配送公司编码
	 **/
	public $old_tms_service_code;
	
	/** 
	 * 供应商id
	 **/
	public $supplier_id;	
}
?>