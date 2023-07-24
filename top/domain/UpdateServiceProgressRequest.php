<?php

/**
 * 服务进度信息
 * @author auto create
 */
class UpdateServiceProgressRequest
{
	
	/** 
	 * 服务动作
	 **/
	public $action;
	
	/** 
	 * 扩展信息回传备注
	 **/
	public $attribute_map;
	
	/** 
	 * 服务描述
	 **/
	public $desc;
	
	/** 
	 * 图片地址回传集合
	 **/
	public $pic_url_list;
	
	/** 
	 * 工单id
	 **/
	public $workcard_id;	
}
?>