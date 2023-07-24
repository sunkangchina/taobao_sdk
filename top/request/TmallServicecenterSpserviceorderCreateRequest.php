<?php
/**
 * TOP API: tmall.servicecenter.spserviceorder.create request
 * 
 * @author auto create
 * @since 1.0, 2022.06.29
 */
class TmallServicecenterSpserviceorderCreateRequest
{
	/** 
	 * 品牌id
	 **/
	private $brandId;
	
	/** 
	 * 消费者信息
	 **/
	private $buyer;
	
	/** 
	 * 额外业务信息
	 **/
	private $extJson;
	
	/** 
	 * 备注
	 **/
	private $memo;
	
	/** 
	 * 外部单号
	 **/
	private $outOrderId;
	
	/** 
	 * 预约信息
	 **/
	private $reservation;
	
	/** 
	 * 服务内容
	 **/
	private $serviceContent;
	
	/** 
	 * 数量
	 **/
	private $serviceCount;
	
	/** 
	 * 服务对象类型名称
	 **/
	private $serviceObjectName;
	
	/** 
	 * 服务对象类型
	 **/
	private $serviceObjectType;
	
	/** 
	 * 服务产品id
	 **/
	private $serviceProductId;
	
	/** 
	 * 服务计价json
	 **/
	private $serviceProperties;
	
	/** 
	 * 外部渠道
	 **/
	private $source;
	
	private $apiParas = array();
	
	public function setBrandId($brandId)
	{
		$this->brandId = $brandId;
		$this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId()
	{
		return $this->brandId;
	}

	public function setBuyer($buyer)
	{
		$this->buyer = $buyer;
		$this->apiParas["buyer"] = $buyer;
	}

	public function getBuyer()
	{
		return $this->buyer;
	}

	public function setExtJson($extJson)
	{
		$this->extJson = $extJson;
		$this->apiParas["ext_json"] = $extJson;
	}

	public function getExtJson()
	{
		return $this->extJson;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setOutOrderId($outOrderId)
	{
		$this->outOrderId = $outOrderId;
		$this->apiParas["out_order_id"] = $outOrderId;
	}

	public function getOutOrderId()
	{
		return $this->outOrderId;
	}

	public function setReservation($reservation)
	{
		$this->reservation = $reservation;
		$this->apiParas["reservation"] = $reservation;
	}

	public function getReservation()
	{
		return $this->reservation;
	}

	public function setServiceContent($serviceContent)
	{
		$this->serviceContent = $serviceContent;
		$this->apiParas["service_content"] = $serviceContent;
	}

	public function getServiceContent()
	{
		return $this->serviceContent;
	}

	public function setServiceCount($serviceCount)
	{
		$this->serviceCount = $serviceCount;
		$this->apiParas["service_count"] = $serviceCount;
	}

	public function getServiceCount()
	{
		return $this->serviceCount;
	}

	public function setServiceObjectName($serviceObjectName)
	{
		$this->serviceObjectName = $serviceObjectName;
		$this->apiParas["service_object_name"] = $serviceObjectName;
	}

	public function getServiceObjectName()
	{
		return $this->serviceObjectName;
	}

	public function setServiceObjectType($serviceObjectType)
	{
		$this->serviceObjectType = $serviceObjectType;
		$this->apiParas["service_object_type"] = $serviceObjectType;
	}

	public function getServiceObjectType()
	{
		return $this->serviceObjectType;
	}

	public function setServiceProductId($serviceProductId)
	{
		$this->serviceProductId = $serviceProductId;
		$this->apiParas["service_product_id"] = $serviceProductId;
	}

	public function getServiceProductId()
	{
		return $this->serviceProductId;
	}

	public function setServiceProperties($serviceProperties)
	{
		$this->serviceProperties = $serviceProperties;
		$this->apiParas["service_properties"] = $serviceProperties;
	}

	public function getServiceProperties()
	{
		return $this->serviceProperties;
	}

	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas["source"] = $source;
	}

	public function getSource()
	{
		return $this->source;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.spserviceorder.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outOrderId,"outOrderId");
		RequestCheckUtil::checkNotNull($this->serviceContent,"serviceContent");
		RequestCheckUtil::checkNotNull($this->serviceCount,"serviceCount");
		RequestCheckUtil::checkNotNull($this->serviceObjectType,"serviceObjectType");
		RequestCheckUtil::checkNotNull($this->serviceProductId,"serviceProductId");
		RequestCheckUtil::checkNotNull($this->serviceProperties,"serviceProperties");
		RequestCheckUtil::checkNotNull($this->source,"source");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
