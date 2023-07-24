<?php
/**
 * TOP API: alibaba.ascp.channel.supplier.product.goods.bind request
 * 
 * @author auto create
 * @since 1.0, 2023.01.10
 */
class AlibabaAscpChannelSupplierProductGoodsBindRequest
{
	/** 
	 * 请求
	 **/
	private $topBindProductGoodsRequest;
	
	private $apiParas = array();
	
	public function setTopBindProductGoodsRequest($topBindProductGoodsRequest)
	{
		$this->topBindProductGoodsRequest = $topBindProductGoodsRequest;
		$this->apiParas["top_bind_product_goods_request"] = $topBindProductGoodsRequest;
	}

	public function getTopBindProductGoodsRequest()
	{
		return $this->topBindProductGoodsRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.supplier.product.goods.bind";
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
