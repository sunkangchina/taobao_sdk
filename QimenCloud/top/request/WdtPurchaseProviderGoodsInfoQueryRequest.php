<?php
/**
 * TOP API: hu3cgwt0tc.wdt.purchase.provider.goods.info.query request
 * 
 * @author auto create
 * @since 1.0, 2023.04.03
 */
class WdtPurchaseProviderGoodsInfoQueryRequest
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
	 * 商家编码
	 **/
	private $specNo;
	
	/** 
	 * 开始时间
	 **/
	private $startTime;
	
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

	public function setSpecNo($specNo)
	{
		$this->specNo = $specNo;
		$this->apiParas["spec_no"] = $specNo;
	}

	public function getSpecNo()
	{
		return $this->specNo;
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

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.purchase.provider.goods.info.query";
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
