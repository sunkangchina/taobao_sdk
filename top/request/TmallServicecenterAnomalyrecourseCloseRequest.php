<?php
/**
 * TOP API: tmall.servicecenter.anomalyrecourse.close request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallServicecenterAnomalyrecourseCloseRequest
{
	/** 
	 * 投诉单号
	 **/
	private $id;
	
	/** 
	 * 完结时服务商自定义回复给消费者内容
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
		return "tmall.servicecenter.anomalyrecourse.close";
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
