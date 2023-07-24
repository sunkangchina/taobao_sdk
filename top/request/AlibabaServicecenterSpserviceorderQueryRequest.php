<?php
/**
 * TOP API: alibaba.servicecenter.spserviceorder.query request
 * 
 * @author auto create
 * @since 1.0, 2022.04.01
 */
class AlibabaServicecenterSpserviceorderQueryRequest
{
	/** 
	 * 查询第几页，默认1
	 **/
	private $currentPage;
	
	/** 
	 * 服务单修改时间(时间段15分钟以内)(包含时分秒)
	 **/
	private $gmtModifiedEnd;
	
	/** 
	 * 服务单修改时间(包含时分秒)
	 **/
	private $gmtModifiedStart;
	
	/** 
	 * 实物主订单id(消费者在淘宝订单里看到的订单号)
	 **/
	private $masterParentBizOrderId;
	
	/** 
	 * 每页大小，默认50，最大50
	 **/
	private $pageSize;
	
	/** 
	 * 服务单id
	 **/
	private $spServiceOrderId;
	
	/** 
	 * 状态码，可传多个
	 **/
	private $statusCodes;
	
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

	public function setMasterParentBizOrderId($masterParentBizOrderId)
	{
		$this->masterParentBizOrderId = $masterParentBizOrderId;
		$this->apiParas["master_parent_biz_order_id"] = $masterParentBizOrderId;
	}

	public function getMasterParentBizOrderId()
	{
		return $this->masterParentBizOrderId;
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

	public function setSpServiceOrderId($spServiceOrderId)
	{
		$this->spServiceOrderId = $spServiceOrderId;
		$this->apiParas["sp_service_order_id"] = $spServiceOrderId;
	}

	public function getSpServiceOrderId()
	{
		return $this->spServiceOrderId;
	}

	public function setStatusCodes($statusCodes)
	{
		$this->statusCodes = $statusCodes;
		$this->apiParas["status_codes"] = $statusCodes;
	}

	public function getStatusCodes()
	{
		return $this->statusCodes;
	}

	public function getApiMethodName()
	{
		return "alibaba.servicecenter.spserviceorder.query";
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
