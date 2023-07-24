<?php
/**
 * TOP API: alibaba.tianmao.uop.cancel request
 * 
 * @author auto create
 * @since 1.0, 2022.04.02
 */
class AlibabaTianmaoUopCancelRequest
{
	/** 
	 * 取消接口入参
	 **/
	private $hiErpCloseDto;
	
	private $apiParas = array();
	
	public function setHiErpCloseDto($hiErpCloseDto)
	{
		$this->hiErpCloseDto = $hiErpCloseDto;
		$this->apiParas["hi_erp_close_dto"] = $hiErpCloseDto;
	}

	public function getHiErpCloseDto()
	{
		return $this->hiErpCloseDto;
	}

	public function getApiMethodName()
	{
		return "alibaba.tianmao.uop.cancel";
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
