<?php
/**
 * TOP API: alibaba.ascp.channel.distributor.product.distribute request
 * 
 * @author auto create
 * @since 1.0, 2022.10.27
 */
class AlibabaAscpChannelDistributorProductDistributeRequest
{
	/** 
	 * 请求参数
	 **/
	private $itemDistributePublishRequest;
	
	private $apiParas = array();
	
	public function setItemDistributePublishRequest($itemDistributePublishRequest)
	{
		$this->itemDistributePublishRequest = $itemDistributePublishRequest;
		$this->apiParas["item_distribute_publish_request"] = $itemDistributePublishRequest;
	}

	public function getItemDistributePublishRequest()
	{
		return $this->itemDistributePublishRequest;
	}

	public function getApiMethodName()
	{
		return "alibaba.ascp.channel.distributor.product.distribute";
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
