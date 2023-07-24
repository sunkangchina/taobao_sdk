<?php
/**
 * TOP API: alibaba.ascp.channel.refund.close request
 * 
 * @author auto create
 * @since 1.0, 2022.12.14
 */
class AlibabaAscpChannelRefundCloseRequest
{
	/** 
	 * 入参
	 **/
	private $closeRefundOrderRequest;
	
	private $apiParas = array();
	
	public function setCloseRefundOrderRequest($closeRefundOrderRequest)
	{
		$this->closeRefundOrderRequest = $closeRefundOrderRequest;
		$this->apiParas["close_refund_order_request"] = $closeRefundOrderRequest;
	}

	public function getCloseRefundOrderRequest()
	{
		return $this->closeRefundOrderRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.refund.close";
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
