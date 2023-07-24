<?php
/**
 * TOP API: alibaba.tianmao.inventory.query request
 * 
 * @author auto create
 * @since 1.0, 2022.04.28
 */
class AlibabaTianmaoInventoryQueryRequest
{
	/** 
	 * 库存查询模型
	 **/
	private $hiErpQueryInventoryReq;
	
	private $apiParas = array();
	
	public function setHiErpQueryInventoryReq($hiErpQueryInventoryReq)
	{
		$this->hiErpQueryInventoryReq = $hiErpQueryInventoryReq;
		$this->apiParas["hi_erp_query_inventory_req"] = $hiErpQueryInventoryReq;
	}

	public function getHiErpQueryInventoryReq()
	{
		return $this->hiErpQueryInventoryReq;
	}

	public function getApiMethodName()
	{
		return "alibaba.tianmao.inventory.query";
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
