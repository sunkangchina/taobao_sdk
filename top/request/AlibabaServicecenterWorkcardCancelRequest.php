<?php
/**
 * TOP API: alibaba.servicecenter.workcard.cancel request
 * 
 * @author auto create
 * @since 1.0, 2022.08.18
 */
class AlibabaServicecenterWorkcardCancelRequest
{
	/** 
	 * 取消备注
	 **/
	private $memo;
	
	/** 
	 * 真实服务商昵称
	 **/
	private $realTpNick;
	
	/** 
	 * 原因code
	 **/
	private $reasonCode;
	
	/** 
	 * 原因desc
	 **/
	private $reasonDesc;
	
	/** 
	 * 服务单id
	 **/
	private $serviceOrderId;
	
	/** 
	 * 请求来源类型
	 **/
	private $type;
	
	/** 
	 * 工单id
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
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

	public function setServiceOrderId($serviceOrderId)
	{
		$this->serviceOrderId = $serviceOrderId;
		$this->apiParas["service_order_id"] = $serviceOrderId;
	}

	public function getServiceOrderId()
	{
		return $this->serviceOrderId;
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

	public function getApiMethodName()
	{
		return "alibaba.servicecenter.workcard.cancel";
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
