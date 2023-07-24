<?php
/**
 * TOP API: alibaba.service.settlement.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaServiceSettlementQueryRequest
{
	/** 
	 * 当前页面，开始值为1
	 **/
	private $currentPage;
	
	/** 
	 * 账单查询结束时间，时间区间限制未15分钟。 格式示例 2019-03-26 17:15:28
	 **/
	private $gmtCreateEnd;
	
	/** 
	 * 账单查询开始时间。格式示例 2019-03-26 17:15:28
	 **/
	private $gmtCreateStart;
	
	/** 
	 * 账单修改开始时间。
	 **/
	private $gmtModifiedEnd;
	
	/** 
	 * 账单修改结束时间，时间区间限制未15分钟。
	 **/
	private $gmtModifiedStart;
	
	/** 
	 * 交易实物订单号
	 **/
	private $masterTradeOrderId;
	
	/** 
	 * 页面展示条数大小
	 **/
	private $pageSize;
	
	/** 
	 * 交易主订单号码
	 **/
	private $parentTradeOrderId;
	
	/** 
	 * 服务单号
	 **/
	private $serviceOrderId;
	
	/** 
	 * 交易服务订单号
	 **/
	private $serviceTradeOrderId;
	
	/** 
	 * 工单ID
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setGmtCreateEnd($gmtCreateEnd)
	{
		$this->gmtCreateEnd = $gmtCreateEnd;
		$this->apiParas["gmt_create_end"] = $gmtCreateEnd;
	}

	public function getGmtCreateEnd()
	{
		return $this->gmtCreateEnd;
	}

	public function setGmtCreateStart($gmtCreateStart)
	{
		$this->gmtCreateStart = $gmtCreateStart;
		$this->apiParas["gmt_create_start"] = $gmtCreateStart;
	}

	public function getGmtCreateStart()
	{
		return $this->gmtCreateStart;
	}

	public function setGmtModifiedEnd($gmtModifiedEnd)
	{
		$this->gmtModifiedEnd = $gmtModifiedEnd;
		$this->apiParas["gmt_modified_end"] = $gmtModifiedEnd;
	}

	public function getGmtModifiedEnd()
	{
		return $this->gmtModifiedEnd;
	}

	public function setGmtModifiedStart($gmtModifiedStart)
	{
		$this->gmtModifiedStart = $gmtModifiedStart;
		$this->apiParas["gmt_modified_start"] = $gmtModifiedStart;
	}

	public function getGmtModifiedStart()
	{
		return $this->gmtModifiedStart;
	}

	public function setMasterTradeOrderId($masterTradeOrderId)
	{
		$this->masterTradeOrderId = $masterTradeOrderId;
		$this->apiParas["master_trade_order_id"] = $masterTradeOrderId;
	}

	public function getMasterTradeOrderId()
	{
		return $this->masterTradeOrderId;
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

	public function setParentTradeOrderId($parentTradeOrderId)
	{
		$this->parentTradeOrderId = $parentTradeOrderId;
		$this->apiParas["parent_trade_order_id"] = $parentTradeOrderId;
	}

	public function getParentTradeOrderId()
	{
		return $this->parentTradeOrderId;
	}

	public function setServiceOrderId($serviceOrderId)
	{
		$this->serviceOrderId = $serviceOrderId;
		$this->apiParas["service_order_id"] = $serviceOrderId;
	}

	public function getServiceOrderId()
	{
		return $this->serviceOrderId;
	}

	public function setServiceTradeOrderId($serviceTradeOrderId)
	{
		$this->serviceTradeOrderId = $serviceTradeOrderId;
		$this->apiParas["service_trade_order_id"] = $serviceTradeOrderId;
	}

	public function getServiceTradeOrderId()
	{
		return $this->serviceTradeOrderId;
	}

	public function setWorkcardId($workcardId)
	{
		$this->workcardId = $workcardId;
		$this->apiParas["workcard_id"] = $workcardId;
	}

	public function getWorkcardId()
	{
		return $this->workcardId;
	}

	public function getApiMethodName()
	{
		return "alibaba.service.settlement.query";
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
