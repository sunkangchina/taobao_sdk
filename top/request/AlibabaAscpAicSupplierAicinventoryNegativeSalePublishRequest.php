<?php
/**
 * TOP API: alibaba.ascp.aic.supplier.aicinventory.negative.sale.publish request
 * 
 * @author auto create
 * @since 1.0, 2022.06.20
 */
class AlibabaAscpAicSupplierAicinventoryNegativeSalePublishRequest
{
	/** 
	 * 入参
	 **/
	private $futureInventoryMainOperationQuest;
	
	private $apiParas = array();
	
	public function setFutureInventoryMainOperationQuest($futureInventoryMainOperationQuest)
	{
		$this->futureInventoryMainOperationQuest = $futureInventoryMainOperationQuest;
		$this->apiParas["future_inventory_main_operation_quest"] = $futureInventoryMainOperationQuest;
	}

	public function getFutureInventoryMainOperationQuest()
	{
		return $this->futureInventoryMainOperationQuest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.aic.supplier.aicinventory.negative.sale.publish";
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
