<?php
/**
 * TOP API: alibaba.tianmao.lanpei.logistics.mailno request
 * 
 * @author auto create
 * @since 1.0, 2022.04.28
 */
class AlibabaTianmaoLanpeiLogisticsMailnoRequest
{
	/** 
	 * scp单号
	 **/
	private $orderCode;
	
	/** 
	 * 货主ID
	 **/
	private $ownerId;
	
	/** 
	 * 包裹数量
	 **/
	private $packageQuantity;
	
	private $apiParas = array();
	
	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["order_code"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["owner_id"] = $ownerId;
	}

	public function getOwnerId()
	{
		return $this->ownerId;
	}

	public function setPackageQuantity($packageQuantity)
	{
		$this->packageQuantity = $packageQuantity;
		$this->apiParas["package_quantity"] = $packageQuantity;
	}

	public function getPackageQuantity()
	{
		return $this->packageQuantity;
	}

	public function getApiMethodName()
	{
		return "alibaba.tianmao.lanpei.logistics.mailno";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
		RequestCheckUtil::checkNotNull($this->ownerId,"ownerId");
		RequestCheckUtil::checkNotNull($this->packageQuantity,"packageQuantity");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
