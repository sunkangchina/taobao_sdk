<?php
/**
 * TOP API: alibaba.ascp.channel.supplier.product.auth request
 * 
 * @author auto create
 * @since 1.0, 2022.10.27
 */
class AlibabaAscpChannelSupplierProductAuthRequest
{
	/** 
	 * 请求参数
	 **/
	private $channelProductAuthRequest;
	
	private $apiParas = array();
	
	public function setChannelProductAuthRequest($channelProductAuthRequest)
	{
		$this->channelProductAuthRequest = $channelProductAuthRequest;
		$this->apiParas["channel_product_auth_request"] = $channelProductAuthRequest;
	}

	public function getChannelProductAuthRequest()
	{
		return $this->channelProductAuthRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.supplier.product.auth";
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
