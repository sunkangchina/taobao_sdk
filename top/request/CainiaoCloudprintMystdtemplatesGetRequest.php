<?php
/**
 * TOP API: cainiao.cloudprint.mystdtemplates.get request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class CainiaoCloudprintMystdtemplatesGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "cainiao.cloudprint.mystdtemplates.get";
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
