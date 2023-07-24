<?php
/**
 * TOP API: taobao.top.secret.appkey.bill.detail request
 * 
 * @author auto create
 * @since 1.0, 2022.09.08
 */
class TopSecretAppkeyBillDetailRequest
{
	/** 
	 * 卖家账单查询
	 **/
	private $appBillQueryRequest;
	
	private $apiParas = array();
	
	public function setAppBillQueryRequest($appBillQueryRequest)
	{
		$this->appBillQueryRequest = $appBillQueryRequest;
		$this->apiParas["app_bill_query_request"] = $appBillQueryRequest;
	}

	public function getAppBillQueryRequest()
	{
		return $this->appBillQueryRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.top.secret.appkey.bill.detail";
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
