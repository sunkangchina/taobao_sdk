<?php
/**
 * TOP API: alibaba.ascp.channel.sales.order.before.check request
 * 
 * @author auto create
 * @since 1.0, 2022.09.16
 */
class AlibabaAscpChannelSalesOrderBeforeCheckRequest
{
	/** 
	 * 请求参数
	 **/
	private $orderCheckRequest;
	
	private $apiParas = array();
	
	public function setOrderCheckRequest($orderCheckRequest)
	{
		$this->orderCheckRequest = $orderCheckRequest;
		$this->apiParas["order_check_request"] = $orderCheckRequest;
	}

	public function getOrderCheckRequest()
	{
		return $this->orderCheckRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.sales.order.before.check";
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
