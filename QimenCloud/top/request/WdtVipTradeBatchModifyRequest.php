<?php
/**
 * TOP API: hu3cgwt0tc.wdt.vip.trade.batch.modify request
 * 
 * @author auto create
 * @since 1.0, 2021.08.19
 */
class WdtVipTradeBatchModifyRequest
{
	/** 
	 * 秘钥
	 **/
	private $appkey;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 单据批量列表节点
	 **/
	private $tradeBatchInfo;
	
	private $apiParas = array();
	
	public function setAppkey($appkey)
	{
		$this->appkey = $appkey;
		$this->apiParas["appkey"] = $appkey;
	}

	public function getAppkey()
	{
		return $this->appkey;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setTradeBatchInfo($tradeBatchInfo)
	{
		$this->tradeBatchInfo = $tradeBatchInfo;
		$this->apiParas["trade_batch_info"] = $tradeBatchInfo;
	}

	public function getTradeBatchInfo()
	{
		return $this->tradeBatchInfo;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.vip.trade.batch.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sid,"sid");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
