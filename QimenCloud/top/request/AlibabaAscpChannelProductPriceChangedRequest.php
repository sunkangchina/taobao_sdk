<?php
/**
 * TOP API: qimen.alibaba.ascp.channel.product.price.changed request
 * 
 * @author auto create
 * @since 1.0, 2021.07.05
 */
class AlibabaAscpChannelProductPriceChangedRequest
{
	/** 
	 * 路由参数
	 **/
	private $customerId;
	
	/** 
	 * 请求
	 **/
	private $request;
	
	private $apiParas = array();
	
	public function setCustomerId($customerId)
	{
		$this->customerId = $customerId;
		$this->apiParas["customerId"] = $customerId;
	}

	public function getCustomerId()
	{
		return $this->customerId;
	}

	public function setRequest($request)
	{
		$this->request = $request;
		$this->apiParas["request"] = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function getApiMethodName()
	{
		return "qimen.alibaba.ascp.channel.product.price.changed";
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
