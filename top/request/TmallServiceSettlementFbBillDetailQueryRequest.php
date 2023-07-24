<?php
/**
 * TOP API: tmall.service.settlement.fb.bill.detail.query request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class TmallServiceSettlementFbBillDetailQueryRequest
{
	/** 
	 * 流水截止时间
	 **/
	private $billTimeEnd;
	
	/** 
	 * 流水开始时间（如果设置了开始时间，需要同时设置截止时间）
	 **/
	private $billTimeStart;
	
	/** 
	 * 分页页码
	 **/
	private $pageNum;
	
	/** 
	 * 分页大小
	 **/
	private $pageSize;
	
	/** 
	 * 提现截止时间
	 **/
	private $payTimeEnd;
	
	/** 
	 * 提现开始时间（如果设置了开始时间，需要同时设置截止时间）
	 **/
	private $payTimeStart;
	
	private $apiParas = array();
	
	public function setBillTimeEnd($billTimeEnd)
	{
		$this->billTimeEnd = $billTimeEnd;
		$this->apiParas["bill_time_end"] = $billTimeEnd;
	}

	public function getBillTimeEnd()
	{
		return $this->billTimeEnd;
	}

	public function setBillTimeStart($billTimeStart)
	{
		$this->billTimeStart = $billTimeStart;
		$this->apiParas["bill_time_start"] = $billTimeStart;
	}

	public function getBillTimeStart()
	{
		return $this->billTimeStart;
	}

	public function setPageNum($pageNum)
	{
		$this->pageNum = $pageNum;
		$this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum()
	{
		return $this->pageNum;
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

	public function setPayTimeEnd($payTimeEnd)
	{
		$this->payTimeEnd = $payTimeEnd;
		$this->apiParas["pay_time_end"] = $payTimeEnd;
	}

	public function getPayTimeEnd()
	{
		return $this->payTimeEnd;
	}

	public function setPayTimeStart($payTimeStart)
	{
		$this->payTimeStart = $payTimeStart;
		$this->apiParas["pay_time_start"] = $payTimeStart;
	}

	public function getPayTimeStart()
	{
		return $this->payTimeStart;
	}

	public function getApiMethodName()
	{
		return "tmall.service.settlement.fb.bill.detail.query";
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
