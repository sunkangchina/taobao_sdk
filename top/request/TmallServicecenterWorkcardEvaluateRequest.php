<?php
/**
 * TOP API: tmall.servicecenter.workcard.evaluate request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallServicecenterWorkcardEvaluateRequest
{
	/** 
	 * 鉴定不通过时的原因编码
	 **/
	private $failCode;
	
	/** 
	 * 是否鉴定通过
	 **/
	private $passEvaluation;
	
	/** 
	 * 鉴定结果图片列表
	 **/
	private $picUrlList;
	
	/** 
	 * 工单id
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setFailCode($failCode)
	{
		$this->failCode = $failCode;
		$this->apiParas["fail_code"] = $failCode;
	}

	public function getFailCode()
	{
		return $this->failCode;
	}

	public function setPassEvaluation($passEvaluation)
	{
		$this->passEvaluation = $passEvaluation;
		$this->apiParas["pass_evaluation"] = $passEvaluation;
	}

	public function getPassEvaluation()
	{
		return $this->passEvaluation;
	}

	public function setPicUrlList($picUrlList)
	{
		$this->picUrlList = $picUrlList;
		$this->apiParas["pic_url_list"] = $picUrlList;
	}

	public function getPicUrlList()
	{
		return $this->picUrlList;
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
		return "tmall.servicecenter.workcard.evaluate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->passEvaluation,"passEvaluation");
		RequestCheckUtil::checkMaxListSize($this->picUrlList,20,"picUrlList");
		RequestCheckUtil::checkNotNull($this->workcardId,"workcardId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
