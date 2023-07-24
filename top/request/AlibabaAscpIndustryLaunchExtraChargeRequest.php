<?php
/**
 * TOP API: alibaba.ascp.industry.launch.extra.charge request
 * 
 * @author auto create
 * @since 1.0, 2023.07.20
 */
class AlibabaAscpIndustryLaunchExtraChargeRequest
{
	/** 
	 * 请求对象
	 **/
	private $omsLaunchExtraChargeParameter;
	
	private $apiParas = array();
	
	public function setOmsLaunchExtraChargeParameter($omsLaunchExtraChargeParameter)
	{
		$this->omsLaunchExtraChargeParameter = $omsLaunchExtraChargeParameter;
		$this->apiParas["oms_launch_extra_charge_parameter"] = $omsLaunchExtraChargeParameter;
	}

	public function getOmsLaunchExtraChargeParameter()
	{
		return $this->omsLaunchExtraChargeParameter;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.industry.launch.extra.charge";
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
