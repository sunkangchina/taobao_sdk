<?php
/**
 * TOP API: tmall.fuwu.rate.get request
 * 
 * @author auto create
 * @since 1.0, 2023.05.25
 */
class TmallFuwuRateGetRequest
{
	/** 
	 * 请求
	 **/
	private $serviceRateMessageQueryCmd;
	
	private $apiParas = array();
	
	public function setServiceRateMessageQueryCmd($serviceRateMessageQueryCmd)
	{
		$this->serviceRateMessageQueryCmd = $serviceRateMessageQueryCmd;
		$this->apiParas["service_rate_message_query_cmd"] = $serviceRateMessageQueryCmd;
	}

	public function getServiceRateMessageQueryCmd()
	{
		return $this->serviceRateMessageQueryCmd;
	}

	public function getApiMethodName()
	{
		return "tmall.fuwu.rate.get";
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
