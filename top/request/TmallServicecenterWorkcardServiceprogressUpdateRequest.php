<?php
/**
 * TOP API: tmall.servicecenter.workcard.serviceprogress.update request
 * 
 * @author auto create
 * @since 1.0, 2023.03.16
 */
class TmallServicecenterWorkcardServiceprogressUpdateRequest
{
	/** 
	 * 服务进度信息
	 **/
	private $updateServiceProgressRequest;
	
	private $apiParas = array();
	
	public function setUpdateServiceProgressRequest($updateServiceProgressRequest)
	{
		$this->updateServiceProgressRequest = $updateServiceProgressRequest;
		$this->apiParas["update_service_progress_request"] = $updateServiceProgressRequest;
	}

	public function getUpdateServiceProgressRequest()
	{
		return $this->updateServiceProgressRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.serviceprogress.update";
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
