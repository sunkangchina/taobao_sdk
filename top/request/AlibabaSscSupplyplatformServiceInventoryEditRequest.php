<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.service.inventory.edit request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaSscSupplyplatformServiceInventoryEditRequest
{
	/** 
	 * 业务幂等键。该字段主要用于远程调用失败后的重试的场景，例如接口超时，调用方感知到失败，但服务端可能实际上已经成功了，这时如果发起一次重试请求，服务端需要通过bizId来识别是同一个请求，这样才不会重复增加库存值。对于同一个bizId，多次请求只会生效一次，后续的重复请求不会生效。对于批量操作时，如果部分key成功，部分key失败，重试请求时只会对未成功的key生效。
	 **/
	private $bizId;
	
	/** 
	 * 库存编辑列表。每次不超过100条
	 **/
	private $editDetails;
	
	/** 
	 * 服务提供者id。参考alibaba.ssc.supplyplatform.servicecapacity.save入参
	 **/
	private $providerId;
	
	/** 
	 * 服务提供者类型。参考alibaba.ssc.supplyplatform.servicecapacity.save入参
	 **/
	private $providerType;
	
	private $apiParas = array();
	
	public function setBizId($bizId)
	{
		$this->bizId = $bizId;
		$this->apiParas["biz_id"] = $bizId;
	}

	public function getBizId()
	{
		return $this->bizId;
	}

	public function setEditDetails($editDetails)
	{
		$this->editDetails = $editDetails;
		$this->apiParas["edit_details"] = $editDetails;
	}

	public function getEditDetails()
	{
		return $this->editDetails;
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

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.service.inventory.edit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizId,"bizId");
		RequestCheckUtil::checkNotNull($this->providerId,"providerId");
		RequestCheckUtil::checkNotNull($this->providerType,"providerType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
