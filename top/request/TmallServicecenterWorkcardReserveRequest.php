<?php
/**
 * TOP API: tmall.servicecenter.workcard.reserve request
 * 
 * @author auto create
 * @since 1.0, 2022.08.18
 */
class TmallServicecenterWorkcardReserveRequest
{
	/** 
	 * 存在多个不同预约节点时需要回传。用于区分具体是哪个预约节点，例如预约上门鉴定和预约上门取件
	 **/
	private $action;
	
	/** 
	 * 扩展信息
	 **/
	private $attributes;
	
	/** 
	 * 核销单id
	 **/
	private $fulfilTaskId;
	
	/** 
	 * 履约类型，上门或者到店
	 **/
	private $fulfilType;
	
	/** 
	 * 原因code
	 **/
	private $reasonCode;
	
	/** 
	 * 原因desc
	 **/
	private $reasonDesc;
	
	/** 
	 * 预约备注信息
	 **/
	private $reserveRemark;
	
	/** 
	 * 服务结束时间
	 **/
	private $reserveTimeEnd;
	
	/** 
	 * 服务开始时间
	 **/
	private $reserveTimeStart;
	
	/** 
	 * 门店编码
	 **/
	private $serviceStoreCode;
	
	/** 
	 * 门店名称
	 **/
	private $serviceStoreName;
	
	/** 
	 * 请求来源类型
	 **/
	private $type;
	
	/** 
	 * 工单id
	 **/
	private $workcardId;
	
	/** 
	 * 工人手机号
	 **/
	private $workerMobile;
	
	/** 
	 * 工人姓名
	 **/
	private $workerName;
	
	private $apiParas = array();
	
	public function setAction($action)
	{
		$this->action = $action;
		$this->apiParas["action"] = $action;
	}

	public function getAction()
	{
		return $this->action;
	}

	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		$this->apiParas["attributes"] = $attributes;
	}

	public function getAttributes()
	{
		return $this->attributes;
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

	public function setFulfilType($fulfilType)
	{
		$this->fulfilType = $fulfilType;
		$this->apiParas["fulfil_type"] = $fulfilType;
	}

	public function getFulfilType()
	{
		return $this->fulfilType;
	}

	public function setReasonCode($reasonCode)
	{
		$this->reasonCode = $reasonCode;
		$this->apiParas["reason_code"] = $reasonCode;
	}

	public function getReasonCode()
	{
		return $this->reasonCode;
	}

	public function setReasonDesc($reasonDesc)
	{
		$this->reasonDesc = $reasonDesc;
		$this->apiParas["reason_desc"] = $reasonDesc;
	}

	public function getReasonDesc()
	{
		return $this->reasonDesc;
	}

	public function setReserveRemark($reserveRemark)
	{
		$this->reserveRemark = $reserveRemark;
		$this->apiParas["reserve_remark"] = $reserveRemark;
	}

	public function getReserveRemark()
	{
		return $this->reserveRemark;
	}

	public function setReserveTimeEnd($reserveTimeEnd)
	{
		$this->reserveTimeEnd = $reserveTimeEnd;
		$this->apiParas["reserve_time_end"] = $reserveTimeEnd;
	}

	public function getReserveTimeEnd()
	{
		return $this->reserveTimeEnd;
	}

	public function setReserveTimeStart($reserveTimeStart)
	{
		$this->reserveTimeStart = $reserveTimeStart;
		$this->apiParas["reserve_time_start"] = $reserveTimeStart;
	}

	public function getReserveTimeStart()
	{
		return $this->reserveTimeStart;
	}

	public function setServiceStoreCode($serviceStoreCode)
	{
		$this->serviceStoreCode = $serviceStoreCode;
		$this->apiParas["service_store_code"] = $serviceStoreCode;
	}

	public function getServiceStoreCode()
	{
		return $this->serviceStoreCode;
	}

	public function setServiceStoreName($serviceStoreName)
	{
		$this->serviceStoreName = $serviceStoreName;
		$this->apiParas["service_store_name"] = $serviceStoreName;
	}

	public function getServiceStoreName()
	{
		return $this->serviceStoreName;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
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

	public function setWorkerMobile($workerMobile)
	{
		$this->workerMobile = $workerMobile;
		$this->apiParas["worker_mobile"] = $workerMobile;
	}

	public function getWorkerMobile()
	{
		return $this->workerMobile;
	}

	public function setWorkerName($workerName)
	{
		$this->workerName = $workerName;
		$this->apiParas["worker_name"] = $workerName;
	}

	public function getWorkerName()
	{
		return $this->workerName;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.reserve";
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
