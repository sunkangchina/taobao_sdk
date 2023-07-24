<?php
/**
 * TOP API: tmall.servicecenter.workcard.signin request
 * 
 * @author auto create
 * @since 1.0, 2023.04.13
 */
class TmallServicecenterWorkcardSigninRequest
{
	/** 
	 * 核销单id
	 **/
	private $fulfilTaskId;
	
	/** 
	 * 核销单外部id
	 **/
	private $outerId;
	
	/** 
	 * 图片地址回传集合
	 **/
	private $picUrls;
	
	/** 
	 * 工单id
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setFulfilTaskId($fulfilTaskId)
	{
		$this->fulfilTaskId = $fulfilTaskId;
		$this->apiParas["fulfil_task_id"] = $fulfilTaskId;
	}

	public function getFulfilTaskId()
	{
		return $this->fulfilTaskId;
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

	public function setPicUrls($picUrls)
	{
		$this->picUrls = $picUrls;
		$this->apiParas["pic_urls"] = $picUrls;
	}

	public function getPicUrls()
	{
		return $this->picUrls;
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
		return "tmall.servicecenter.workcard.signin";
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
