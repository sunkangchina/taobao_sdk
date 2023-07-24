<?php
/**
 * TOP API: hu3cgwt0tc.wdt.stockin.pre.order.query request
 * 
 * @author auto create
 * @since 1.0, 2023.06.16
 */
class WdtStockinPreOrderQueryRequest
{
	/** 
	 * 结束时间
	 **/
	private $endTime;
	
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
	 * 开始时间
	 **/
	private $startTime;
	
	/** 
	 * 状态
	 **/
	private $status;
	
	/** 
	 * 入库预订单号
	 **/
	private $stockinPreNo;
	
	/** 
	 * 时间查询条件
	 **/
	private $timeType;
	
	private $apiParas = array();
	
	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
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

	public function setStockinPreNo($stockinPreNo)
	{
		$this->stockinPreNo = $stockinPreNo;
		$this->apiParas["stockin_pre_no"] = $stockinPreNo;
	}

	public function getStockinPreNo()
	{
		return $this->stockinPreNo;
	}

	public function setTimeType($timeType)
	{
		$this->timeType = $timeType;
		$this->apiParas["time_type"] = $timeType;
	}

	public function getTimeType()
	{
		return $this->timeType;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.stockin.pre.order.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
