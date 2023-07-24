<?php
/**
 * TOP API: alibaba.servicecenter.fulfiltask.buyeraddress.change request
 * 
 * @author auto create
 * @since 1.0, 2021.11.22
 */
class AlibabaServicecenterFulfiltaskBuyeraddressChangeRequest
{
	/** 
	 * 详细地址
	 **/
	private $addressDetail;
	
	/** 
	 * 核销单id
	 **/
	private $fulfilTaskId;
	
	/** 
	 * 地址编码
	 **/
	private $location;
	
	private $apiParas = array();
	
	public function setAddressDetail($addressDetail)
	{
		$this->addressDetail = $addressDetail;
		$this->apiParas["address_detail"] = $addressDetail;
	}

	public function getAddressDetail()
	{
		return $this->addressDetail;
	}

	public function setFulfilTaskId($fulfilTaskId)
	{
		$this->fulfilTaskId = $fulfilTaskId;
		$this->apiParas["fulfil_task_id"] = $fulfilTaskId;
	}

	public function getFulfilTaskId()
	{
		return $this->fulfilTaskId;
	}

	public function setLocation($location)
	{
		$this->location = $location;
		$this->apiParas["location"] = $location;
	}

	public function getLocation()
	{
		return $this->location;
	}

	public function getApiMethodName()
	{
		return "alibaba.servicecenter.fulfiltask.buyeraddress.change";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->addressDetail,"addressDetail");
		RequestCheckUtil::checkNotNull($this->fulfilTaskId,"fulfilTaskId");
		RequestCheckUtil::checkNotNull($this->location,"location");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
