<?php
/**
 * TOP API: alibaba.ascp.channel.distributor.product.select request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class AlibabaAscpChannelDistributorProductSelectRequest
{
	/** 
	 * 选品请求
	 **/
	private $selectProductRequest;
	
	private $apiParas = array();
	
	public function setSelectProductRequest($selectProductRequest)
	{
		$this->selectProductRequest = $selectProductRequest;
		$this->apiParas["select_product_request"] = $selectProductRequest;
	}

	public function getSelectProductRequest()
	{
		return $this->selectProductRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.distributor.product.select";
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
