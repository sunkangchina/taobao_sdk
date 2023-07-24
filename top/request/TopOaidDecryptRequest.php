<?php
/**
 * TOP API: taobao.top.oaid.decrypt request
 * 
 * @author auto create
 * @since 1.0, 2022.08.03
 */
class TopOaidDecryptRequest
{
	/** 
	 * 解密请求列表，最多支持20个。
	 **/
	private $queryList;
	
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

	public function getApiMethodName()
	{
		return "taobao.top.oaid.decrypt";
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
