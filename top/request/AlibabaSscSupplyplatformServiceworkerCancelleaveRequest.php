<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.serviceworker.cancelleave request
 * 
 * @author auto create
 * @since 1.0, 2022.06.20
 */
class AlibabaSscSupplyplatformServiceworkerCancelleaveRequest
{
	/** 
	 * 身份证号
	 **/
	private $identityNumber;
	
	/** 
	 * 时间段
	 **/
	private $leaveBeginAndEndList;
	
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

	public function setLeaveBeginAndEndList($leaveBeginAndEndList)
	{
		$this->leaveBeginAndEndList = $leaveBeginAndEndList;
		$this->apiParas["leave_begin_and_end_list"] = $leaveBeginAndEndList;
	}

	public function getLeaveBeginAndEndList()
	{
		return $this->leaveBeginAndEndList;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.serviceworker.cancelleave";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->leaveBeginAndEndList,999,"leaveBeginAndEndList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
