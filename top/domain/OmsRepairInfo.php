<?php

/**
 * 维修信息
 * @author auto create
 */
class OmsRepairInfo
{
	
	/** 
	 * 商品叶子类目id
	 **/
	public $category_code;
	
	/** 
	 * 维修描述
	 **/
	public $description;
	
	/** 
	 * 商品图片，多张用英文逗号隔开
	 **/
	public $pictures;
	
	/** 
	 * 商品数量
	 **/
	public $quantity;
	
	/** 
	 * 维修扩展字段
	 **/
	public $repair_info_feature;	
}
?>