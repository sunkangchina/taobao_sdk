<?php
/**
 * TOP API: tmall.ssc.workcard.accept request
 * 
 * @author auto create
 * @since 1.0, 2023.04.23
 */
class TmallSscWorkcardAcceptRequest
{
	/** 
	 * 服务商接单入参
	 **/
	private $acceptWorkcardRequest;
	
	private $apiParas = array();
	
	public function setAcceptWorkcardRequest($acceptWorkcardRequest)
	{
		$this->acceptWorkcardRequest = $acceptWorkcardRequest;
		$this->apiParas["accept_workcard_request"] = $acceptWorkcardRequest;
	}

	public function getAcceptWorkcardRequest()
	{
		return $this->acceptWorkcardRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.ssc.workcard.accept";
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
