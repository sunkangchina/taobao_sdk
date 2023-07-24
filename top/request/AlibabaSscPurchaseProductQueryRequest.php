<?php
/**
 * TOP API: alibaba.ssc.purchase.product.query request
 * 
 * @author auto create
 * @since 1.0, 2022.07.05
 */
class AlibabaSscPurchaseProductQueryRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.ssc.purchase.product.query";
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
