<?php
/**
 * TOP API: alibaba.servicecenter.workcard.servicesku.suggest request
 * 
 * @author auto create
 * @since 1.0, 2023.02.16
 */
class AlibabaServicecenterWorkcardServiceskuSuggestRequest
{
	/** 
	 * 拓展信息
	 **/
	private $extendInfo;
	
	/** 
	 * 真实履约服务商nick(非erp系统不要调用)
	 **/
	private $realTpNick;
	
	/** 
	 * 服务商反馈服务项
	 **/
	private $tpSuggestServiceSkuInfos;
	
	/** 
	 * 工单id
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setExtendInfo($extendInfo)
	{
		$this->extendInfo = $extendInfo;
		$this->apiParas["extend_info"] = $extendInfo;
	}

	public function getExtendInfo()
	{
		return $this->extendInfo;
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

	public function setTpSuggestServiceSkuInfos($tpSuggestServiceSkuInfos)
	{
		$this->tpSuggestServiceSkuInfos = $tpSuggestServiceSkuInfos;
		$this->apiParas["tp_suggest_service_sku_infos"] = $tpSuggestServiceSkuInfos;
	}

	public function getTpSuggestServiceSkuInfos()
	{
		return $this->tpSuggestServiceSkuInfos;
	}

	public function setWorkcardId($workcardId)
	{
		$this->workcardId = $workcardId;
		$this->apiParas["workcard_id"] = $workcardId;
	}

	public function getWorkcardId()
	{
		return $this->workcardId;
	}

	public function getApiMethodName()
	{
		return "alibaba.servicecenter.workcard.servicesku.suggest";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->workcardId,"workcardId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
