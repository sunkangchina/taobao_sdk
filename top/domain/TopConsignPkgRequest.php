<?php

/**
 * 包裹信息
 * @author auto create
 */
class TopConsignPkgRequest
{
	
	/** 
	 * 物流公司代码.如"POST"就代表中国邮政,"ZJS"就代表宅急送.调用 taobao.logistics.companies.get 获取
	 **/
	public $company_code;
	
	/** 
	 * 包裹中商品信息
	 **/
	public $goods;
	
	/** 
	 * 运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入
	 **/
	public $out_sid;	
}
?>