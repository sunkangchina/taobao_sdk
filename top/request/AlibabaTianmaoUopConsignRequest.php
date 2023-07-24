<?php
/**
 * TOP API: alibaba.tianmao.uop.consign request
 * 
 * @author auto create
 * @since 1.0, 2022.04.28
 */
class AlibabaTianmaoUopConsignRequest
{
	/** 
	 * 货主id
	 **/
	private $ownerId;
	
	/** 
	 * SCP单号
	 **/
	private $scpCode;
	
	private $apiParas = array();
	
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
		return "alibaba.tianmao.uop.consign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ownerId,"ownerId");
		RequestCheckUtil::checkNotNull($this->scpCode,"scpCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
