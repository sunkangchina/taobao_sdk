<?php
/**
 * TOP API: taobao.modifyorder.order.check request
 * 
 * @author auto create
 * @since 1.0, 2021.12.14
 */
class ModifyorderOrderCheckRequest
{
	/** 
	 * 订单id
	 **/
	private $bizOrderId;
	
	/** 
	 * 商品skuId
	 **/
	private $finalOuterId;
	
	/** 
	 * 商品skuId
	 **/
	private $finalSkuId;
	
	/** 
	 * 地址oaid
	 **/
	private $oaid;
	
	/** 
	 * 子订单id
	 **/
	private $subBizOrderId;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setFinalOuterId($finalOuterId)
	{
		$this->finalOuterId = $finalOuterId;
		$this->apiParas["final_outer_id"] = $finalOuterId;
	}

	public function getFinalOuterId()
	{
		return $this->finalOuterId;
	}

	public function setFinalSkuId($finalSkuId)
	{
		$this->finalSkuId = $finalSkuId;
		$this->apiParas["final_sku_id"] = $finalSkuId;
	}

	public function getFinalSkuId()
	{
		return $this->finalSkuId;
	}

	public function setOaid($oaid)
	{
		$this->oaid = $oaid;
		$this->apiParas["oaid"] = $oaid;
	}

	public function getOaid()
	{
		return $this->oaid;
	}

	public function setSubBizOrderId($subBizOrderId)
	{
		$this->subBizOrderId = $subBizOrderId;
		$this->apiParas["sub_biz_order_id"] = $subBizOrderId;
	}

	public function getSubBizOrderId()
	{
		return $this->subBizOrderId;
	}

	public function getApiMethodName()
	{
		return "taobao.modifyorder.order.check";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
