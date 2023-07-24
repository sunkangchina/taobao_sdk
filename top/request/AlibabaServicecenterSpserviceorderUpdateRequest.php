<?php
/**
 * TOP API: alibaba.servicecenter.spserviceorder.update request
 * 
 * @author auto create
 * @since 1.0, 2021.11.22
 */
class AlibabaServicecenterSpserviceorderUpdateRequest
{
	/** 
	 * 新设备sn.当action填写addSn、changeSn时必填
	 **/
	private $action;
	
	/** 
	 * 服务有效期开始时间
	 **/
	private $gmtEffect;
	
	/** 
	 * 服务过期时间
	 **/
	private $gmtExpire;
	
	/** 
	 * 新设备sn.当action填写addSn、changeSn时必填
	 **/
	private $newSn;
	
	/** 
	 * 旧设备sn，当action填写changeSn时必填
	 **/
	private $oldSn;
	
	/** 
	 * 服务单id
	 **/
	private $spServiceOrderId;
	
	private $apiParas = array();
	
	public function setAction($action)
	{
		$this->action = $action;
		$this->apiParas["action"] = $action;
	}

	public function getAction()
	{
		return $this->action;
	}

	public function setGmtEffect($gmtEffect)
	{
		$this->gmtEffect = $gmtEffect;
		$this->apiParas["gmt_effect"] = $gmtEffect;
	}

	public function getGmtEffect()
	{
		return $this->gmtEffect;
	}

	public function setGmtExpire($gmtExpire)
	{
		$this->gmtExpire = $gmtExpire;
		$this->apiParas["gmt_expire"] = $gmtExpire;
	}

	public function getGmtExpire()
	{
		return $this->gmtExpire;
	}

	public function setNewSn($newSn)
	{
		$this->newSn = $newSn;
		$this->apiParas["new_sn"] = $newSn;
	}

	public function getNewSn()
	{
		return $this->newSn;
	}

	public function setOldSn($oldSn)
	{
		$this->oldSn = $oldSn;
		$this->apiParas["old_sn"] = $oldSn;
	}

	public function getOldSn()
	{
		return $this->oldSn;
	}

	public function setSpServiceOrderId($spServiceOrderId)
	{
		$this->spServiceOrderId = $spServiceOrderId;
		$this->apiParas["sp_service_order_id"] = $spServiceOrderId;
	}

	public function getSpServiceOrderId()
	{
		return $this->spServiceOrderId;
	}

	public function getApiMethodName()
	{
		return "alibaba.servicecenter.spserviceorder.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->spServiceOrderId,"spServiceOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
