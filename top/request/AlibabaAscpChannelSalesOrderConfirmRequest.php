<?php
/**
 * TOP API: alibaba.ascp.channel.sales.order.confirm request
 * 
 * @author auto create
 * @since 1.0, 2022.09.08
 */
class AlibabaAscpChannelSalesOrderConfirmRequest
{
	/** 
	 * 请求参数
	 **/
	private $confirmOrderRequest;
	
	private $apiParas = array();
	
	public function setConfirmOrderRequest($confirmOrderRequest)
	{
		$this->confirmOrderRequest = $confirmOrderRequest;
		$this->apiParas["confirm_order_request"] = $confirmOrderRequest;
	}

	public function getConfirmOrderRequest()
	{
		return $this->confirmOrderRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.sales.order.confirm";
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
