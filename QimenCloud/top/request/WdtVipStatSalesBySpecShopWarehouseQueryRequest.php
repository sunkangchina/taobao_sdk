<?php
/**
 * TOP API: hu3cgwt0tc.wdt.vip.stat.sales.by.spec.shop.warehouse.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.26
 */
class WdtVipStatSalesBySpecShopWarehouseQueryRequest
{
	/** 
	 * app_rights
	 **/
	private $appRights;
	
	/** 
	 * 发货日期
	 **/
	private $consignDate;
	
	/** 
	 * 是否支持分页获取
	 **/
	private $isPage;
	
	/** 
	 * 页号
	 **/
	private $pageNo;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 店铺编码
	 **/
	private $shopNo;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 仓库编码
	 **/
	private $warehouseNo;
	
	private $apiParas = array();
	
	public function setAppRights($appRights)
	{
		$this->appRights = $appRights;
		$this->apiParas["app_rights"] = $appRights;
	}

	public function getAppRights()
	{
		return $this->appRights;
	}

	public function setConsignDate($consignDate)
	{
		$this->consignDate = $consignDate;
		$this->apiParas["consign_date"] = $consignDate;
	}

	public function getConsignDate()
	{
		return $this->consignDate;
	}

	public function setIsPage($isPage)
	{
		$this->isPage = $isPage;
		$this->apiParas["is_page"] = $isPage;
	}

	public function getIsPage()
	{
		return $this->isPage;
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
		return "hu3cgwt0tc.wdt.vip.stat.sales.by.spec.shop.warehouse.query";
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
