<?php
/**
 * TOP API: alibaba.ascp.uop.supplier.consignorder.notify.tms.change request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class AlibabaAscpUopSupplierConsignorderNotifyTmsChangeRequest
{
	/** 
	 * 修改运单号请求模型
	 **/
	private $modifyMailNoRequest;
	
	private $apiParas = array();
	
	public function setModifyMailNoRequest($modifyMailNoRequest)
	{
		$this->modifyMailNoRequest = $modifyMailNoRequest;
		$this->apiParas["modify_mail_no_request"] = $modifyMailNoRequest;
	}

	public function getModifyMailNoRequest()
	{
		return $this->modifyMailNoRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.uop.supplier.consignorder.notify.tms.change";
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
