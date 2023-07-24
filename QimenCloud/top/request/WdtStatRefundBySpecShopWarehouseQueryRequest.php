<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stat.refund.by.spec.shop.warehouse.query request
 * 
 * @author auto create
 * @since 1.0, 2021.09.14
 */
class WdtStatRefundBySpecShopWarehouseQueryRequest
{
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
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 退货入库日期
	 **/
	private $stockinDate;
	
	private $apiParas = array();
	
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

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setStockinDate($stockinDate)
	{
		$this->stockinDate = $stockinDate;
		$this->apiParas["stockin_date"] = $stockinDate;
	}

	public function getStockinDate()
	{
		return $this->stockinDate;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stat.refund.by.spec.shop.warehouse.query";
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
