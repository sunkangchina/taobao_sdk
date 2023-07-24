<?php

/**
 * 商家仓库存查询请求参数
 * @author auto create
 */
class MerchantInventoryQuery
{
	
	/** 
	 * 供应链货主id list 单次<=20
	 **/
	public $sc_item_ids;
	
	/** 
	 * 供应链中台商家仓code
	 **/
	public $store_code;
	
	/** 
	 * 供应链中台供应商id
	 **/
	public $supplier_id;
	
	/** 
	 * 供应链中台物流货主id
	 **/
	public $user_id;	
}
?>