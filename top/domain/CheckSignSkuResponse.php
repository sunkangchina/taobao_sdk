<?php

/**
 * 返回结果
 * @author auto create
 */
class CheckSignSkuResponse
{
	
	/** 
	 * 商家绑定的appkey	
	 **/
	public $appkey;
	
	/** 
	 * app名称	
	 **/
	public $apptitle;
	
	/** 
	 * NO_AUTH-您无权查询此商家信息;  HAS_SIGNED-已与当前服务商签约自助修改商品信息服务; NO_SIGNED-当前商家自助修改商品信息未签约服务商 HAS_SIGNED_OTHERS-已与其他服务商签约自助修改商品信息
	 **/
	public $status;	
}
?>