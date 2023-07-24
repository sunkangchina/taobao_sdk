<?php

/**
 * 账单明细
 * @author auto create
 */
class BillDetailInfo
{
	
	/** 
	 * 账单持续时间，号租费时单位为天，通话费单位为分钟
	 **/
	public $bill_duration;
	
	/** 
	 * 0-号租费，1-通话费
	 **/
	public $bill_item;
	
	/** 
	 * 账单计费
	 **/
	public $cost;
	
	/** 
	 * 已弃用,查询账单详情请使用taobao.top.secret.bill.detail接口。
	 **/
	public $end;
	
	/** 
	 * 已弃用,查询账单详情请使用taobao.top.secret.bill.detail接口。
	 **/
	public $secret_no;
	
	/** 
	 * 商家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 店铺名称
	 **/
	public $shop_nick;
	
	/** 
	 * 已弃用,查询账单详情请使用taobao.top.secret.bill.detail接口。
	 **/
	public $start;	
}
?>