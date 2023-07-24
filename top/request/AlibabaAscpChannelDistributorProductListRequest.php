<?php
/**
 * TOP API: alibaba.ascp.channel.distributor.product.list request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class AlibabaAscpChannelDistributorProductListRequest
{
	/** 
	 * 列表请求
	 **/
	private $productListRequest;
	
	private $apiParas = array();
	
	public function setProductListRequest($productListRequest)
	{
		$this->productListRequest = $productListRequest;
		$this->apiParas["product_list_request"] = $productListRequest;
	}

	public function getProductListRequest()
	{
		return $this->productListRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.distributor.product.list";
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
