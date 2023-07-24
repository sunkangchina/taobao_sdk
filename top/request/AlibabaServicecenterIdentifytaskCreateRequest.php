<?php
/**
 * TOP API: alibaba.servicecenter.identifytask.create request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaServicecenterIdentifytaskCreateRequest
{
	/** 
	 * 核销单外部标识，服务商保证唯一。如果创建核销单时传入重复的outer_id，系统直接会返回服务商下该outer_id对应的核销单，不会重新创建新核销单。
	 **/
	private $outerId;
	
	/** 
	 * 工单集合
	 **/
	private $workcardIds;
	
	private $apiParas = array();
	
	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setWorkcardIds($workcardIds)
	{
		$this->workcardIds = $workcardIds;
		$this->apiParas["workcard_ids"] = $workcardIds;
	}

	public function getWorkcardIds()
	{
		return $this->workcardIds;
	}

	public function getApiMethodName()
	{
		return "alibaba.servicecenter.identifytask.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->workcardIds,"workcardIds");
		RequestCheckUtil::checkMaxListSize($this->workcardIds,20,"workcardIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
