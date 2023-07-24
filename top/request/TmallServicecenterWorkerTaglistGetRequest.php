<?php
/**
 * TOP API: tmall.servicecenter.worker.taglist.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallServicecenterWorkerTaglistGetRequest
{
	/** 
	 * 工人注册勤鸽时的身份证
	 **/
	private $idNumber;
	
	/** 
	 * 工人注册勤鸽时的手机号码
	 **/
	private $mobile;
	
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

	public function setMobile($mobile)
	{
		$this->mobile = $mobile;
		$this->apiParas["mobile"] = $mobile;
	}

	public function getMobile()
	{
		return $this->mobile;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.worker.taglist.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->idNumber,"idNumber");
		RequestCheckUtil::checkNotNull($this->mobile,"mobile");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
