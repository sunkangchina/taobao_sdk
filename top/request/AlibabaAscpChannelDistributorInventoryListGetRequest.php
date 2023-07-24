<?php
/**
 * TOP API: alibaba.ascp.channel.distributor.inventory.list.get request
 * 
 * @author auto create
 * @since 1.0, 2022.09.13
 */
class AlibabaAscpChannelDistributorInventoryListGetRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $inventoryRequest;
	
	private $apiParas = array();
	
	public function setInventoryRequest($inventoryRequest)
	{
		$this->inventoryRequest = $inventoryRequest;
		$this->apiParas["inventory_request"] = $inventoryRequest;
	}

	public function getInventoryRequest()
	{
		return $this->inventoryRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.distributor.inventory.list.get";
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
