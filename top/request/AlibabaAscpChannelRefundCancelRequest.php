<?php
/**
 * TOP API: alibaba.ascp.channel.refund.cancel request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaAscpChannelRefundCancelRequest
{
	/** 
	 * 入参
	 **/
	private $cancelRefundOrderRequest;
	
	private $apiParas = array();
	
	public function setCancelRefundOrderRequest($cancelRefundOrderRequest)
	{
		$this->cancelRefundOrderRequest = $cancelRefundOrderRequest;
		$this->apiParas["cancel_refund_order_request"] = $cancelRefundOrderRequest;
	}

	public function getCancelRefundOrderRequest()
	{
		return $this->cancelRefundOrderRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.refund.cancel";
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
