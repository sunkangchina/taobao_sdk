<?php
/**
 * TOP API: alibaba.servicecenter.workcard.confirmedsku.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.09
 */
class AlibabaServicecenterWorkcardConfirmedskuQueryRequest
{
	/** 
	 * 真实履约服务商Nick（非ERP系统不要填写）
	 **/
	private $realTpNick;
	
	/** 
	 * 工单id
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setRealTpNick($realTpNick)
	{
		$this->realTpNick = $realTpNick;
		$this->apiParas["real_tp_nick"] = $realTpNick;
	}

	public function getRealTpNick()
	{
		return $this->realTpNick;
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
		return "alibaba.servicecenter.workcard.confirmedsku.query";
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
