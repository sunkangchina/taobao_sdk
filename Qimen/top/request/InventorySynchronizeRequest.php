<?php
/**
 * TOP API: taobao.qimen.inventory.synchronize request
 * 
 * @author auto create
 * @since 1.0, 2023.04.21
 */
class InventorySynchronizeRequest
{
	/** 
	 * 调整单编码,调整单编码,string(50),,
	 **/
	private $adjustOrderCode;
	
	/** 
	 * 订单创建时间,订单创建时间,string(50),,
	 **/
	private $adjustTime;
	
	/** 
	 * 库存调整类型,库存调整类型,string(50),,
	 **/
	private $adjustType;
	
	/** 
	 * 商品列表
	 **/
	private $items;
	
	/** 
	 * 货主编码,货主编码,string(50),,
	 **/
	private $ownerCode;
	
	/** 
	 * 关联订单
	 **/
	private $relatedOrders;
	
	/** 
	 * 备注,备注,string(50),,
	 **/
	private $remark;
	
	/** 
	 * 仓库编码,仓库编码,string(50),,
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setAdjustOrderCode($adjustOrderCode)
	{
		$this->adjustOrderCode = $adjustOrderCode;
		$this->apiParas["adjustOrderCode"] = $adjustOrderCode;
	}

	public function getAdjustOrderCode()
	{
		return $this->adjustOrderCode;
	}

	public function setAdjustTime($adjustTime)
	{
		$this->adjustTime = $adjustTime;
		$this->apiParas["adjustTime"] = $adjustTime;
	}

	public function getAdjustTime()
	{
		return $this->adjustTime;
	}

	public function setAdjustType($adjustType)
	{
		$this->adjustType = $adjustType;
		$this->apiParas["adjustType"] = $adjustType;
	}

	public function getAdjustType()
	{
		return $this->adjustType;
	}

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function setOwnerCode($ownerCode)
	{
		$this->ownerCode = $ownerCode;
		$this->apiParas["ownerCode"] = $ownerCode;
	}

	public function getOwnerCode()
	{
		return $this->ownerCode;
	}

	public function setRelatedOrders($relatedOrders)
	{
		$this->relatedOrders = $relatedOrders;
		$this->apiParas["relatedOrders"] = $relatedOrders;
	}

	public function getRelatedOrders()
	{
		return $this->relatedOrders;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setWarehouseCode($warehouseCode)
	{
		$this->warehouseCode = $warehouseCode;
		$this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode()
	{
		return $this->warehouseCode;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.inventory.synchronize";
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
