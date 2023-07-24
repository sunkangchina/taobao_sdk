<?php
/**
 * TOP API: taobao.modifysku.open request
 * 
 * @author auto create
 * @since 1.0, 2021.09.13
 */
class ModifyskuOpenRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.modifysku.open";
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
