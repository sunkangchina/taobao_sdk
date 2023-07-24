<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.service.inventory.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaSscSupplyplatformServiceInventoryQueryRequest
{
	/** 
	 * 查询结束日期。与start间隔不能超过31天。yyyy-MM-dd格式
	 **/
	private $endDay;
	
	/** 
	 * 服务提供者类型。参考alibaba.ssc.supplyplatform.servicecapacity.save入参
	 **/
	private $providerId;
	
	/** 
	 * 服务提供者类型。参考alibaba.ssc.supplyplatform.servicecapacity.save入参
	 **/
	private $providerType;
	
	/** 
	 * 查询开始日期。yyyy-MM-dd格式
	 **/
	private $startDay;
	
	private $apiParas = array();
	
	public function setEndDay($endDay)
	{
		$this->endDay = $endDay;
		$this->apiParas["end_day"] = $endDay;
	}

	public function getEndDay()
	{
		return $this->endDay;
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

	public function setStartDay($startDay)
	{
		$this->startDay = $startDay;
		$this->apiParas["start_day"] = $startDay;
	}

	public function getStartDay()
	{
		return $this->startDay;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.service.inventory.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->endDay,"endDay");
		RequestCheckUtil::checkNotNull($this->providerId,"providerId");
		RequestCheckUtil::checkNotNull($this->providerType,"providerType");
		RequestCheckUtil::checkNotNull($this->startDay,"startDay");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
