<?php
/**
 * TOP API: alibaba.ascp.industry.worker.modify request
 * 
 * @author auto create
 * @since 1.0, 2023.04.12
 */
class AlibabaAscpIndustryWorkerModifyRequest
{
	/** 
	 * 请求对象
	 **/
	private $omsServiceModifyWorkerParameter;
	
	private $apiParas = array();
	
	public function setOmsServiceModifyWorkerParameter($omsServiceModifyWorkerParameter)
	{
		$this->omsServiceModifyWorkerParameter = $omsServiceModifyWorkerParameter;
		$this->apiParas["oms_service_modify_worker_parameter"] = $omsServiceModifyWorkerParameter;
	}

	public function getOmsServiceModifyWorkerParameter()
	{
		return $this->omsServiceModifyWorkerParameter;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.industry.worker.modify";
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
