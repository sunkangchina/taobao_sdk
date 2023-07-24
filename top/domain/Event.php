<?php

/**
 * 奇门事件对象
 * @author auto create
 */
class Event
{
	
	/** 
	 * 订单创建时间,数字
	 **/
	public $create;
	
	/** 
	 * 主单号对应的erp单号，转单、审单、通知配货、出库 需要填。拆单、合单场景下不用填
	 **/
	public $erp_order_id;
	
	/** 
	 * 触发事件的时间
	 **/
	public $event_time;
	
	/** 
	 * 扩展属性
	 **/
	public $ext;
	
	/** 
	 * 外部商家名称。必须同时填写platform
	 **/
	public $nick;
	
	/** 
	 * 商家平台编码.MAIN:官方渠道,JD:京东,DD:当当,PP:拍拍,YX:易讯,EBAY:ebay,AMAZON:亚马逊,SN:苏宁,GM:国美,WPH:唯品会,JM:聚美,MGJ:蘑菇街,YT:银泰,YHD:1号店,1688:1688,POS:POS门店,OTHER:其他
	 **/
	public $platform;
	
	/** 
	 * 事件状态，如QIMEN_ERP_TRANSFER，QIMEN_ERP_CHECK
	 **/
	public $status;
	
	/** 
	 * 淘宝子订单id（拆单、合单场景下不用填，其他场景需要回传,用英文逗号隔开）
	 **/
	public $taobao_sub_order_ids;
	
	/** 
	 * 淘宝订单号
	 **/
	public $tid;	
}
?>