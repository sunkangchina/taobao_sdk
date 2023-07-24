<?php
/**
 * TOP API: alibaba.ascp.uop.self.supplier.waybill.query request
 * 
 * @author auto create
 * @since 1.0, 2022.02.16
 */
class AlibabaAscpUopSelfSupplierWaybillQueryRequest
{
	/** 
	 * 查询面单请求参数
	 **/
	private $waybillQueryRequest;
	
	private $apiParas = array();
	
	public function setWaybillQueryRequest($waybillQueryRequest)
	{
		$this->waybillQueryRequest = $waybillQueryRequest;
		$this->apiParas["waybill_query_request"] = $waybillQueryRequest;
	}

	public function getWaybillQueryRequest()
	{
		return $this->waybillQueryRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.self.supplier.waybill.query";
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
