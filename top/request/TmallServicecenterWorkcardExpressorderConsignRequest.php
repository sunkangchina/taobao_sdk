<?php
/**
 * TOP API: tmall.servicecenter.workcard.expressorder.consign request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class TmallServicecenterWorkcardExpressorderConsignRequest
{
	/** 
	 * 物流寄件单号（废弃）
	 **/
	private $expressOrderId;
	
	/** 
	 * 物流订单号
	 **/
	private $logisticsOrderId;
	
	/** 
	 * 真实接单服务商
	 **/
	private $realTpNick;
	
	/** 
	 * 工单List
	 **/
	private $workcardIdList;
	
	private $apiParas = array();
	
	public function setExpressOrderId($expressOrderId)
	{
		$this->expressOrderId = $expressOrderId;
		$this->apiParas["express_order_id"] = $expressOrderId;
	}

	public function getExpressOrderId()
	{
		return $this->expressOrderId;
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

	public function setRealTpNick($realTpNick)
	{
		$this->realTpNick = $realTpNick;
		$this->apiParas["real_tp_nick"] = $realTpNick;
	}

	public function getRealTpNick()
	{
		return $this->realTpNick;
	}

	public function setWorkcardIdList($workcardIdList)
	{
		$this->workcardIdList = $workcardIdList;
		$this->apiParas["workcard_id_list"] = $workcardIdList;
	}

	public function getWorkcardIdList()
	{
		return $this->workcardIdList;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.expressorder.consign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->workcardIdList,"workcardIdList");
		RequestCheckUtil::checkMaxListSize($this->workcardIdList,999,"workcardIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
