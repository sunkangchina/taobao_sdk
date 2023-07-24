<?php
/**
 * TOP API: tmall.servicecenter.workcard.virtualphone.bind request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class TmallServicecenterWorkcardVirtualphoneBindRequest
{
	/** 
	 * 绑定阿里通讯号入参
	 **/
	private $workcardRequest;
	
	private $apiParas = array();
	
	public function setWorkcardRequest($workcardRequest)
	{
		$this->workcardRequest = $workcardRequest;
		$this->apiParas["workcard_request"] = $workcardRequest;
	}

	public function getWorkcardRequest()
	{
		return $this->workcardRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.virtualphone.bind";
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
