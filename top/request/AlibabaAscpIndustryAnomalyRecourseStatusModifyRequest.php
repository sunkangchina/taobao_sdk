<?php
/**
 * TOP API: alibaba.ascp.industry.anomaly.recourse.status.modify request
 * 
 * @author auto create
 * @since 1.0, 2023.04.12
 */
class AlibabaAscpIndustryAnomalyRecourseStatusModifyRequest
{
	/** 
	 * 请求对象
	 **/
	private $omsComplaintWorkcardStatusModifyParameter;
	
	private $apiParas = array();
	
	public function setOmsComplaintWorkcardStatusModifyParameter($omsComplaintWorkcardStatusModifyParameter)
	{
		$this->omsComplaintWorkcardStatusModifyParameter = $omsComplaintWorkcardStatusModifyParameter;
		$this->apiParas["oms_complaint_workcard_status_modify_parameter"] = $omsComplaintWorkcardStatusModifyParameter;
	}

	public function getOmsComplaintWorkcardStatusModifyParameter()
	{
		return $this->omsComplaintWorkcardStatusModifyParameter;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.industry.anomaly.recourse.status.modify";
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
