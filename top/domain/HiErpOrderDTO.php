<?php

/**
 * 主单信息
 * @author auto create
 */
class HiErpOrderDTO
{
	
	/** 
	 * 买家留言
	 **/
	public $buyer_memo;
	
	/** 
	 * 渠道，比如213
	 **/
	public $channel;
	
	/** 
	 * 是否加密，默认为false
	 **/
	public $cipher_text;
	
	/** 
	 * 扩展字段，json格式
	 **/
	public $feature;
	
	/** 
	 * 下单时间，为空则取接口调用时间
	 **/
	public $order_time;
	
	/** 
	 * 订单类型，目前只支持销售单，取值为0
	 **/
	public $order_type;
	
	/** 
	 * 外部订单号，唯一标识
	 **/
	public $out_order_code;
	
	/** 
	 * 外部店铺名称
	 **/
	public $out_seller_nick;
	
	/** 
	 * 货主ID
	 **/
	public $owner_id;
	
	/** 
	 * 支付时间，为空则取接口调用时间
	 **/
	public $pay_time;
	
	/** 
	 * 卖家备注
	 **/
	public $seller_message;
	
	/** 
	 * 店铺名称
	 **/
	public $seller_nick;
	
	/** 
	 * 仓编码， 揽配业务必填
	 **/
	public $store_code;
	
	/** 
	 * 交易ID，非淘系订单，填写外部平台交易ID
	 **/
	public $trade_id;	
}
?>