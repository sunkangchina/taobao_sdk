<?php
/**
 * TOP API: alibaba.servicecenter.workcard.create request
 * 
 * @author auto create
 * @since 1.0, 2021.11.18
 */
class AlibabaServicecenterWorkcardCreateRequest
{
	/** 
	 * 工单属性，json格式字符串
	 **/
	private $attributes;
	
	/** 
	 * 工单外部唯一键单号
	 **/
	private $outerId;
	
	/** 
	 * 申请次数
	 **/
	private $serviceCount;
	
	/** 
	 * 服务提供者信息
	 **/
	private $serviceProvider;
	
	/** 
	 * 申请工单时的序号，对应服务单上的serviceSequence。用于控制幂等，防重复提交
	 **/
	private $serviceSequence;
	
	/** 
	 * 服务单id
	 **/
	private $spServiceOrderId;
	
	private $apiParas = array();
	
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		$this->apiParas["attributes"] = $attributes;
	}

	public function getAttributes()
	{
		return $this->attributes;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setServiceCount($serviceCount)
	{
		$this->serviceCount = $serviceCount;
		$this->apiParas["service_count"] = $serviceCount;
	}

	public function getServiceCount()
	{
		return $this->serviceCount;
	}

	public function setServiceProvider($serviceProvider)
	{
		$this->serviceProvider = $serviceProvider;
		$this->apiParas["service_provider"] = $serviceProvider;
	}

	public function getServiceProvider()
	{
		return $this->serviceProvider;
	}

	public function setServiceSequence($serviceSequence)
	{
		$this->serviceSequence = $serviceSequence;
		$this->apiParas["service_sequence"] = $serviceSequence;
	}

	public function getServiceSequence()
	{
		return $this->serviceSequence;
	}

	public function setSpServiceOrderId($spServiceOrderId)
	{
		$this->spServiceOrderId = $spServiceOrderId;
		$this->apiParas["sp_service_order_id"] = $spServiceOrderId;
	}

	public function getSpServiceOrderId()
	{
		return $this->spServiceOrderId;
	}

	public function getApiMethodName()
	{
		return "alibaba.servicecenter.workcard.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->spServiceOrderId,"spServiceOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
