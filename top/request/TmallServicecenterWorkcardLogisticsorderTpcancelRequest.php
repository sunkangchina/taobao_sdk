<?php
/**
 * TOP API: tmall.servicecenter.workcard.logisticsorder.tpcancel request
 * 
 * @author auto create
 * @since 1.0, 2021.12.29
 */
class TmallServicecenterWorkcardLogisticsorderTpcancelRequest
{
	/** 
	 * 取消原因
	 **/
	private $comment;
	
	/** 
	 * 实际履行服务商nick
	 **/
	private $realTpNick;
	
	/** 
	 * 工单IdList
	 **/
	private $workcardIdList;
	
	private $apiParas = array();
	
	public function setComment($comment)
	{
		$this->comment = $comment;
		$this->apiParas["comment"] = $comment;
	}

	public function getComment()
	{
		return $this->comment;
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

	public function setWorkcardIdList($workcardIdList)
	{
		$this->workcardIdList = $workcardIdList;
		$this->apiParas["workcard_id_list"] = $workcardIdList;
	}

	public function getWorkcardIdList()
	{
		return $this->workcardIdList;
	}

	public function getApiMethodName()
	{
		return "tmall.servicecenter.workcard.logisticsorder.tpcancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->comment,"comment");
		RequestCheckUtil::checkNotNull($this->realTpNick,"realTpNick");
		RequestCheckUtil::checkNotNull($this->workcardIdList,"workcardIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
