<?php
/**
 * TOP API: tmall.servicecenter.workcard.expressorder.create request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class TmallServicecenterWorkcardExpressorderCreateRequest
{
	/** 
	 * erp外部物流订单号
	 **/
	private $externalLogisticsOrderId;
	
	/** 
	 * 真实履约服务商Nick（非ERP系统不要填写）
	 **/
	private $realTpNick;
	
	/** 
	 * 物流单关联的工单List
	 **/
	private $workcardIdList;
	
	private $apiParas = array();
	
	public function setExternalLogisticsOrderId($externalLogisticsOrderId)
	{
		$this->externalLogisticsOrderId = $externalLogisticsOrderId;
		$this->apiParas["external_logistics_order_id"] = $externalLogisticsOrderId;
	}

	public function getExternalLogisticsOrderId()
	{
		return $this->externalLogisticsOrderId;
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
		return "tmall.servicecenter.workcard.expressorder.create";
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
