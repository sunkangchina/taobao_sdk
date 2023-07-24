<?php
/**
 * TOP API: taobao.top.secret.extend request
 * 
 * @author auto create
 * @since 1.0, 2022.08.04
 */
class TopSecretExtendRequest
{
	/** 
	 * 虚拟号延期请求
	 **/
	private $extendRequest;
	
	private $apiParas = array();
	
	public function setExtendRequest($extendRequest)
	{
		$this->extendRequest = $extendRequest;
		$this->apiParas["extend_request"] = $extendRequest;
	}

	public function getExtendRequest()
	{
		return $this->extendRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.top.secret.extend";
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
