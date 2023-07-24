<?php
/**
 * TOP API: tmall.servicecenter.callrecord.query request
 * 
 * @author auto create
 * @since 1.0, 2023.07.17
 */
class TmallServicecenterCallrecordQueryRequest
{
	/** 
	 * 工单id
	 **/
	private $bizIdentify;
	
	/** 
	 * 类型
	 **/
	private $bizIdentifyType;
	
	/** 
	 * 当前页数
	 **/
	private $pageNum;
	
	/** 
	 * 每页查询数量
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setBizIdentify($bizIdentify)
	{
		$this->bizIdentify = $bizIdentify;
		$this->apiParas["biz_identify"] = $bizIdentify;
	}

	public function getBizIdentify()
	{
		return $this->bizIdentify;
	}

	public function setBizIdentifyType($bizIdentifyType)
	{
		$this->bizIdentifyType = $bizIdentifyType;
		$this->apiParas["biz_identify_type"] = $bizIdentifyType;
	}

	public function getBizIdentifyType()
	{
		return $this->bizIdentifyType;
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

	public function getApiMethodName()
	{
		return "tmall.servicecenter.callrecord.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizIdentify,"bizIdentify");
		RequestCheckUtil::checkNotNull($this->bizIdentifyType,"bizIdentifyType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
