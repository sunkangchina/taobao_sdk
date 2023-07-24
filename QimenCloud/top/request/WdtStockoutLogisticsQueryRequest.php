<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stockout.logistics.query request
 * 
 * @author auto create
 * @since 1.0, 2023.07.18
 */
class WdtStockoutLogisticsQueryRequest
{
	/** 
	 * 发货时间
	 **/
	private $consignTime;
	
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
	/** 
	 * 揽件时间
	 **/
	private $getTime;
	
	/** 
	 * 物流公司名称
	 **/
	private $logisticsName;
	
	/** 
	 * 物流编号
	 **/
	private $logisticsNo;
	
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
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 物流状态
	 **/
	private $status;
	
	/** 
	 * 订单编号
	 **/
	private $tradeNo;
	
	/** 
	 * 仓库编号
	 **/
	private $warehouseNo;
	
	private $apiParas = array();
	
	public function setConsignTime($consignTime)
	{
		$this->consignTime = $consignTime;
		$this->apiParas["consign_time"] = $consignTime;
	}

	public function getConsignTime()
	{
		return $this->consignTime;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setGetTime($getTime)
	{
		$this->getTime = $getTime;
		$this->apiParas["get_time"] = $getTime;
	}

	public function getGetTime()
	{
		return $this->getTime;
	}

	public function setLogisticsName($logisticsName)
	{
		$this->logisticsName = $logisticsName;
		$this->apiParas["logistics_name"] = $logisticsName;
	}

	public function getLogisticsName()
	{
		return $this->logisticsName;
	}

	public function setLogisticsNo($logisticsNo)
	{
		$this->logisticsNo = $logisticsNo;
		$this->apiParas["logistics_no"] = $logisticsNo;
	}

	public function getLogisticsNo()
	{
		return $this->logisticsNo;
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

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTradeNo($tradeNo)
	{
		$this->tradeNo = $tradeNo;
		$this->apiParas["trade_no"] = $tradeNo;
	}

	public function getTradeNo()
	{
		return $this->tradeNo;
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
		return "hu3cgwt0tc.wdt.stockout.logistics.query";
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
