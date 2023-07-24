<?php
/**
 * TOP API: tmall.servicecenter.workcard.call.record request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class TmallServicecenterWorkcardCallRecordRequest
{
	/** 
	 * 请求入参
	 **/
	private $busiRequest;
	
	private $apiParas = array();
	
	public function setBusiRequest($busiRequest)
	{
		$this->busiRequest = $busiRequest;
		$this->apiParas["busi_request"] = $busiRequest;
	}

	public function getBusiRequest()
	{
		return $this->busiRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.call.record";
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
