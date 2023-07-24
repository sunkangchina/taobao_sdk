<?php
/**
 * TOP API: alibaba.msfservice.worker.queryid request
 * 
 * @author auto create
 * @since 1.0, 2023.04.13
 */
class AlibabaMsfserviceWorkerQueryidRequest
{
	/** 
	 * 身份证ID
	 **/
	private $idNumber;
	
	/** 
	 * 手机号
	 **/
	private $phone;
	
	private $apiParas = array();
	
	public function setIdNumber($idNumber)
	{
		$this->idNumber = $idNumber;
		$this->apiParas["id_number"] = $idNumber;
	}

	public function getIdNumber()
	{
		return $this->idNumber;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
		$this->apiParas["phone"] = $phone;
	}

	public function getPhone()
	{
		return $this->phone;
	}

	public function getApiMethodName()
	{
		return "alibaba.msfservice.worker.queryid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->idNumber,"idNumber");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
