<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.servicestore.save request
 * 
 * @author auto create
 * @since 1.0, 2022.06.20
 */
class AlibabaSscSupplyplatformServicestoreSaveRequest
{
	/** 
	 * 入参
	 **/
	private $serviceStoreSaveReq;
	
	private $apiParas = array();
	
	public function setServiceStoreSaveReq($serviceStoreSaveReq)
	{
		$this->serviceStoreSaveReq = $serviceStoreSaveReq;
		$this->apiParas["service_store_save_req"] = $serviceStoreSaveReq;
	}

	public function getServiceStoreSaveReq()
	{
		return $this->serviceStoreSaveReq;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.servicestore.save";
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
