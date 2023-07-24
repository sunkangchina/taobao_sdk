<?php
/**
 * TOP API: alibaba.ascp.aic.supplier.aicinventory.negative.sale.query request
 * 
 * @author auto create
 * @since 1.0, 2022.06.20
 */
class AlibabaAscpAicSupplierAicinventoryNegativeSaleQueryRequest
{
	/** 
	 * 库存查询参数
	 **/
	private $aicinventoryQueryRequest;
	
	private $apiParas = array();
	
	public function setAicinventoryQueryRequest($aicinventoryQueryRequest)
	{
		$this->aicinventoryQueryRequest = $aicinventoryQueryRequest;
		$this->apiParas["aicinventory_query_request"] = $aicinventoryQueryRequest;
	}

	public function getAicinventoryQueryRequest()
	{
		return $this->aicinventoryQueryRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.aic.supplier.aicinventory.negative.sale.query";
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
