<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.serviceability.save request
 * 
 * @author auto create
 * @since 1.0, 2022.09.22
 */
class AlibabaSscSupplyplatformServiceabilitySaveRequest
{
	/** 
	 * 菜鸟地址编码，各级地址均可（全国、省、市、区、街道），根据实际支持的地区填写。当支持的履约类型包含上门时，必填
	 **/
	private $areaCodeList;
	
	/** 
	 * 目前包含三种。in_store 到店；at_home 上门；transmit_service 寄修。请根据实际支持的履约类型填写
	 **/
	private $fulfilTypeList;
	
	/** 
	 * 服务提供者code。外部与天猫对接时，自己定义的code用这个字段
	 **/
	private $providerCode;
	
	/** 
	 * 服务提供者id。根据服务提供者类型填写相应的id，例如类型是网点，则填我们系统的网点id
	 **/
	private $providerId;
	
	/** 
	 * 服务提供者类型。service_store 网点；worker 工人；supplier 服务商
	 **/
	private $providerType;
	
	/** 
	 * 服务sku，具体的sku列表可以从服务商工作台的类目树获取
	 **/
	private $serviceSkuCodeList;
	
	private $apiParas = array();
	
	public function setAreaCodeList($areaCodeList)
	{
		$this->areaCodeList = $areaCodeList;
		$this->apiParas["area_code_list"] = $areaCodeList;
	}

	public function getAreaCodeList()
	{
		return $this->areaCodeList;
	}

	public function setFulfilTypeList($fulfilTypeList)
	{
		$this->fulfilTypeList = $fulfilTypeList;
		$this->apiParas["fulfil_type_list"] = $fulfilTypeList;
	}

	public function getFulfilTypeList()
	{
		return $this->fulfilTypeList;
	}

	public function setProviderCode($providerCode)
	{
		$this->providerCode = $providerCode;
		$this->apiParas["provider_code"] = $providerCode;
	}

	public function getProviderCode()
	{
		return $this->providerCode;
	}

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

	public function setServiceSkuCodeList($serviceSkuCodeList)
	{
		$this->serviceSkuCodeList = $serviceSkuCodeList;
		$this->apiParas["service_sku_code_list"] = $serviceSkuCodeList;
	}

	public function getServiceSkuCodeList()
	{
		return $this->serviceSkuCodeList;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.serviceability.save";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->areaCodeList,5000,"areaCodeList");
		RequestCheckUtil::checkNotNull($this->fulfilTypeList,"fulfilTypeList");
		RequestCheckUtil::checkMaxListSize($this->fulfilTypeList,100,"fulfilTypeList");
		RequestCheckUtil::checkNotNull($this->providerType,"providerType");
		RequestCheckUtil::checkNotNull($this->serviceSkuCodeList,"serviceSkuCodeList");
		RequestCheckUtil::checkMaxListSize($this->serviceSkuCodeList,150,"serviceSkuCodeList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
