<?php
/**
 * TOP API: tmall.servicecenter.workcard.updatelogistics request
 * 
 * @author auto create
 * @since 1.0, 2021.11.18
 */
class TmallServicecenterWorkcardUpdatelogisticsRequest
{
	/** 
	 * 工单操作
	 **/
	private $action;
	
	/** 
	 * 快递号
	 **/
	private $expressCode;
	
	/** 
	 * 快递公司
	 **/
	private $expressCompany;
	
	/** 
	 * 工单号
	 **/
	private $workcardId;
	
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

	public function setExpressCode($expressCode)
	{
		$this->expressCode = $expressCode;
		$this->apiParas["express_code"] = $expressCode;
	}

	public function getExpressCode()
	{
		return $this->expressCode;
	}

	public function setExpressCompany($expressCompany)
	{
		$this->expressCompany = $expressCompany;
		$this->apiParas["express_company"] = $expressCompany;
	}

	public function getExpressCompany()
	{
		return $this->expressCompany;
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
		return "tmall.servicecenter.workcard.updatelogistics";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->action,"action");
		RequestCheckUtil::checkNotNull($this->workcardId,"workcardId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
