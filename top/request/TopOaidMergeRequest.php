<?php
/**
 * TOP API: taobao.top.oaid.merge request
 * 
 * @author auto create
 * @since 1.0, 2021.11.03
 */
class TopOaidMergeRequest
{
	/** 
	 * 合单请求列表，最多支持100个。
	 **/
	private $mergeList;
	
	private $apiParas = array();
	
	public function setMergeList($mergeList)
	{
		$this->mergeList = $mergeList;
		$this->apiParas["merge_list"] = $mergeList;
	}

	public function getMergeList()
	{
		return $this->mergeList;
	}

	public function getApiMethodName()
	{
		return "taobao.top.oaid.merge";
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
