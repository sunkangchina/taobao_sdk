<?php
/**
 * TOP API: alibaba.ascp.channel.sales.order.create request
 * 
 * @author auto create
 * @since 1.0, 2022.09.08
 */
class AlibabaAscpChannelSalesOrderCreateRequest
{
	/** 
	 * 请求参数
	 **/
	private $createOrderRequest;
	
	private $apiParas = array();
	
	public function setCreateOrderRequest($createOrderRequest)
	{
		$this->createOrderRequest = $createOrderRequest;
		$this->apiParas["create_order_request"] = $createOrderRequest;
	}

	public function getCreateOrderRequest()
	{
		return $this->createOrderRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.sales.order.create";
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
