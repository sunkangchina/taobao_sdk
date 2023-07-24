<?php

/**
 * 提货信息，提货模式必填
 * @author auto create
 */
class PickUpGoodsInfo
{
	
	/** 
	 * 是否到货 1：是，0：否
	 **/
	public $arrival;
	
	/** 
	 * 详细地址
	 **/
	public $contact_address;
	
	/** 
	 * 区
	 **/
	public $contact_area;
	
	/** 
	 * 市
	 **/
	public $contact_city;
	
	/** 
	 * 提货联系人
	 **/
	public $contact_name;
	
	/** 
	 * 提货联系人电话
	 **/
	public $contact_phone;
	
	/** 
	 * 省
	 **/
	public $contact_province;
	
	/** 
	 * 提货信息扩展字段
	 **/
	public $good_info_feature;
	
	/** 
	 * 总包件数
	 **/
	public $total_pack_num;
	
	/** 
	 * 总体积
	 **/
	public $total_volume;
	
	/** 
	 * 总重量
	 **/
	public $total_weight;	
}
?>