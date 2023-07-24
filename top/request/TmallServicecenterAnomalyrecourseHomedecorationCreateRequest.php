<?php
/**
 * TOP API: tmall.servicecenter.anomalyrecourse.homedecoration.create request
 * 
 * @author auto create
 * @since 1.0, 2023.07.06
 */
class TmallServicecenterAnomalyrecourseHomedecorationCreateRequest
{
	/** 
	 * 申请赔付金额
	 **/
	private $applyCompensationAmount;
	
	/** 
	 * 投诉份数
	 **/
	private $complainCount;
	
	/** 
	 * 投诉图片url
	 **/
	private $images;
	
	/** 
	 * 是否有消费者投诉风险0：无；1：有
	 **/
	private $publicOpinion;
	
	/** 
	 * 问题code
	 **/
	private $questionCode;
	
	/** 
	 * 投诉描述
	 **/
	private $remark;
	
	/** 
	 * 工单ID
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setApplyCompensationAmount($applyCompensationAmount)
	{
		$this->applyCompensationAmount = $applyCompensationAmount;
		$this->apiParas["apply_compensation_amount"] = $applyCompensationAmount;
	}

	public function getApplyCompensationAmount()
	{
		return $this->applyCompensationAmount;
	}

	public function setComplainCount($complainCount)
	{
		$this->complainCount = $complainCount;
		$this->apiParas["complain_count"] = $complainCount;
	}

	public function getComplainCount()
	{
		return $this->complainCount;
	}

	public function setImages($images)
	{
		$this->images = $images;
		$this->apiParas["images"] = $images;
	}

	public function getImages()
	{
		return $this->images;
	}

	public function setPublicOpinion($publicOpinion)
	{
		$this->publicOpinion = $publicOpinion;
		$this->apiParas["public_opinion"] = $publicOpinion;
	}

	public function getPublicOpinion()
	{
		return $this->publicOpinion;
	}

	public function setQuestionCode($questionCode)
	{
		$this->questionCode = $questionCode;
		$this->apiParas["question_code"] = $questionCode;
	}

	public function getQuestionCode()
	{
		return $this->questionCode;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
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
		return "tmall.servicecenter.anomalyrecourse.homedecoration.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->questionCode,"questionCode");
		RequestCheckUtil::checkNotNull($this->remark,"remark");
		RequestCheckUtil::checkNotNull($this->workcardId,"workcardId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
