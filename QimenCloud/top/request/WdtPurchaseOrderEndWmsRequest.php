<?php
/**
 * TOP API: hu3cgwt0tc.wdt.purchase.order.end.wms request
 * 
 * @author auto create
 * @since 1.0, 2022.01.07
 */
class WdtPurchaseOrderEndWmsRequest
{
	/** 
	 * 采购单是否允许已审核的单子取消
	 **/
	private $isRejectReview;
	
	/** 
	 * 采购单批量列表节点
	 **/
	private $purchaseNoList;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 采购单操作类型
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setIsRejectReview($isRejectReview)
	{
		$this->isRejectReview = $isRejectReview;
		$this->apiParas["is_reject_review"] = $isRejectReview;
	}

	public function getIsRejectReview()
	{
		return $this->isRejectReview;
	}

	public function setPurchaseNoList($purchaseNoList)
	{
		$this->purchaseNoList = $purchaseNoList;
		$this->apiParas["purchase_no_list"] = $purchaseNoList;
	}

	public function getPurchaseNoList()
	{
		return $this->purchaseNoList;
	}

	public function setSid($sid)
	{
		$this->sid = $sid;
		$this->apiParas["sid"] = $sid;
	}

	public function getSid()
	{
		return $this->sid;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "hu3cgwt0tc.wdt.purchase.order.end.wms";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->sid,"sid");
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
