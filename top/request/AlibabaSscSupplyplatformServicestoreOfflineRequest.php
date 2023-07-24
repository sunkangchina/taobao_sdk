<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.servicestore.offline request
 * 
 * @author auto create
 * @since 1.0, 2023.01.22
 */
class AlibabaSscSupplyplatformServicestoreOfflineRequest
{
	/** 
	 * 网点编码列表集合,最大支持1000
	 **/
	private $serviceStoreCodeList;
	
	/** 
	 * 网点id列表集合,最大支持1000
	 **/
	private $serviceStoreIdList;
	
	private $apiParas = array();
	
	public function setServiceStoreCodeList($serviceStoreCodeList)
	{
		$this->serviceStoreCodeList = $serviceStoreCodeList;
		$this->apiParas["service_store_code_list"] = $serviceStoreCodeList;
	}

	public function getServiceStoreCodeList()
	{
		return $this->serviceStoreCodeList;
	}

	public function setServiceStoreIdList($serviceStoreIdList)
	{
		$this->serviceStoreIdList = $serviceStoreIdList;
		$this->apiParas["service_store_id_list"] = $serviceStoreIdList;
	}

	public function getServiceStoreIdList()
	{
		return $this->serviceStoreIdList;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.servicestore.offline";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->serviceStoreCodeList,20,"serviceStoreCodeList");
		RequestCheckUtil::checkMaxListSize($this->serviceStoreIdList,20,"serviceStoreIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
