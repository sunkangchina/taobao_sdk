<?php
/**
 * TOP API: hu3cgwt0tc.wdt.ext.stat.sales.query.aogou request
 * 
 * @author auto create
 * @since 1.0, 2021.06.25
 */
class WdtExtStatSalesQueryAogouRequest
{
	/** 
	 * 发货日期
	 **/
	private $consignDate;
	
	/** 
	 * 是否是零售业务
	 **/
	private $isRetail;
	
	/** 
	 * 页号
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 店铺编号
	 **/
	private $shopNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 仓库编号
	 **/
	private $warehouseNo;
	
	private $apiParas = array();
	
	public function setConsignDate($consignDate)
	{
		$this->consignDate = $consignDate;
		$this->apiParas["consign_date"] = $consignDate;
	}

	public function getConsignDate()
	{
		return $this->consignDate;
	}

	public function setIsRetail($isRetail)
	{
		$this->isRetail = $isRetail;
		$this->apiParas["is_retail"] = $isRetail;
	}

	public function getIsRetail()
	{
		return $this->isRetail;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
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

	public function setShopNo($shopNo)
	{
		$this->shopNo = $shopNo;
		$this->apiParas["shop_no"] = $shopNo;
	}

	public function getShopNo()
	{
		return $this->shopNo;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setWarehouseNo($warehouseNo)
	{
		$this->warehouseNo = $warehouseNo;
		$this->apiParas["warehouse_no"] = $warehouseNo;
	}

	public function getWarehouseNo()
	{
		return $this->warehouseNo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.ext.stat.sales.query.aogou";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->consignDate,"consignDate");
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
