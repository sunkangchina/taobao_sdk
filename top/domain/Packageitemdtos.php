<?php

/**
 * 包裹明细列表
 * @author auto create
 */
class Packageitemdtos
{
	
	/** 
	 * 商品名称
	 **/
	public $item_name;
	
	/** 
	 * 商品数量
	 **/
	public $item_quantity;
	
	/** 
	 * 包裹号
	 **/
	public $package_id;
	
	/** 
	 * 包裹明细签收信息列表
	 **/
	public $package_item_sign_info_dto_list;
	
	/** 
	 * 货品id
	 **/
	public $sc_item_id;	
}
?>