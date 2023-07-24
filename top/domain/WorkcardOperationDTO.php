<?php

/**
 * 操作记录信息
 * @author auto create
 */
class WorkcardOperationDTO
{
	
	/** 
	 * 动作描述
	 **/
	public $action;
	
	/** 
	 * 操作属性扩展字段
	 **/
	public $attribute_map;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modify;
	
	/** 
	 * 操作人
	 **/
	public $operator;
	
	/** 
	 * 操作人类型，1:买家,2:服务商,3:网点
	 **/
	public $operator_type;	
}
?>