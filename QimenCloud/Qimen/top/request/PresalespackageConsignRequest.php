<?php
/**
 * TOP API: taobao.qimen.presalespackage.consign request
 * 
 * @author auto create
 * @since 1.0, 2023.07.04
 */
class PresalespackageConsignRequest
{
	/** 
	 * 扩展信息Map
	 **/
	private $extendProps;
	
	/** 
	 * 外部订单号
	 **/
	private $orderCode;
	
	/** 
	 * 货主编码
	 **/
	private $ownerCode;
	
	/** 
	 * 支付时间
	 **/
	private $payTime;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 金额(单位为分)
	 **/
	private $totalAmount;
	
	private $apiParas = array();
	
	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["orderCode"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOwnerCode($ownerCode)
	{
		$this->ownerCode = $ownerCode;
		$this->apiParas["ownerCode"] = $ownerCode;
	}

	public function getOwnerCode()
	{
		return $this->ownerCode;
	}

	public function setPayTime($payTime)
	{
		$this->payTime = $payTime;
		$this->apiParas["payTime"] = $payTime;
	}

	public function getPayTime()
	{
		return $this->payTime;
	}

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setTotalAmount($totalAmount)
	{
		$this->totalAmount = $totalAmount;
		$this->apiParas["totalAmount"] = $totalAmount;
	}

	public function getTotalAmount()
	{
		return $this->totalAmount;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.presalespackage.consign";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
		RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");
		RequestCheckUtil::checkNotNull($this->payTime,"payTime");
		RequestCheckUtil::checkNotNull($this->totalAmount,"totalAmount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
