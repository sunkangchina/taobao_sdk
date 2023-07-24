<?php

/**
 * 合单请求列表，最多支持100个。
 * @author auto create
 */
class OrderMerge
{
	
	/** 
	 * 收件人ID (Open Addressee ID)，长度在128个字符之内。
	 **/
	public $oaid;
	
	/** 
	 * 订单ID
	 **/
	public $tid;	
}
?>