<?php
/**
 * TOP API: tmall.servicecenter.workcard.assignworker request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallServicecenterWorkcardAssignworkerRequest
{
	/** 
	 * 扩展信息
	 **/
	private $extJson;
	
	/** 
	 * 核销单id
	 **/
	private $fulfilTaskId;
	
	/** 
	 * 核销单外部id
	 **/
	private $outerId;
	
	/** 
	 * 不检查订单类型的原因ID由运营提供，服务商不可自由传
	 **/
	private $stopOrderTypeCheckReason;
	
	/** 
	 * 需要指派的工人id
	 **/
	private $targetWorkerId;
	
	/** 
	 * 需要指派的工人手机
	 **/
	private $targetWorkerMobile;
	
	/** 
	 * 需要指派的工人姓名
	 **/
	private $targetWorkerName;
	
	/** 
	 * 需要派工人的工单id
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setExtJson($extJson)
	{
		$this->extJson = $extJson;
		$this->apiParas["ext_json"] = $extJson;
	}

	public function getExtJson()
	{
		return $this->extJson;
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

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setStopOrderTypeCheckReason($stopOrderTypeCheckReason)
	{
		$this->stopOrderTypeCheckReason = $stopOrderTypeCheckReason;
		$this->apiParas["stop_order_type_check_reason"] = $stopOrderTypeCheckReason;
	}

	public function getStopOrderTypeCheckReason()
	{
		return $this->stopOrderTypeCheckReason;
	}

	public function setTargetWorkerId($targetWorkerId)
	{
		$this->targetWorkerId = $targetWorkerId;
		$this->apiParas["target_worker_id"] = $targetWorkerId;
	}

	public function getTargetWorkerId()
	{
		return $this->targetWorkerId;
	}

	public function setTargetWorkerMobile($targetWorkerMobile)
	{
		$this->targetWorkerMobile = $targetWorkerMobile;
		$this->apiParas["target_worker_mobile"] = $targetWorkerMobile;
	}

	public function getTargetWorkerMobile()
	{
		return $this->targetWorkerMobile;
	}

	public function setTargetWorkerName($targetWorkerName)
	{
		$this->targetWorkerName = $targetWorkerName;
		$this->apiParas["target_worker_name"] = $targetWorkerName;
	}

	public function getTargetWorkerName()
	{
		return $this->targetWorkerName;
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
		return "tmall.servicecenter.workcard.assignworker";
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
