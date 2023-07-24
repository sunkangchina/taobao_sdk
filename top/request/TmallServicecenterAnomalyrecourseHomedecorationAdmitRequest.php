<?php
/**
 * TOP API: tmall.servicecenter.anomalyrecourse.homedecoration.admit request
 * 
 * @author auto create
 * @since 1.0, 2023.07.06
 */
class TmallServicecenterAnomalyrecourseHomedecorationAdmitRequest
{
	/** 
	 * 投诉单id
	 **/
	private $id;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 认责金额，分
	 **/
	private $tpAdmitResponsibleAmount;
	
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

	public function setTpAdmitResponsibleAmount($tpAdmitResponsibleAmount)
	{
		$this->tpAdmitResponsibleAmount = $tpAdmitResponsibleAmount;
		$this->apiParas["tp_admit_responsible_amount"] = $tpAdmitResponsibleAmount;
	}

	public function getTpAdmitResponsibleAmount()
	{
		return $this->tpAdmitResponsibleAmount;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.anomalyrecourse.homedecoration.admit";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
