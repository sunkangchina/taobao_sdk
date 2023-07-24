<?php
/**
 * TOP API: alibaba.servicecenter.workcard.serviceprogress.update request
 * 
 * @author auto create
 * @since 1.0, 2022.09.19
 */
class AlibabaServicecenterWorkcardServiceprogressUpdateRequest
{
	/** 
	 * 请求节点的动作描述，唯一标识一个节点
	 **/
	private $action;
	
	/** 
	 * 扩展参数
	 **/
	private $extendInfo;
	
	/** 
	 * 图片列表
	 **/
	private $picUrlList;
	
	/** 
	 * 真实服务商nick，仅限isv服务商调用时使用
	 **/
	private $realTpNick;
	
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

	public function setExtendInfo($extendInfo)
	{
		$this->extendInfo = $extendInfo;
		$this->apiParas["extend_info"] = $extendInfo;
	}

	public function getExtendInfo()
	{
		return $this->extendInfo;
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
		return "alibaba.servicecenter.workcard.serviceprogress.update";
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
