<?php
/**
 * TOP API: alibaba.ascp.channel.main.refund.create request
 * 
 * @author auto create
 * @since 1.0, 2021.11.18
 */
class AlibabaAscpChannelMainRefundCreateRequest
{
	/** 
	 * 逆向单创建请求
	 **/
	private $refundCreateRequest;
	
	private $apiParas = array();
	
	public function setRefundCreateRequest($refundCreateRequest)
	{
		$this->refundCreateRequest = $refundCreateRequest;
		$this->apiParas["refund_create_request"] = $refundCreateRequest;
	}

	public function getRefundCreateRequest()
	{
		return $this->refundCreateRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.main.refund.create";
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
