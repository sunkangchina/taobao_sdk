<?php
/**
 * TOP API: tmall.servicecenter.workcard.logisticsinfo.update request
 * 
 * @author auto create
 * @since 1.0, 2023.03.16
 */
class TmallServicecenterWorkcardLogisticsinfoUpdateRequest
{
	/** 
	 * 快递员手机号
	 **/
	private $courierMobile;
	
	/** 
	 * 快递员名称
	 **/
	private $courierName;
	
	/** 
	 * 物流单号
	 **/
	private $expressCode;
	
	/** 
	 * 物流公司
	 **/
	private $expressCompany;
	
	/** 
	 * 扩展信息
	 **/
	private $extendInfo;
	
	/** 
	 * 物流单id
	 **/
	private $logisticsOrderId;
	
	/** 
	 * 外部单据id
	 **/
	private $outerId;
	
	/** 
	 * 揽收上门确认时间
	 **/
	private $pickupDoorTime;
	
	/** 
	 * 揽收完成时间
	 **/
	private $pickupFinishTime;
	
	/** 
	 * 签收时间
	 **/
	private $signTime;
	
	/** 
	 * create, pickup_finished 揽收完成， signed 签收
	 **/
	private $statusCode;
	
	private $apiParas = array();
	
	public function setCourierMobile($courierMobile)
	{
		$this->courierMobile = $courierMobile;
		$this->apiParas["courier_mobile"] = $courierMobile;
	}

	public function getCourierMobile()
	{
		return $this->courierMobile;
	}

	public function setCourierName($courierName)
	{
		$this->courierName = $courierName;
		$this->apiParas["courier_name"] = $courierName;
	}

	public function getCourierName()
	{
		return $this->courierName;
	}

	public function setExpressCode($expressCode)
	{
		$this->expressCode = $expressCode;
		$this->apiParas["express_code"] = $expressCode;
	}

	public function getExpressCode()
	{
		return $this->expressCode;
	}

	public function setExpressCompany($expressCompany)
	{
		$this->expressCompany = $expressCompany;
		$this->apiParas["express_company"] = $expressCompany;
	}

	public function getExpressCompany()
	{
		return $this->expressCompany;
	}

	public function setExtendInfo($extendInfo)
	{
		$this->extendInfo = $extendInfo;
		$this->apiParas["extend_info"] = $extendInfo;
	}

	public function getExtendInfo()
	{
		return $this->extendInfo;
	}

	public function setLogisticsOrderId($logisticsOrderId)
	{
		$this->logisticsOrderId = $logisticsOrderId;
		$this->apiParas["logistics_order_id"] = $logisticsOrderId;
	}

	public function getLogisticsOrderId()
	{
		return $this->logisticsOrderId;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPickupDoorTime($pickupDoorTime)
	{
		$this->pickupDoorTime = $pickupDoorTime;
		$this->apiParas["pickup_door_time"] = $pickupDoorTime;
	}

	public function getPickupDoorTime()
	{
		return $this->pickupDoorTime;
	}

	public function setPickupFinishTime($pickupFinishTime)
	{
		$this->pickupFinishTime = $pickupFinishTime;
		$this->apiParas["pickup_finish_time"] = $pickupFinishTime;
	}

	public function getPickupFinishTime()
	{
		return $this->pickupFinishTime;
	}

	public function setSignTime($signTime)
	{
		$this->signTime = $signTime;
		$this->apiParas["sign_time"] = $signTime;
	}

	public function getSignTime()
	{
		return $this->signTime;
	}

	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;
		$this->apiParas["status_code"] = $statusCode;
	}

	public function getStatusCode()
	{
		return $this->statusCode;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.logisticsinfo.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->logisticsOrderId,"logisticsOrderId");
		RequestCheckUtil::checkNotNull($this->statusCode,"statusCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
