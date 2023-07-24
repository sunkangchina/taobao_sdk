<?php
/**
 * TOP API: qimen.alibaba.ascp.collect.printwaybill.notify request
 * 
 * @author auto create
 * @since 1.0, 2021.11.03
 */
class AlibabaAscpCollectPrintwaybillNotifyRequest
{
	/** 
	 * 请求入参
	 **/
	private $request;
	
	private $apiParas = array();
	
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
		return "qimen.alibaba.ascp.collect.printwaybill.notify";
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
