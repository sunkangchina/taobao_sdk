<?php
/**
 * TOP API: alibaba.ascp.channel.distributor.price.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaAscpChannelDistributorPriceGetRequest
{
	/** 
	 * 价格入参
	 **/
	private $priceRequest;
	
	private $apiParas = array();
	
	public function setPriceRequest($priceRequest)
	{
		$this->priceRequest = $priceRequest;
		$this->apiParas["price_request"] = $priceRequest;
	}

	public function getPriceRequest()
	{
		return $this->priceRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.distributor.price.get";
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
