<?php

/**
 * 商品信息，除维修模式必填
 * @author auto create
 */
class OmsItemInfo
{
	
	/** 
	 * 商品叶子类目id
	 **/
	public $category_code;
	
	/** 
	 * 商品扩展字段
	 **/
	public $item_info_feature;
	
	/** 
	 * 商品名称
	 **/
	public $name;
	
	/** 
	 * 商品图片，多张用英文逗号隔开
	 **/
	public $pictures;
	
	/** 
	 * 商品数量
	 **/
	public $quantity;
	
	/** 
	 * 商品型号
	 **/
	public $type;	
}
?>