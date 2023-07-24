<?php
/**
 * TOP API: tmall.servicecenter.fulfiltask.insurance.action request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class TmallServicecenterFulfiltaskInsuranceActionRequest
{
	/** 
	 * 履行单id
	 **/
	private $fulfilTaskId;
	
	/** 
	 * 外部单号id
	 **/
	private $outerId;
	
	/** 
	 * 履约动作，取值：send_goods, 上门取件;supplier_signed, 服务商签收;evaluate_report, 鉴定报告;insurance_claims, 保险理赔;send_back, 寄回;repair_finish, 维修完成;
	 **/
	private $taskAction;
	
	/** 
	 * 履约动作数据，不同动作取值见api文档；
	 **/
	private $taskContextData;
	
	/** 
	 * 工单id
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
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

	public function setTaskAction($taskAction)
	{
		$this->taskAction = $taskAction;
		$this->apiParas["task_action"] = $taskAction;
	}

	public function getTaskAction()
	{
		return $this->taskAction;
	}

	public function setTaskContextData($taskContextData)
	{
		$this->taskContextData = $taskContextData;
		$this->apiParas["task_context_data"] = $taskContextData;
	}

	public function getTaskContextData()
	{
		return $this->taskContextData;
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
		return "tmall.servicecenter.fulfiltask.insurance.action";
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
