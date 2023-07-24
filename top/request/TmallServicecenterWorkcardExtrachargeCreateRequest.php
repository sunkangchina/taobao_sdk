<?php
/**
 * TOP API: tmall.servicecenter.workcard.extracharge.create request
 * 
 * @author auto create
 * @since 1.0, 2023.05.05
 */
class TmallServicecenterWorkcardExtrachargeCreateRequest
{
	/** 
	 * 额外收费项列表
	 **/
	private $extraChargeItemList;
	
	/** 
	 * 工单id
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setExtraChargeItemList($extraChargeItemList)
	{
		$this->extraChargeItemList = $extraChargeItemList;
		$this->apiParas["extra_charge_item_list"] = $extraChargeItemList;
	}

	public function getExtraChargeItemList()
	{
		return $this->extraChargeItemList;
	}

	public function setWorkcardId($workcardId)
	{
		$this->workcardId = $workcardId;
		$this->apiParas["workcard_id"] = $workcardId;
	}

	public function getWorkcardId()
	{
		return $this->workcardId;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.extracharge.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->workcardId,"workcardId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
