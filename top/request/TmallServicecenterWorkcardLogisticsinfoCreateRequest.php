<?php
/**
 * TOP API: tmall.servicecenter.workcard.logisticsinfo.create request
 * 
 * @author auto create
 * @since 1.0, 2023.01.09
 */
class TmallServicecenterWorkcardLogisticsinfoCreateRequest
{
	/** 
	 * 创建服务履约物流单信息
	 **/
	private $createLogisticsOrderRequest;
	
	private $apiParas = array();
	
	public function setCreateLogisticsOrderRequest($createLogisticsOrderRequest)
	{
		$this->createLogisticsOrderRequest = $createLogisticsOrderRequest;
		$this->apiParas["create_logistics_order_request"] = $createLogisticsOrderRequest;
	}

	public function getCreateLogisticsOrderRequest()
	{
		return $this->createLogisticsOrderRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.logisticsinfo.create";
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
