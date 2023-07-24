<?php
/**
 * TOP API: tmall.servicecenter.workcard.logisticsorder.update request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class TmallServicecenterWorkcardLogisticsorderUpdateRequest
{
	/** 
	 * 备注说明
	 **/
	private $comment;
	
	/** 
	 * 金额 单位分
	 **/
	private $cost;
	
	/** 
	 * 小件员手机号码
	 **/
	private $courierMobile;
	
	/** 
	 * 小件员姓名
	 **/
	private $courierName;
	
	/** 
	 * 预计送达时间  dispatching节点时必填
	 **/
	private $deliveryTime;
	
	/** 
	 * 物流单号（展示给消费者）
	 **/
	private $expressCode;
	
	/** 
	 * 物流公司名词（展示给消费者）
	 **/
	private $expressCompany;
	
	/** 
	 * 扩展属性
	 **/
	private $extendInfo;
	
	/** 
	 * 1、以下状态时必填： 包裹已揽收完成 2、字符串格式为：json 串 例子： [{ "name": "上衣", "count": 1 }, { "name": "裤子", "count": 2 }]
	 **/
	private $goodsInfo;
	
	/** 
	 * 取件码
	 **/
	private $gotCode;
	
	/** 
	 * 物流订单号
	 **/
	private $logisticsOrderId;
	
	/** 
	 * 是否更新新物流数据
	 **/
	private $newLogistics;
	
	/** 
	 * 上门揽收时间 pickup_door节点时必填
	 **/
	private $pickupDoorTime;
	
	/** 
	 * 揽收完成时间 pickup_finished节点时必填
	 **/
	private $pickupFinishTime;
	
	/** 
	 * 签收时间 signed节点时必填
	 **/
	private $signTime;
	
	/** 
	 * 物流创建 ：create 物流取消 ：cancel 分派小件员：assign 已经分派小件员: assigned 包裹上门揽收: pickup_door 包裹已揽收完成: pickup_finished 包裹派送中: dispatching 包裹已签收: signed
	 **/
	private $statusCode;
	
	/** 
	 * 物流子单号
	 **/
	private $subExpressCodes;
	
	/** 
	 * 体积 单位 立方毫米
	 **/
	private $volume;
	
	/** 
	 * 重量 单位 克
	 **/
	private $weight;
	
	private $apiParas = array();
	
	public function setComment($comment)
	{
		$this->comment = $comment;
		$this->apiParas["comment"] = $comment;
	}

	public function getComment()
	{
		return $this->comment;
	}

	public function setCost($cost)
	{
		$this->cost = $cost;
		$this->apiParas["cost"] = $cost;
	}

	public function getCost()
	{
		return $this->cost;
	}

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

	public function setDeliveryTime($deliveryTime)
	{
		$this->deliveryTime = $deliveryTime;
		$this->apiParas["delivery_time"] = $deliveryTime;
	}

	public function getDeliveryTime()
	{
		return $this->deliveryTime;
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

	public function setGoodsInfo($goodsInfo)
	{
		$this->goodsInfo = $goodsInfo;
		$this->apiParas["goods_info"] = $goodsInfo;
	}

	public function getGoodsInfo()
	{
		return $this->goodsInfo;
	}

	public function setGotCode($gotCode)
	{
		$this->gotCode = $gotCode;
		$this->apiParas["got_code"] = $gotCode;
	}

	public function getGotCode()
	{
		return $this->gotCode;
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

	public function setNewLogistics($newLogistics)
	{
		$this->newLogistics = $newLogistics;
		$this->apiParas["new_logistics"] = $newLogistics;
	}

	public function getNewLogistics()
	{
		return $this->newLogistics;
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

	public function setSubExpressCodes($subExpressCodes)
	{
		$this->subExpressCodes = $subExpressCodes;
		$this->apiParas["sub_express_codes"] = $subExpressCodes;
	}

	public function getSubExpressCodes()
	{
		return $this->subExpressCodes;
	}

	public function setVolume($volume)
	{
		$this->volume = $volume;
		$this->apiParas["volume"] = $volume;
	}

	public function getVolume()
	{
		return $this->volume;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
		$this->apiParas["weight"] = $weight;
	}

	public function getWeight()
	{
		return $this->weight;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.logisticsorder.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->logisticsOrderId,"logisticsOrderId");
		RequestCheckUtil::checkNotNull($this->statusCode,"statusCode");
		RequestCheckUtil::checkMaxListSize($this->subExpressCodes,999,"subExpressCodes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
