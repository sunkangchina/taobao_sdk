<?php
/**
 * TOP API: alibaba.servicecenter.workcard.evaluate request
 * 
 * @author auto create
 * @since 1.0, 2021.11.03
 */
class AlibabaServicecenterWorkcardEvaluateRequest
{
	/** 
	 * 扩展参数，品牌回传鉴定附加信息
	 **/
	private $extendInfo;
	
	/** 
	 * 鉴定不通过时的原因编码
	 **/
	private $failReason;
	
	/** 
	 * 是否鉴定通过
	 **/
	private $passEvaluation;
	
	/** 
	 * 鉴定结果图片列表
	 **/
	private $picUrlList;
	
	/** 
	 * 工单ID
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setExtendInfo($extendInfo)
	{
		$this->extendInfo = $extendInfo;
		$this->apiParas["extend_info"] = $extendInfo;
	}

	public function getExtendInfo()
	{
		return $this->extendInfo;
	}

	public function setFailReason($failReason)
	{
		$this->failReason = $failReason;
		$this->apiParas["fail_reason"] = $failReason;
	}

	public function getFailReason()
	{
		return $this->failReason;
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
		return "alibaba.servicecenter.workcard.evaluate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->passEvaluation,"passEvaluation");
		RequestCheckUtil::checkNotNull($this->workcardId,"workcardId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
