<?php
/**
 * TOP API: taobao.modifyaddress.open request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class ModifyaddressOpenRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.modifyaddress.open";
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
