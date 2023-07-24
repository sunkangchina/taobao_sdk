<?php
/**
 * TOP API: qimen.alibaba.ascp.industry.anomaly.recourse.payment.callback request
 * 
 * @author auto create
 * @since 1.0, 2023.03.24
 */
class AlibabaAscpIndustryAnomalyRecoursePaymentCallbackRequest
{
	/** 
	 * 商家id(用于路由)
	 **/
	private $customerId;
	
	/** 
	 * 请求体
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
		return "qimen.alibaba.ascp.industry.anomaly.recourse.payment.callback";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->customerId,"customerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
