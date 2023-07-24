<?php
/**
 * TOP API: alibaba.ascp.channel.refund.goods.waybill request
 * 
 * @author auto create
 * @since 1.0, 2021.11.18
 */
class AlibabaAscpChannelRefundGoodsWaybillRequest
{
	/** 
	 * 请求
	 **/
	private $refundWayBillReq;
	
	private $apiParas = array();
	
	public function setRefundWayBillReq($refundWayBillReq)
	{
		$this->refundWayBillReq = $refundWayBillReq;
		$this->apiParas["refund_way_bill_req"] = $refundWayBillReq;
	}

	public function getRefundWayBillReq()
	{
		return $this->refundWayBillReq;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.refund.goods.waybill";
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
