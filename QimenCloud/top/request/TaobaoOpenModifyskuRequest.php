<?php
/**
 * TOP API: qimen.taobao.open.modifysku request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TaobaoOpenModifyskuRequest
{
	/** 
	 * 主订单ID
	 **/
	private $bizOrderId;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 原skuId对应的outerId
	 **/
	private $oldOuterId;
	
	/** 
	 * 原skuId
	 **/
	private $oldSkuId;
	
	/** 
	 * 新sku对应的outerId
	 **/
	private $outerId;
	
	/** 
	 * 店铺Nick
	 **/
	private $sellerNick;
	
	/** 
	 * 新skuId
	 **/
	private $skuId;
	
	/** 
	 * 子订单ID
	 **/
	private $subOrderId;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["bizOrderId"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["itemId"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setOldOuterId($oldOuterId)
	{
		$this->oldOuterId = $oldOuterId;
		$this->apiParas["oldOuterId"] = $oldOuterId;
	}

	public function getOldOuterId()
	{
		return $this->oldOuterId;
	}

	public function setOldSkuId($oldSkuId)
	{
		$this->oldSkuId = $oldSkuId;
		$this->apiParas["oldSkuId"] = $oldSkuId;
	}

	public function getOldSkuId()
	{
		return $this->oldSkuId;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outerId"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setSellerNick($sellerNick)
	{
		$this->sellerNick = $sellerNick;
		$this->apiParas["sellerNick"] = $sellerNick;
	}

	public function getSellerNick()
	{
		return $this->sellerNick;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function setSubOrderId($subOrderId)
	{
		$this->subOrderId = $subOrderId;
		$this->apiParas["subOrderId"] = $subOrderId;
	}

	public function getSubOrderId()
	{
		return $this->subOrderId;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.open.modifysku";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->oldSkuId,"oldSkuId");
		RequestCheckUtil::checkNotNull($this->sellerNick,"sellerNick");
		RequestCheckUtil::checkNotNull($this->skuId,"skuId");
		RequestCheckUtil::checkNotNull($this->subOrderId,"subOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
