<?php
/**
 * TOP API: tmall.servicecenter.workcard.logisticsorder.query request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class TmallServicecenterWorkcardLogisticsorderQueryRequest
{
	/** 
	 * 物流单号
	 **/
	private $logisticsOrderId;
	
	/** 
	 * 是否查询新物流，不填默认查原有物流
	 **/
	private $newLogistics;
	
	private $apiParas = array();
	
	public function setLogisticsOrderId($logisticsOrderId)
	{
		$this->logisticsOrderId = $logisticsOrderId;
		$this->apiParas["logistics_order_id"] = $logisticsOrderId;
	}

	public function getLogisticsOrderId()
	{
		return $this->logisticsOrderId;
	}

	public function setNewLogistics($newLogistics)
	{
		$this->newLogistics = $newLogistics;
		$this->apiParas["new_logistics"] = $newLogistics;
	}

	public function getNewLogistics()
	{
		return $this->newLogistics;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.logisticsorder.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->logisticsOrderId,"logisticsOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
