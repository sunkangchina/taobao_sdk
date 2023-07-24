<?php

/**
 * 开单信息
 * @author auto create
 */
class WaybillGenInfo
{
	
	/** 
	 * 是否拼单：0为否，1为是
	 **/
	public $gather;
	
	/** 
	 * 拼单数量
	 **/
	public $gather_num;
	
	/** 
	 * 交易单号
	 **/
	public $main_trade_no;
	
	/** 
	 * 交易渠道：1为淘宝/天猫，2为其它，3为抖音，4为拼多多，5为京东，6为唯品会
	 **/
	public $order_channel;
	
	/** 
	 * 外部单号
	 **/
	public $related_order_code;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 备注图片
	 **/
	public $remark_picture;
	
	/** 
	 * 商家id
	 **/
	public $seller_id;
	
	/** 
	 * 总包件数
	 **/
	public $total_pack_num;
	
	/** 
	 * 总体积
	 **/
	public $total_volume;	
}
?>