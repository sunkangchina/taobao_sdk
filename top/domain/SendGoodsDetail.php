<?php

/**
 * 包裹详情（仅支持成分品）
 * @author auto create
 */
class SendGoodsDetail
{
	
	/** 
	 * 数量
	 **/
	public $amount;
	
	/** 
	 * 0全部发货1部分发货
	 **/
	public $consign_status;
	
	/** 
	 * 包裹详情
	 **/
	public $goods_details;
	
	/** 
	 * 0普通1组合商品2组套商品3后置赠品4状态推进
	 **/
	public $type;	
}
?>