<?php
/**
 * TOP API: taobao.top.secret.bill.detail request
 * 
 * @author auto create
 * @since 1.0, 2022.08.23
 */
class TopSecretBillDetailRequest
{
	/** 
	 * 卖家账单查询
	 **/
	private $sellerBillQueryRequest;
	
	private $apiParas = array();
	
	public function setSellerBillQueryRequest($sellerBillQueryRequest)
	{
		$this->sellerBillQueryRequest = $sellerBillQueryRequest;
		$this->apiParas["seller_bill_query_request"] = $sellerBillQueryRequest;
	}

	public function getSellerBillQueryRequest()
	{
		return $this->sellerBillQueryRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.top.secret.bill.detail";
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
