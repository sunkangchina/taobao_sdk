<?php
/**
 * TOP API: alibaba.ssc.purchase.servicedefinition.param.query request
 * 
 * @author auto create
 * @since 1.0, 2022.07.05
 */
class AlibabaSscPurchaseServicedefinitionParamQueryRequest
{
	/** 
	 * 服务产品id
	 **/
	private $productId;
	
	private $apiParas = array();
	
	public function setProductId($productId)
	{
		$this->productId = $productId;
		$this->apiParas["product_id"] = $productId;
	}

	public function getProductId()
	{
		return $this->productId;
	}

	public function getApiMethodName()
	{
		return "alibaba.ssc.purchase.servicedefinition.param.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->productId,"productId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
