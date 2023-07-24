<?php
/**
 * TOP API: t33hglzv00.wdgj.open.api.qimen request
 * 
 * @author auto create
 * @since 1.0, 2018.10.18
 */
class WdgjOpenApiQimenRequest
{
	/** 
	 * compara
	 **/
	private $compara;
	
	private $apiParas = array();
	
	public function setCompara($compara)
	{
		$this->compara = $compara;
		$this->apiParas["compara"] = $compara;
	}

	public function getCompara()
	{
		return $this->compara;
	}

	public function getApiMethodName()
	{
		return "t33hglzv00.wdgj.open.api.qimen";
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
