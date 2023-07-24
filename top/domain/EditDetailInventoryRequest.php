<?php

/**
 * 库存编辑列表。每次不超过100条
 * @author auto create
 */
class EditDetailInventoryRequest
{
	
	/** 
	 * 不为0的整数
	 **/
	public $quantity;
	
	/** 
	 * 目标库存key。如果容量的时间间隔为天时，则必须为yyyy-MM-dd格式；如果容量的时间间隔为小时，则必须为yyyy-MM-dd HH:00-HH:00格式
	 **/
	public $target_inventory_key;	
}
?>