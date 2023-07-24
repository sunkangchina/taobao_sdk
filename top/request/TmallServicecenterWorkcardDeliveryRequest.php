<?php
/**
 * TOP API: tmall.servicecenter.workcard.delivery request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallServicecenterWorkcardDeliveryRequest
{
	/** 
	 * 工单配送请求参数
	 **/
	private $identifyTaskDeliveryRequest;
	
	private $apiParas = array();
	
	public function setIdentifyTaskDeliveryRequest($identifyTaskDeliveryRequest)
	{
		$this->identifyTaskDeliveryRequest = $identifyTaskDeliveryRequest;
		$this->apiParas["identify_task_delivery_request"] = $identifyTaskDeliveryRequest;
	}

	public function getIdentifyTaskDeliveryRequest()
	{
		return $this->identifyTaskDeliveryRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.delivery";
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
