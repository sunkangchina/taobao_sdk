<?php
/**
 * TOP API: tmall.serivcecenter.workcard.insurance.claim request
 * 
 * @author auto create
 * @since 1.0, 2023.01.31
 */
class TmallSerivcecenterWorkcardInsuranceClaimRequest
{
	/** 
	 * 工单回传理赔信息入参
	 **/
	private $workcardInsuranceCallbackRequest;
	
	private $apiParas = array();
	
	public function setWorkcardInsuranceCallbackRequest($workcardInsuranceCallbackRequest)
	{
		$this->workcardInsuranceCallbackRequest = $workcardInsuranceCallbackRequest;
		$this->apiParas["workcard_insurance_callback_request"] = $workcardInsuranceCallbackRequest;
	}

	public function getWorkcardInsuranceCallbackRequest()
	{
		return $this->workcardInsuranceCallbackRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.serivcecenter.workcard.insurance.claim";
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
