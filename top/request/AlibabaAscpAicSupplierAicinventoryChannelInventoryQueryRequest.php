<?php
/**
 * TOP API: alibaba.ascp.aic.supplier.aicinventory.channel.inventory.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class AlibabaAscpAicSupplierAicinventoryChannelInventoryQueryRequest
{
	/** 
	 * 商家仓库存查询请求参数
	 **/
	private $merchantInventoryQueryRequest;
	
	private $apiParas = array();
	
	public function setMerchantInventoryQueryRequest($merchantInventoryQueryRequest)
	{
		$this->merchantInventoryQueryRequest = $merchantInventoryQueryRequest;
		$this->apiParas["merchant_inventory_query_request"] = $merchantInventoryQueryRequest;
	}

	public function getMerchantInventoryQueryRequest()
	{
		return $this->merchantInventoryQueryRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.aic.supplier.aicinventory.channel.inventory.query";
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
