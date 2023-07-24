<?php
/**
 * TOP API: alibaba.ascp.channel.distributor.product.detail request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class AlibabaAscpChannelDistributorProductDetailRequest
{
	/** 
	 * 产品详情查询入参
	 **/
	private $productDetailRequest;
	
	private $apiParas = array();
	
	public function setProductDetailRequest($productDetailRequest)
	{
		$this->productDetailRequest = $productDetailRequest;
		$this->apiParas["product_detail_request"] = $productDetailRequest;
	}

	public function getProductDetailRequest()
	{
		return $this->productDetailRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.distributor.product.detail";
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
