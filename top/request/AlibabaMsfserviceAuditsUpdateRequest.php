<?php
/**
 * TOP API: alibaba.msfservice.audits.update request
 * 
 * @author auto create
 * @since 1.0, 2023.04.13
 */
class AlibabaMsfserviceAuditsUpdateRequest
{
	/** 
	 * 审核接口入参
	 **/
	private $reserveAuditRequest;
	
	private $apiParas = array();
	
	public function setReserveAuditRequest($reserveAuditRequest)
	{
		$this->reserveAuditRequest = $reserveAuditRequest;
		$this->apiParas["reserve_audit_request"] = $reserveAuditRequest;
	}

	public function getReserveAuditRequest()
	{
		return $this->reserveAuditRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.msfservice.audits.update";
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
