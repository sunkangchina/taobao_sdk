<?php
/**
 * TOP API: alibaba.tianmao.inventory.modify request
 * 
 * @author auto create
 * @since 1.0, 2022.04.28
 */
class AlibabaTianmaoInventoryModifyRequest
{
	/** 
	 * 修改库存模型
	 **/
	private $hiErpModifyInventoryReq;
	
	private $apiParas = array();
	
	public function setHiErpModifyInventoryReq($hiErpModifyInventoryReq)
	{
		$this->hiErpModifyInventoryReq = $hiErpModifyInventoryReq;
		$this->apiParas["hi_erp_modify_inventory_req"] = $hiErpModifyInventoryReq;
	}

	public function getHiErpModifyInventoryReq()
	{
		return $this->hiErpModifyInventoryReq;
	}

	public function getApiMethodName()
	{
		return "alibaba.tianmao.inventory.modify";
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
