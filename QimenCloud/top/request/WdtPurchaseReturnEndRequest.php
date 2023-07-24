<?php
/**
 * TOP API: hu3cgwt0tc.wdt.purchase.return.end request
 * 
 * @author auto create
 * @since 1.0, 2022.01.07
 */
class WdtPurchaseReturnEndRequest
{
	/** 
	 * 采购退货单是否允许已审核的单子取消
	 **/
	private $isRejectReview;
	
	/** 
	 * 采购退货单批量列表节点
	 **/
	private $purchaseReturnNoList;
	
	/** 
	 * 卖家账号
	 **/
	private $sid;
	
	/** 
	 * 采购退货单操作类型
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

	public function setPurchaseReturnNoList($purchaseReturnNoList)
	{
		$this->purchaseReturnNoList = $purchaseReturnNoList;
		$this->apiParas["purchase_return_no_list"] = $purchaseReturnNoList;
	}

	public function getPurchaseReturnNoList()
	{
		return $this->purchaseReturnNoList;
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
		return "hu3cgwt0tc.wdt.purchase.return.end";
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
