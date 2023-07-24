<?php
/**
 * TOP API: alibaba.servicecenter.fulfiltask.query request
 * 
 * @author auto create
 * @since 1.0, 2022.03.31
 */
class AlibabaServicecenterFulfiltaskQueryRequest
{
	/** 
	 * 查询第几页
	 **/
	private $currentPage;
	
	/** 
	 * 核销单id列表
	 **/
	private $fulfilTaskIdList;
	
	/** 
	 * 时间段查询，核销单创建时间，时间段跨度不超过15分钟
	 **/
	private $gmtCreateEnd;
	
	/** 
	 * 时间段查询，核销单创建时间，时间段跨度不超过15分钟
	 **/
	private $gmtCreateStart;
	
	/** 
	 * 核销单外部单号
	 **/
	private $outerId;
	
	/** 
	 * 每页条数，默认50，最大50
	 **/
	private $pageSize;
	
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

	public function setFulfilTaskIdList($fulfilTaskIdList)
	{
		$this->fulfilTaskIdList = $fulfilTaskIdList;
		$this->apiParas["fulfil_task_id_list"] = $fulfilTaskIdList;
	}

	public function getFulfilTaskIdList()
	{
		return $this->fulfilTaskIdList;
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

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
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

	public function getApiMethodName()
	{
		return "alibaba.servicecenter.fulfiltask.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->fulfilTaskIdList,999,"fulfilTaskIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
