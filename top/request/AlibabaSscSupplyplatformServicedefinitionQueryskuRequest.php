<?php
/**
 * TOP API: alibaba.ssc.supplyplatform.servicedefinition.querysku request
 * 
 * @author auto create
 * @since 1.0, 2022.08.18
 */
class AlibabaSscSupplyplatformServicedefinitionQueryskuRequest
{
	/** 
	 * 服务目录id
	 **/
	private $serviceCategoryId;
	
	private $apiParas = array();
	
	public function setServiceCategoryId($serviceCategoryId)
	{
		$this->serviceCategoryId = $serviceCategoryId;
		$this->apiParas["service_category_id"] = $serviceCategoryId;
	}

	public function getServiceCategoryId()
	{
		return $this->serviceCategoryId;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.supplyplatform.servicedefinition.querysku";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->serviceCategoryId,"serviceCategoryId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
