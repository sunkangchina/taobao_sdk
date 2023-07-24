<?php
/**
 * TOP API: alibaba.ascp.channel.supplier.product.price.apply request
 * 
 * @author auto create
 * @since 1.0, 2022.10.27
 */
class AlibabaAscpChannelSupplierProductPriceApplyRequest
{
	/** 
	 * 请求参数
	 **/
	private $topPriceApplyCreateRequest;
	
	private $apiParas = array();
	
	public function setTopPriceApplyCreateRequest($topPriceApplyCreateRequest)
	{
		$this->topPriceApplyCreateRequest = $topPriceApplyCreateRequest;
		$this->apiParas["top_price_apply_create_request"] = $topPriceApplyCreateRequest;
	}

	public function getTopPriceApplyCreateRequest()
	{
		return $this->topPriceApplyCreateRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.supplier.product.price.apply";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
