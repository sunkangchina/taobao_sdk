<?php
/**
 * TOP API: tmall.ssc.supplyplatform.capacity.edit request
 * 
 * @author auto create
 * @since 1.0, 2022.08.18
 */
class TmallSscSupplyplatformCapacityEditRequest
{
	/** 
	 * 容量调整
	 **/
	private $paramServiceCapacityAdjustReqDto;
	
	private $apiParas = array();
	
	public function setParamServiceCapacityAdjustReqDto($paramServiceCapacityAdjustReqDto)
	{
		$this->paramServiceCapacityAdjustReqDto = $paramServiceCapacityAdjustReqDto;
		$this->apiParas["param_service_capacity_adjust_req_dto"] = $paramServiceCapacityAdjustReqDto;
	}

	public function getParamServiceCapacityAdjustReqDto()
	{
		return $this->paramServiceCapacityAdjustReqDto;
	}

	public function getApiMethodName()
	{
		return "tmall.ssc.supplyplatform.capacity.edit";
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
