<?php
/**
 * TOP API: alibaba.ascp.uop.tob.package.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.09
 */
class AlibabaAscpUopTobPackageQueryRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $packageQueryRequest;
	
	private $apiParas = array();
	
	public function setPackageQueryRequest($packageQueryRequest)
	{
		$this->packageQueryRequest = $packageQueryRequest;
		$this->apiParas["package_query_request"] = $packageQueryRequest;
	}

	public function getPackageQueryRequest()
	{
		return $this->packageQueryRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.tob.package.query";
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
