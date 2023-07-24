<?php
/**
 * TOP API: alibaba.servicecenter.fulfiltask.create request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaServicecenterFulfiltaskCreateRequest
{
	/** 
	 * 外部单号
	 **/
	private $outerId;
	
	/** 
	 * 工单id列表
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
		return "alibaba.servicecenter.fulfiltask.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->workcardIds,"workcardIds");
		RequestCheckUtil::checkMaxListSize($this->workcardIds,999,"workcardIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
