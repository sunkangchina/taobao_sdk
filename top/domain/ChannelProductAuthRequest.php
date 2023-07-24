<?php

/**
 * 请求参数
 * @author auto create
 */
class ChannelProductAuthRequest
{
	
	/** 
	 * 渠道编码
	 **/
	public $channel_code;
	
	/** 
	 * 授权纬度，5：经营模式 + 指定用户/6：经营模式 + 指定渠道
	 **/
	public $dimension_type;
	
	/** 
	 * 分销商名称，指定用户传值
	 **/
	public $distributor_nick;
	
	/** 
	 * 渠道产品id
	 **/
	public $product_id;
	
	/** 
	 * 二级渠道编码
	 **/
	public $sub_channel_code;	
}
?>