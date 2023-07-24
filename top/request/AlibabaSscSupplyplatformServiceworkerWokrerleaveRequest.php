<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.serviceworker.wokrerleave request
 * 
 * @author auto create
 * @since 1.0, 2022.06.20
 */
class AlibabaSscSupplyplatformServiceworkerWokrerleaveRequest
{
	/** 
	 * 身份证号
	 **/
	private $identityNumber;
	
	/** 
	 * 开始和结束时间
	 **/
	private $leaveBeginAndEndArray;
	
	/** 
	 * 请假原因
	 **/
	private $reason;
	
	private $apiParas = array();
	
	public function setIdentityNumber($identityNumber)
	{
		$this->identityNumber = $identityNumber;
		$this->apiParas["identity_number"] = $identityNumber;
	}

	public function getIdentityNumber()
	{
		return $this->identityNumber;
	}

	public function setLeaveBeginAndEndArray($leaveBeginAndEndArray)
	{
		$this->leaveBeginAndEndArray = $leaveBeginAndEndArray;
		$this->apiParas["leave_begin_and_end_array"] = $leaveBeginAndEndArray;
	}

	public function getLeaveBeginAndEndArray()
	{
		return $this->leaveBeginAndEndArray;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.serviceworker.wokrerleave";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->leaveBeginAndEndArray,999,"leaveBeginAndEndArray");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
