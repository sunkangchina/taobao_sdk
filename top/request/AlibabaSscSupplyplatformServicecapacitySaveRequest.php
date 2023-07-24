<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.servicecapacity.save request
 * 
 * @author auto create
 * @since 1.0, 2022.08.18
 */
class AlibabaSscSupplyplatformServicecapacitySaveRequest
{
	/** 
	 * 容量数据。根据mode和time interval有不同的格式。具体格式见业务对接文档。
	 **/
	private $capacityData;
	
	/** 
	 * 目前支持两种。daily 每天容量相同；customize 定制容量，每天都不同
	 **/
	private $mode;
	
	/** 
	 * 网点编码
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
	 * 目前支持两种。day 表示支持的时间粒度为天；hour 时间粒度为小时
	 **/
	private $timeInterval;
	
	private $apiParas = array();
	
	public function setCapacityData($capacityData)
	{
		$this->capacityData = $capacityData;
		$this->apiParas["capacity_data"] = $capacityData;
	}

	public function getCapacityData()
	{
		return $this->capacityData;
	}

	public function setMode($mode)
	{
		$this->mode = $mode;
		$this->apiParas["mode"] = $mode;
	}

	public function getMode()
	{
		return $this->mode;
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

	public function setTimeInterval($timeInterval)
	{
		$this->timeInterval = $timeInterval;
		$this->apiParas["time_interval"] = $timeInterval;
	}

	public function getTimeInterval()
	{
		return $this->timeInterval;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.servicecapacity.save";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mode,"mode");
		RequestCheckUtil::checkNotNull($this->providerType,"providerType");
		RequestCheckUtil::checkNotNull($this->timeInterval,"timeInterval");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
