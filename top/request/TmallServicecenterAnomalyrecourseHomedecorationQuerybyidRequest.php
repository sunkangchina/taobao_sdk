<?php
/**
 * TOP API: tmall.servicecenter.anomalyrecourse.homedecoration.querybyid request
 * 
 * @author auto create
 * @since 1.0, 2023.03.23
 */
class TmallServicecenterAnomalyrecourseHomedecorationQuerybyidRequest
{
	/** 
	 * 投诉单id
	 **/
	private $anomalyRecourseId;
	
	private $apiParas = array();
	
	public function setAnomalyRecourseId($anomalyRecourseId)
	{
		$this->anomalyRecourseId = $anomalyRecourseId;
		$this->apiParas["anomaly_recourse_id"] = $anomalyRecourseId;
	}

	public function getAnomalyRecourseId()
	{
		return $this->anomalyRecourseId;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.anomalyrecourse.homedecoration.querybyid";
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
