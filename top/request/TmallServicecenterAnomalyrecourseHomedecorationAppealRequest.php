<?php
/**
 * TOP API: tmall.servicecenter.anomalyrecourse.homedecoration.appeal request
 * 
 * @author auto create
 * @since 1.0, 2023.03.23
 */
class TmallServicecenterAnomalyrecourseHomedecorationAppealRequest
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
	 * 申诉内容
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
		return "tmall.servicecenter.anomalyrecourse.homedecoration.appeal";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
		RequestCheckUtil::checkNotNull($this->remark,"remark");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
