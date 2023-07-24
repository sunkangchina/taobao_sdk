<?php
/**
 * TOP API: taobao.top.once.token.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class TopOnceTokenGetRequest
{
	/** 
	 * sec_token
	 **/
	private $secToken;
	
	private $apiParas = array();
	
	public function setSecToken($secToken)
	{
		$this->secToken = $secToken;
		$this->apiParas["sec_token"] = $secToken;
	}

	public function getSecToken()
	{
		return $this->secToken;
	}

	public function getApiMethodName()
	{
		return "taobao.top.once.token.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->secToken,"secToken");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
