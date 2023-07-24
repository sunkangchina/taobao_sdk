<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.serviceworker.availableworker request
 * 
 * @author auto create
 * @since 1.0, 2021.12.23
 */
class AlibabaSscSupplyplatformServiceworkerAvailableworkerRequest
{
	/** 
	 * 查询可用工人model
	 **/
	private $availableWorkerQueryForTopReqDto;
	
	private $apiParas = array();
	
	public function setAvailableWorkerQueryForTopReqDto($availableWorkerQueryForTopReqDto)
	{
		$this->availableWorkerQueryForTopReqDto = $availableWorkerQueryForTopReqDto;
		$this->apiParas["available_worker_query_for_top_req_dto"] = $availableWorkerQueryForTopReqDto;
	}

	public function getAvailableWorkerQueryForTopReqDto()
	{
		return $this->availableWorkerQueryForTopReqDto;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.serviceworker.availableworker";
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
