<?php
/**
 * TOP API: alibaba.ascp.presalespackage.consign request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaAscpPresalespackageConsignRequest
{
	/** 
	 * 入参
	 **/
	private $requestParams;
	
	private $apiParas = array();
	
	public function setRequestParams($requestParams)
	{
		$this->requestParams = $requestParams;
		$this->apiParas["request_params"] = $requestParams;
	}

	public function getRequestParams()
	{
		return $this->requestParams;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.presalespackage.consign";
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
