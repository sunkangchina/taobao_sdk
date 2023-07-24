<?php
/**
 * TOP API: alibaba.tianmao.uop.intercept request
 * 
 * @author auto create
 * @since 1.0, 2022.04.28
 */
class AlibabaTianmaoUopInterceptRequest
{
	/** 
	 * 运单号
	 **/
	private $mailNos;
	
	/** 
	 * 操作人名称
	 **/
	private $operatorNick;
	
	/** 
	 * 货主id
	 **/
	private $ownerId;
	
	/** 
	 * SCP单号
	 **/
	private $scpCode;
	
	private $apiParas = array();
	
	public function setMailNos($mailNos)
	{
		$this->mailNos = $mailNos;
		$this->apiParas["mail_nos"] = $mailNos;
	}

	public function getMailNos()
	{
		return $this->mailNos;
	}

	public function setOperatorNick($operatorNick)
	{
		$this->operatorNick = $operatorNick;
		$this->apiParas["operator_nick"] = $operatorNick;
	}

	public function getOperatorNick()
	{
		return $this->operatorNick;
	}

	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["owner_id"] = $ownerId;
	}

	public function getOwnerId()
	{
		return $this->ownerId;
	}

	public function setScpCode($scpCode)
	{
		$this->scpCode = $scpCode;
		$this->apiParas["scp_code"] = $scpCode;
	}

	public function getScpCode()
	{
		return $this->scpCode;
	}

	public function getApiMethodName()
	{
		return "alibaba.tianmao.uop.intercept";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mailNos,"mailNos");
		RequestCheckUtil::checkNotNull($this->ownerId,"ownerId");
		RequestCheckUtil::checkNotNull($this->scpCode,"scpCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
