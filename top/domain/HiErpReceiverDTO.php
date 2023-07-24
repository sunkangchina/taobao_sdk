<?php

/**
 * 收件人信息
 * @author auto create
 */
class HiErpReceiverDTO
{
	
	/** 
	 * 区，市和区二选一必填
	 **/
	public $area;
	
	/** 
	 * 手机号码
	 **/
	public $cell_phone;
	
	/** 
	 * 市，市和区二选一必填
	 **/
	public $city;
	
	/** 
	 * 国家
	 **/
	public $country;
	
	/** 
	 * 详细地址
	 **/
	public $detail_address;
	
	/** 
	 * 扩展字段，json格式
	 **/
	public $feature;
	
	/** 
	 * 省
	 **/
	public $province;
	
	/** 
	 * 收件人姓名
	 **/
	public $receiver_name;
	
	/** 
	 * 电话号码
	 **/
	public $tele_phone;
	
	/** 
	 * 街道
	 **/
	public $town;	
}
?>