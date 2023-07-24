<?php
/**
 * TOP API: tmall.servicecenter.workcard.tpconfirm request
 * 
 * @author auto create
 * @since 1.0, 2022.01.17
 */
class TmallServicecenterWorkcardTpconfirmRequest
{
	/** 
	 * 服务商确认服务完成信息
	 **/
	private $tpConfirmRequest;
	
	private $apiParas = array();
	
	public function setTpConfirmRequest($tpConfirmRequest)
	{
		$this->tpConfirmRequest = $tpConfirmRequest;
		$this->apiParas["tp_confirm_request"] = $tpConfirmRequest;
	}

	public function getTpConfirmRequest()
	{
		return $this->tpConfirmRequest;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.tpconfirm";
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
