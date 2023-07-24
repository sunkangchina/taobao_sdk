<?php
/**
 * TOP API: taobao.trades.sold.query request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class TradesSoldQueryRequest
{
	/** 
	 * 订单类型，默认值为1，可选值为：交易(1)，分销(2)，换货(3)
	 **/
	private $orderType;
	
	/** 
	 * 查询条件列表，多个条件之间是OR关系，最多支持20个。receiver_name、receiver_mobile、receiver_phone至少有一个值不为空。
	 **/
	private $queryList;
	
	/** 
	 * 业务场景编码。不同场景，策略不同。请根据产品功能选择相应的场景编号。可选的场景：1001(客服咨询)、1002(售后服务)，<a href="https://open.taobao.com/doc.htm?docId=120186&docType=1" target="_blank">详情点击</a>
	 **/
	private $scene;
	
	private $apiParas = array();
	
	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setQueryList($queryList)
	{
		$this->queryList = $queryList;
		$this->apiParas["query_list"] = $queryList;
	}

	public function getQueryList()
	{
		return $this->queryList;
	}

	public function setScene($scene)
	{
		$this->scene = $scene;
		$this->apiParas["scene"] = $scene;
	}

	public function getScene()
	{
		return $this->scene;
	}

	public function getApiMethodName()
	{
		return "taobao.trades.sold.query";
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
