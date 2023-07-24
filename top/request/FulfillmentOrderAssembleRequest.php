<?php
/**
 * TOP API: taobao.fulfillment.order.assemble request
 * 
 * @author auto create
 * @since 1.0, 2022.06.15
 */
class FulfillmentOrderAssembleRequest
{
	/** 
	 * 批量回传集合,一次接口最多40
	 **/
	private $assembleOrders;
	
	/** 
	 * 操作类型，支持参数为MERGE、CANCEL_MERGE。当进行CANCEL_MERGE操作时，只需要传入groupId即可，order_list可以为空
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setAssembleOrders($assembleOrders)
	{
		$this->assembleOrders = $assembleOrders;
		$this->apiParas["assemble_orders"] = $assembleOrders;
	}

	public function getAssembleOrders()
	{
		return $this->assembleOrders;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.fulfillment.order.assemble";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->type,"type");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
