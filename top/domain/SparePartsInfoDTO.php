<?php

/**
 * 备件明细
 * @author auto create
 */
class SparePartsInfoDTO
{
	
	/** 
	 * 备件一级类目
	 **/
	public $first_level_category_id;
	
	/** 
	 * 备件型号
	 **/
	public $model;
	
	/** 
	 * 是否需要返件
	 **/
	public $need_return;
	
	/** 
	 * 备件进价
	 **/
	public $purchase_price;
	
	/** 
	 * 备件二级类目
	 **/
	public $second_level_category_id;
	
	/** 
	 * 备件销售价
	 **/
	public $selling_price;
	
	/** 
	 * 备件编码
	 **/
	public $spare_parts_code;
	
	/** 
	 * 备件数量
	 **/
	public $spare_parts_count;
	
	/** 
	 * 备件名称
	 **/
	public $spare_parts_name;
	
	/** 
	 * 备件来源
	 **/
	public $spare_parts_source;
	
	/** 
	 * 备件类型
	 **/
	public $spare_parts_type;	
}
?>