<?php
/**
 * TOP API: tmall.servicecenter.workcard.refuse request
 * 
 * @author auto create
 * @since 1.0, 2022.08.29
 */
class TmallServicecenterWorkcardRefuseRequest
{
	/** 
	 * 买家拒收信息
	 **/
	private $buyerRefuseAcceptRequest;
	
	private $apiParas = array();
	
	public function setBuyerRefuseAcceptRequest($buyerRefuseAcceptRequest)
	{
		$this->buyerRefuseAcceptRequest = $buyerRefuseAcceptRequest;
		$this->apiParas["buyer_refuse_accept_request"] = $buyerRefuseAcceptRequest;
	}

	public function getBuyerRefuseAcceptRequest()
	{
		return $this->buyerRefuseAcceptRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.refuse";
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
