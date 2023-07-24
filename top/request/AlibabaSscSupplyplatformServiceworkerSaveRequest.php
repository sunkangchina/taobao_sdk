<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.serviceworker.save request
 * 
 * @author auto create
 * @since 1.0, 2022.06.20
 */
class AlibabaSscSupplyplatformServiceworkerSaveRequest
{
	/** 
	 * 工人保存参数
	 **/
	private $workerSaveForTopReqDto;
	
	private $apiParas = array();
	
	public function setWorkerSaveForTopReqDto($workerSaveForTopReqDto)
	{
		$this->workerSaveForTopReqDto = $workerSaveForTopReqDto;
		$this->apiParas["worker_save_for_top_req_dto"] = $workerSaveForTopReqDto;
	}

	public function getWorkerSaveForTopReqDto()
	{
		return $this->workerSaveForTopReqDto;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.serviceworker.save";
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
