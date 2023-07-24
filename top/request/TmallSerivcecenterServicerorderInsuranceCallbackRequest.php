<?php
/**
 * TOP API: tmall.serivcecenter.servicerorder.insurance.callback request
 * 
 * @author auto create
 * @since 1.0, 2023.01.31
 */
class TmallSerivcecenterServicerorderInsuranceCallbackRequest
{
	/** 
	 * 服务单投保信息回传入参
	 **/
	private $serviceInsuranceCallbackRequest;
	
	private $apiParas = array();
	
	public function setServiceInsuranceCallbackRequest($serviceInsuranceCallbackRequest)
	{
		$this->serviceInsuranceCallbackRequest = $serviceInsuranceCallbackRequest;
		$this->apiParas["service_insurance_callback_request"] = $serviceInsuranceCallbackRequest;
	}

	public function getServiceInsuranceCallbackRequest()
	{
		return $this->serviceInsuranceCallbackRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.serivcecenter.servicerorder.insurance.callback";
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
