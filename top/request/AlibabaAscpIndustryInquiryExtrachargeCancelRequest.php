<?php
/**
 * TOP API: alibaba.ascp.industry.inquiry.extracharge.cancel request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class AlibabaAscpIndustryInquiryExtrachargeCancelRequest
{
	/** 
	 * 请求对象
	 **/
	private $omsCancelExtraChargeParameter;
	
	private $apiParas = array();
	
	public function setOmsCancelExtraChargeParameter($omsCancelExtraChargeParameter)
	{
		$this->omsCancelExtraChargeParameter = $omsCancelExtraChargeParameter;
		$this->apiParas["oms_cancel_extra_charge_parameter"] = $omsCancelExtraChargeParameter;
	}

	public function getOmsCancelExtraChargeParameter()
	{
		return $this->omsCancelExtraChargeParameter;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.industry.inquiry.extracharge.cancel";
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
