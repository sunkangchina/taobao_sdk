<?php
/**
 * TOP API: taobao.inv.turnover.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class InvTurnoverQueryRequest
{
	/** 
	 * 单据类型
	 **/
	private $activityType;
	
	/** 
	 * 结束时间
	 **/
	private $edate;
	
	/** 
	 * 库存类型
	 **/
	private $inventoryType;
	
	/** 
	 * 查询页
	 **/
	private $pageIndex;
	
	/** 
	 * 单页记录数
	 **/
	private $pageSize;
	
	/** 
	 * 货品ID
	 **/
	private $scItemId;
	
	/** 
	 * 开始时间
	 **/
	private $sdate;
	
	/** 
	 * 仓编码
	 **/
	private $storeCode;
	
	private $apiParas = array();
	
	public function setActivityType($activityType)
	{
		$this->activityType = $activityType;
		$this->apiParas["activity_type"] = $activityType;
	}

	public function getActivityType()
	{
		return $this->activityType;
	}

	public function setEdate($edate)
	{
		$this->edate = $edate;
		$this->apiParas["edate"] = $edate;
	}

	public function getEdate()
	{
		return $this->edate;
	}

	public function setInventoryType($inventoryType)
	{
		$this->inventoryType = $inventoryType;
		$this->apiParas["inventory_type"] = $inventoryType;
	}

	public function getInventoryType()
	{
		return $this->inventoryType;
	}

	public function setPageIndex($pageIndex)
	{
		$this->pageIndex = $pageIndex;
		$this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex()
	{
		return $this->pageIndex;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setScItemId($scItemId)
	{
		$this->scItemId = $scItemId;
		$this->apiParas["sc_item_id"] = $scItemId;
	}

	public function getScItemId()
	{
		return $this->scItemId;
	}

	public function setSdate($sdate)
	{
		$this->sdate = $sdate;
		$this->apiParas["sdate"] = $sdate;
	}

	public function getSdate()
	{
		return $this->sdate;
	}

	public function setStoreCode($storeCode)
	{
		$this->storeCode = $storeCode;
		$this->apiParas["store_code"] = $storeCode;
	}

	public function getStoreCode()
	{
		return $this->storeCode;
	}

	public function getApiMethodName()
	{
		return "taobao.inv.turnover.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->inventoryType,999,"inventoryType");
		RequestCheckUtil::checkNotNull($this->scItemId,"scItemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
