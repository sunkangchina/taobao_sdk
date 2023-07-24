<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.serviceability.delete request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaSscSupplyplatformServiceabilityDeleteRequest
{
	/** 
	 * 服务提供者id。根据服务提供者类型填写相应的id，例如类型是网点，则填我们系统的网点id
	 **/
	private $providerId;
	
	/** 
	 * 服务提供者类型。service_store 网点；worker 工人；supplier 服务商
	 **/
	private $providerType;
	
	private $apiParas = array();
	
	public function setProviderId($providerId)
	{
		$this->providerId = $providerId;
		$this->apiParas["provider_id"] = $providerId;
	}

	public function getProviderId()
	{
		return $this->providerId;
	}

	public function setProviderType($providerType)
	{
		$this->providerType = $providerType;
		$this->apiParas["provider_type"] = $providerType;
	}

	public function getProviderType()
	{
		return $this->providerType;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.serviceability.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->providerId,"providerId");
		RequestCheckUtil::checkNotNull($this->providerType,"providerType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
