<?php
/**
 * TOP API: tmall.service.settlement.billinfo.query request
 * 
 * @author auto create
 * @since 1.0, 2023.02.21
 */
class TmallServiceSettlementBillinfoQueryRequest
{
	/** 
	 * 已经结算的工单ID
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
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
		return "tmall.service.settlement.billinfo.query";
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
