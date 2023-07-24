<?php
/**
 * TOP API: alibaba.tmall.spareparts.details.create request
 * 
 * @author auto create
 * @since 1.0, 2023.05.12
 */
class AlibabaTmallSparepartsDetailsCreateRequest
{
	/** 
	 * 请求入参
	 **/
	private $sparePartsDetailsSaveRequest;
	
	private $apiParas = array();
	
	public function setSparePartsDetailsSaveRequest($sparePartsDetailsSaveRequest)
	{
		$this->sparePartsDetailsSaveRequest = $sparePartsDetailsSaveRequest;
		$this->apiParas["spare_parts_details_save_request"] = $sparePartsDetailsSaveRequest;
	}

	public function getSparePartsDetailsSaveRequest()
	{
		return $this->sparePartsDetailsSaveRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.tmall.spareparts.details.create";
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
