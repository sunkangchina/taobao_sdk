<?php
/**
 * TOP API: alibaba.tianmao.cangpei.uop.create request
 * 
 * @author auto create
 * @since 1.0, 2022.04.02
 */
class AlibabaTianmaoCangpeiUopCreateRequest
{
	/** 
	 * ERP推单模型
	 **/
	private $hiErpOrderEvent;
	
	private $apiParas = array();
	
	public function setHiErpOrderEvent($hiErpOrderEvent)
	{
		$this->hiErpOrderEvent = $hiErpOrderEvent;
		$this->apiParas["hi_erp_order_event"] = $hiErpOrderEvent;
	}

	public function getHiErpOrderEvent()
	{
		return $this->hiErpOrderEvent;
	}

	public function getApiMethodName()
	{
		return "alibaba.tianmao.cangpei.uop.create";
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
