<?php
/**
 * TOP API: tmall.servicecenter.workcard.repairprogress.update request
 * 
 * @author auto create
 * @since 1.0, 2023.07.21
 */
class TmallServicecenterWorkcardRepairprogressUpdateRequest
{
	/** 
	 * 请求节点的动作描述，唯一标识一个节点
	 **/
	private $action;
	
	/** 
	 * 图片列表
	 **/
	private $picUrlList;
	
	/** 
	 * 真实接单服务商账号Nick
	 **/
	private $realTpNick;
	
	/** 
	 * 衣服，鞋子
	 **/
	private $receivedGoods;
	
	/** 
	 * 服务目标物瑕疵信息
	 **/
	private $targetGoodsDefects;
	
	/** 
	 * 工单id
	 **/
	private $workcardId;
	
	private $apiParas = array();
	
	public function setAction($action)
	{
		$this->action = $action;
		$this->apiParas["action"] = $action;
	}

	public function getAction()
	{
		return $this->action;
	}

	public function setPicUrlList($picUrlList)
	{
		$this->picUrlList = $picUrlList;
		$this->apiParas["pic_url_list"] = $picUrlList;
	}

	public function getPicUrlList()
	{
		return $this->picUrlList;
	}

	public function setRealTpNick($realTpNick)
	{
		$this->realTpNick = $realTpNick;
		$this->apiParas["real_tp_nick"] = $realTpNick;
	}

	public function getRealTpNick()
	{
		return $this->realTpNick;
	}

	public function setReceivedGoods($receivedGoods)
	{
		$this->receivedGoods = $receivedGoods;
		$this->apiParas["received_goods"] = $receivedGoods;
	}

	public function getReceivedGoods()
	{
		return $this->receivedGoods;
	}

	public function setTargetGoodsDefects($targetGoodsDefects)
	{
		$this->targetGoodsDefects = $targetGoodsDefects;
		$this->apiParas["target_goods_defects"] = $targetGoodsDefects;
	}

	public function getTargetGoodsDefects()
	{
		return $this->targetGoodsDefects;
	}

	public function setWorkcardId($workcardId)
	{
		$this->workcardId = $workcardId;
		$this->apiParas["workcard_id"] = $workcardId;
	}

	public function getWorkcardId()
	{
		return $this->workcardId;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.repairprogress.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->action,"action");
		RequestCheckUtil::checkMaxListSize($this->picUrlList,20,"picUrlList");
		RequestCheckUtil::checkNotNull($this->workcardId,"workcardId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
