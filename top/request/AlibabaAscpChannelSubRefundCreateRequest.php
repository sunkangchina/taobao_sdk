<?php
/**
 * TOP API: alibaba.ascp.channel.sub.refund.create request
 * 
 * @author auto create
 * @since 1.0, 2021.11.22
 */
class AlibabaAscpChannelSubRefundCreateRequest
{
	/** 
	 * 子单退款创建请求
	 **/
	private $subRefundCreateReq;
	
	private $apiParas = array();
	
	public function setSubRefundCreateReq($subRefundCreateReq)
	{
		$this->subRefundCreateReq = $subRefundCreateReq;
		$this->apiParas["sub_refund_create_req"] = $subRefundCreateReq;
	}

	public function getSubRefundCreateReq()
	{
		return $this->subRefundCreateReq;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.sub.refund.create";
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
