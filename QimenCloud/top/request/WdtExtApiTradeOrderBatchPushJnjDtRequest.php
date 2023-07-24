<?php
/**
 * TOP API: hu3cgwt0tc.wdt.ext.api.trade.order.batch.push.jnj.dt request
 * 
 * @author auto create
 * @since 1.0, 2021.04.01
 */
class WdtExtApiTradeOrderBatchPushJnjDtRequest
{
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 单据节点
	 **/
	private $tradeList;
	
	private $apiParas = array();
	
	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setTradeList($tradeList)
	{
		$this->tradeList = $tradeList;
		$this->apiParas["trade_list"] = $tradeList;
	}

	public function getTradeList()
	{
		return $this->tradeList;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.ext.api.trade.order.batch.push.jnj.dt";
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
