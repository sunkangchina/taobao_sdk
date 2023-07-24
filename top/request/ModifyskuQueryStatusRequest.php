<?php
/**
 * TOP API: taobao.modifysku.query.status request
 * 
 * @author auto create
 * @since 1.0, 2021.10.11
 */
class ModifyskuQueryStatusRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.modifysku.query.status";
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
