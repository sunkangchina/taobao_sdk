<?php
/**
 * TOP API: taobao.fenxiao.orders.get request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class FenxiaoOrdersGetRequest
{
	/** 
	 * 渠道市场编码，可批量指定。 当不指定时，按照配置的分销市场生效 渠道编码枚举：1-供销平台（淘宝）；2-供销平台（天猫）；3-供销平台（天猫超市）；5-供销平台（淘乡甜）；110001-供销平台（全球购）；110007-淘分销；200002-消费电子市场
	 **/
	private $channelCodes;
	
	/** 
	 * 结束时间，格式 yyyy-MM-dd HH:mm:ss 支持到秒的查询。若不传时分秒，默认为0时0分0秒。当指定了purchase_order_id或者tc_order_id时，此值可选，否则此参数必传。 结束时间和开始时间的时间间隔不能超过7天，精确到秒。
	 **/
	private $endCreated;
	
	/** 
	 * 指定返回的字段（废弃该参数） 多个字段用","分隔。  fields 如果为空：返回所有采购单对象(purchase_orders)字段。 如果不为空：返回指定采购单对象(purchase_orders)字段。  例1： sub_purchase_orders.tc_order_id 表示只返回tc_order_id 例2： sub_purchase_orders表示只返回子采购单列表
	 **/
	private $fields;
	
	/** 
	 * 页码。（大于0的整数。默认为1）
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。（每页条数不超过50条）
	 **/
	private $pageSize;
	
	/** 
	 * 采购单编号或分销流水号。 当指定此参数后，其他可选参数可以为空
	 **/
	private $purchaseOrderId;
	
	/** 
	 * 起始时间，格式 yyyy-MM-dd HH:mm:ss 支持到秒的查询。若不传时分秒，默认为0时0分0秒。当指定了purchase_order_id或者tc_order_id时，此值可选，否则此参数必传。 结束时间和开始时间的时间间隔不能超过7天，精确到秒。
	 **/
	private $startCreated;
	
	/** 
	 * 交易状态，不传默认查询所有采购单 根据用户角色选择自身状态可选值:  * 供应商： WAIT_SELLER_SEND_GOODS(等待发货)  WAIT_SELLER_CONFIRM_PAY(待确认收款)  WAIT_BUYER_PAY(等待付款)  WAIT_BUYER_CONFIRM_GOODS(已发货)  TRADE_REFUNDING(退款中)  TRADE_FINISHED(采购成功)  TRADE_CLOSED(已关闭)  * 分销商： WAIT_BUYER_PAY(等待付款)  WAIT_BUYER_CONFIRM_GOODS(待收货确认)   TRADE_FOR_PAY(已付款)  TRADE_REFUNDING(退款中)  TRADE_FINISHED(采购成功)  TRADE_CLOSED(已关闭)
	 **/
	private $status;
	
	/** 
	 * 消费者交易单号（采购单下游买家订单id）。 当在代销、寄售交易中，此单号存在。
	 **/
	private $tcOrderId;
	
	/** 
	 * 时间类型： trade_time_type(默认类型，按照采购单创建时间范围查询，推荐按照此时间类型查询) update_time_type(采购单按照更新时间范围查询)
	 **/
	private $timeType;
	
	/** 
	 * 查询的经营模式，当不指定时，默认查询代销订单 代销：1  经销：2  寄售（自营寄售）：5  平台寄售：6
	 **/
	private $tradeTypes;
	
	/** 
	 * 当前查询用户的角色 当不指定时，默认为供应商 供应商：2，分销商：1
	 **/
	private $userRoleType;
	
	private $apiParas = array();
	
	public function setChannelCodes($channelCodes)
	{
		$this->channelCodes = $channelCodes;
		$this->apiParas["channel_codes"] = $channelCodes;
	}

	public function getChannelCodes()
	{
		return $this->channelCodes;
	}

	public function setEndCreated($endCreated)
	{
		$this->endCreated = $endCreated;
		$this->apiParas["end_created"] = $endCreated;
	}

	public function getEndCreated()
	{
		return $this->endCreated;
	}

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setPurchaseOrderId($purchaseOrderId)
	{
		$this->purchaseOrderId = $purchaseOrderId;
		$this->apiParas["purchase_order_id"] = $purchaseOrderId;
	}

	public function getPurchaseOrderId()
	{
		return $this->purchaseOrderId;
	}

	public function setStartCreated($startCreated)
	{
		$this->startCreated = $startCreated;
		$this->apiParas["start_created"] = $startCreated;
	}

	public function getStartCreated()
	{
		return $this->startCreated;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setTcOrderId($tcOrderId)
	{
		$this->tcOrderId = $tcOrderId;
		$this->apiParas["tc_order_id"] = $tcOrderId;
	}

	public function getTcOrderId()
	{
		return $this->tcOrderId;
	}

	public function setTimeType($timeType)
	{
		$this->timeType = $timeType;
		$this->apiParas["time_type"] = $timeType;
	}

	public function getTimeType()
	{
		return $this->timeType;
	}

	public function setTradeTypes($tradeTypes)
	{
		$this->tradeTypes = $tradeTypes;
		$this->apiParas["trade_types"] = $tradeTypes;
	}

	public function getTradeTypes()
	{
		return $this->tradeTypes;
	}

	public function setUserRoleType($userRoleType)
	{
		$this->userRoleType = $userRoleType;
		$this->apiParas["user_role_type"] = $userRoleType;
	}

	public function getUserRoleType()
	{
		return $this->userRoleType;
	}

	public function getApiMethodName()
	{
		return "taobao.fenxiao.orders.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->channelCodes,999,"channelCodes");
		RequestCheckUtil::checkMaxListSize($this->tradeTypes,999,"tradeTypes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
