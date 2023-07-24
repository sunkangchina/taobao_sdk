<?php
/**
 * TOP API: alibaba.ascp.industry.waybill.pre.accept request
 * 
 * @author auto create
 * @since 1.0, 2023.06.25
 */
class AlibabaAscpIndustryWaybillPreAcceptRequest
{
	/** 
	 * 开单信息
	 **/
	private $waybillGenRequest;
	
	private $apiParas = array();
	
	public function setWaybillGenRequest($waybillGenRequest)
	{
		$this->waybillGenRequest = $waybillGenRequest;
		$this->apiParas["waybill_gen_request"] = $waybillGenRequest;
	}

	public function getWaybillGenRequest()
	{
		return $this->waybillGenRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.industry.waybill.pre.accept";
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
