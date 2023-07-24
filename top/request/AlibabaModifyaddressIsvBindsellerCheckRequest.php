<?php
/**
 * TOP API: alibaba.modifyaddress.isv.bindseller.check request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class AlibabaModifyaddressIsvBindsellerCheckRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.modifyaddress.isv.bindseller.check";
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
