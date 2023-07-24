<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.serviceworker.register request
 * 
 * @author auto create
 * @since 1.0, 2022.05.10
 */
class AlibabaSscSupplyplatformServiceworkerRegisterRequest
{
	/** 
	 * 工人注册model
	 **/
	private $workerRegisterForTopReqDto;
	
	private $apiParas = array();
	
	public function setWorkerRegisterForTopReqDto($workerRegisterForTopReqDto)
	{
		$this->workerRegisterForTopReqDto = $workerRegisterForTopReqDto;
		$this->apiParas["worker_register_for_top_req_dto"] = $workerRegisterForTopReqDto;
	}

	public function getWorkerRegisterForTopReqDto()
	{
		return $this->workerRegisterForTopReqDto;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.serviceworker.register";
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
