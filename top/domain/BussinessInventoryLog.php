<?php

/**
 * 明细
 * @author auto create
 */
class BussinessInventoryLog
{
	
	/** 
	 * 单据类型
	 **/
	public $activity_type;
	
	/** 
	 * 库存出入库数量
	 **/
	public $change_quantity;
	
	/** 
	 * 每日库存结余数量
	 **/
	public $day_surplus_quantity;
	
	/** 
	 * ERP单号
	 **/
	public $erp_order_code;
	
	/** 
	 * 变动日期（格式YYYY-MM-DD HH:MI:SS）
	 **/
	public $gmt_create;
	
	/** 
	 * 库存类型（包含在仓，不包含在途和物流差异
	 **/
	public $inventory_type;
	
	/** 
	 * 业务主单号
	 **/
	public $op_order_id;
	
	/** 
	 * 业务子单号
	 **/
	public $op_sub_order_id;
	
	/** 
	 * 货品编码
	 **/
	public $sc_item_code;
	
	/** 
	 * 货品ID
	 **/
	public $sc_item_id;
	
	/** 
	 * 仓编码
	 **/
	public $store_code;
	
	/** 
	 * 淘系交易子单
	 **/
	public $sub_trade_id;
	
	/** 
	 * 淘系交易主单
	 **/
	public $trade_id;
	
	/** 
	 * 物流LBX号
	 **/
	public $wms_order_code;	
}
?>