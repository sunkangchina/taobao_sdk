<?php
/**
 * TOP API: tmall.servicecenter.anomalyrecourse.homedecoration.close request
 * 
 * @author auto create
 * @since 1.0, 2023.03.23
 */
class TmallServicecenterAnomalyrecourseHomedecorationCloseRequest
{
	/** 
	 * 投诉单id
	 **/
	private $id;
	
	/** 
	 * 图片凭证
	 **/
	private $images;
	
	/** 
	 * 是否与商家达成一致；0：未达成；1：已达成
	 **/
	private $isAgreement;
	
	/** 
	 * 完结方案
	 **/
	private $remark;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
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

	public function setIsAgreement($isAgreement)
	{
		$this->isAgreement = $isAgreement;
		$this->apiParas["is_agreement"] = $isAgreement;
	}

	public function getIsAgreement()
	{
		return $this->isAgreement;
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

	public function getApiMethodName()
	{
		return "tmall.servicecenter.anomalyrecourse.homedecoration.close";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->isAgreement,"isAgreement");
		RequestCheckUtil::checkNotNull($this->remark,"remark");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
