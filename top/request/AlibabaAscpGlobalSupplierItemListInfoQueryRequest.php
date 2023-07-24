<?php
/**
 * TOP API: alibaba.ascp.global.supplier.item.list.info.query request
 * 
 * @author auto create
 * @since 1.0, 2021.10.27
 */
class AlibabaAscpGlobalSupplierItemListInfoQueryRequest
{
	/** 
	 * 请求组装
	 **/
	private $supplyProductPageQuery;
	
	private $apiParas = array();
	
	public function setSupplyProductPageQuery($supplyProductPageQuery)
	{
		$this->supplyProductPageQuery = $supplyProductPageQuery;
		$this->apiParas["supply_product_page_query"] = $supplyProductPageQuery;
	}

	public function getSupplyProductPageQuery()
	{
		return $this->supplyProductPageQuery;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.global.supplier.item.list.info.query";
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
