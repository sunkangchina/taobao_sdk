<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.serviceworker.quitservicestore request
 * 
 * @author auto create
 * @since 1.0, 2021.12.23
 */
class AlibabaSscSupplyplatformServiceworkerQuitservicestoreRequest
{
	/** 
	 * 工人退出网点model
	 **/
	private $workerQuitServiceStoreForTopReqDto;
	
	private $apiParas = array();
	
	public function setWorkerQuitServiceStoreForTopReqDto($workerQuitServiceStoreForTopReqDto)
	{
		$this->workerQuitServiceStoreForTopReqDto = $workerQuitServiceStoreForTopReqDto;
		$this->apiParas["worker_quit_service_store_for_top_req_dto"] = $workerQuitServiceStoreForTopReqDto;
	}

	public function getWorkerQuitServiceStoreForTopReqDto()
	{
		return $this->workerQuitServiceStoreForTopReqDto;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.serviceworker.quitservicestore";
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
