<?php

/**
 * 返回信息
 * @author auto create
 */
class ExpressDto
{
	
	/** 
	 * 物流服务商账号名称
	 **/
	public $company_name;
	
	/** 
	 * 寄件单号（废弃）
	 **/
	public $express_order_id;
	
	/** 
	 * 物流订单号
	 **/
	public $logistics_order_id;
	
	/** 
	 * 物流商账号ID（（ERP服务商依据不同的账号ID，走不同的物流系统对接方式））
	 **/
	public $logistics_tp_id;
	
	/** 
	 * 快递单号
	 **/
	public $mail_no;
	
	/** 
	 * 打印免单信息
	 **/
	public $print_info;	
}
?>