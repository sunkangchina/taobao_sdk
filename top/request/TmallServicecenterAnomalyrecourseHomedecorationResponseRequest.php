<?php
/**
 * TOP API: tmall.servicecenter.anomalyrecourse.homedecoration.response request
 * 
 * @author auto create
 * @since 1.0, 2023.03.23
 */
class TmallServicecenterAnomalyrecourseHomedecorationResponseRequest
{
	/** 
	 * 是否已联系商家；0：未联系；1：已联系
	 **/
	private $contactSeller;
	
	/** 
	 * 投诉单id
	 **/
	private $id;
	
	/** 
	 * 图片凭证
	 **/
	private $images;
	
	/** 
	 * 响应方案
	 **/
	private $remark;
	
	private $apiParas = array();
	
	public function setContactSeller($contactSeller)
	{
		$this->contactSeller = $contactSeller;
		$this->apiParas["contact_seller"] = $contactSeller;
	}

	public function getContactSeller()
	{
		return $this->contactSeller;
	}

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
		return "tmall.servicecenter.anomalyrecourse.homedecoration.response";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->contactSeller,"contactSeller");
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->remark,"remark");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
