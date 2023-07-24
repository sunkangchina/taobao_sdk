<?php
/**
 * TOP API: alibaba.servicecenter.workcard.relatedsku.query request
 * 
 * @author auto create
 * @since 1.0, 2023.04.20
 */
class AlibabaServicecenterWorkcardRelatedskuQueryRequest
{
	/** 
	 * 是否根据类目过滤维修项
	 **/
	private $isFilterByCategory;
	
	/** 
	 * 真实履约服务商nick(非erp系统不要填写)
	 **/
	private $realTpNick;
	
	/** 
	 * 工单id
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setIsFilterByCategory($isFilterByCategory)
	{
		$this->isFilterByCategory = $isFilterByCategory;
		$this->apiParas["is_filter_by_category"] = $isFilterByCategory;
	}

	public function getIsFilterByCategory()
	{
		return $this->isFilterByCategory;
	}

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
		return "alibaba.servicecenter.workcard.relatedsku.query";
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
