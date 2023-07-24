<?php
/**
 * TOP API: taobao.modifysku.open.query request
 * 
 * @author auto create
 * @since 1.0, 2021.09.23
 */
class ModifyskuOpenQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.modifysku.open.query";
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
