<?php
/**
 * TOP API: taobao.top.oaid.client.decrypt request
 * 
 * @author auto create
 * @since 1.0, 2022.10.13
 */
class TopOaidClientDecryptRequest
{
	/** 
	 * 解密请求列表，长度不要超过1（只能单笔解密，不支持批量解密）。
	 **/
	private $queryList;
	
	/** 
	 * 安全令牌
	 **/
	private $secOnceToken;
	
	private $apiParas = array();
	
	public function setQueryList($queryList)
	{
		$this->queryList = $queryList;
		$this->apiParas["query_list"] = $queryList;
	}

	public function getQueryList()
	{
		return $this->queryList;
	}

	public function setSecOnceToken($secOnceToken)
	{
		$this->secOnceToken = $secOnceToken;
		$this->apiParas["sec_once_token"] = $secOnceToken;
	}

	public function getSecOnceToken()
	{
		return $this->secOnceToken;
	}

	public function getApiMethodName()
	{
		return "taobao.top.oaid.client.decrypt";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->secOnceToken,"secOnceToken");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
