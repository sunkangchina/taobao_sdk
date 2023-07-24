<?php
/**
 * TOP API: tmall.servicecenter.anomalyrecourse.homedecoration.questioncode.query request
 * 
 * @author auto create
 * @since 1.0, 2023.03.23
 */
class TmallServicecenterAnomalyrecourseHomedecorationQuestioncodeQueryRequest
{
	/** 
	 * 服务code
	 **/
	private $serviceCode;
	
	private $apiParas = array();
	
	public function setServiceCode($serviceCode)
	{
		$this->serviceCode = $serviceCode;
		$this->apiParas["service_code"] = $serviceCode;
	}

	public function getServiceCode()
	{
		return $this->serviceCode;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.anomalyrecourse.homedecoration.questioncode.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->serviceCode,"serviceCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
