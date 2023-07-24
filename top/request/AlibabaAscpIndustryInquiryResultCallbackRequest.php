<?php
/**
 * TOP API: alibaba.ascp.industry.inquiry.result.callback request
 * 
 * @author auto create
 * @since 1.0, 2023.04.12
 */
class AlibabaAscpIndustryInquiryResultCallbackRequest
{
	/** 
	 * 询价结果
	 **/
	private $inquiryResult;
	
	private $apiParas = array();
	
	public function setInquiryResult($inquiryResult)
	{
		$this->inquiryResult = $inquiryResult;
		$this->apiParas["inquiry_result"] = $inquiryResult;
	}

	public function getInquiryResult()
	{
		return $this->inquiryResult;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.industry.inquiry.result.callback";
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
