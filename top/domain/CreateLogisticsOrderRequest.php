<?php

/**
 * 创建服务履约物流单信息
 * @author auto create
 */
class CreateLogisticsOrderRequest
{
	
	/** 
	 * 快递公司
	 **/
	public $company_name;
	
	/** 
	 * 取件详细地址
	 **/
	public $from_address_detail;
	
	/** 
	 * 取件四级地址编码
	 **/
	public $from_address_location;
	
	/** 
	 * 快递单号
	 **/
	public $mail_no;
	
	/** 
	 * 外部单据id
	 **/
	public $outer_id;
	
	/** 
	 * 目的地详细地址
	 **/
	public $to_address_detail;
	
	/** 
	 * 目的地四级地址编码
	 **/
	public $to_address_location;
	
	/** 
	 * STAGE1:一阶段物流 STAGE2:二阶段物流
	 **/
	public $type;
	
	/** 
	 * 逗号分隔的工单id列表
	 **/
	public $workcard_ids;	
}
?>