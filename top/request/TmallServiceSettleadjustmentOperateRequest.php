<?php
/**
 * TOP API: tmall.service.settleadjustment.operate request
 * 
 * @author auto create
 * @since 1.0, 2023.05.17
 */
class TmallServiceSettleadjustmentOperateRequest
{
	/** 
	 * 审批备注
	 **/
	private $memo;
	
	/** 
	 * 操作动作
	 **/
	private $operateCode;
	
	/** 
	 * 调整单ID（也即退款单ID）
	 **/
	private $settlementAdjustmentOrderId;
	
	private $apiParas = array();
	
	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function setOperateCode($operateCode)
	{
		$this->operateCode = $operateCode;
		$this->apiParas["operate_code"] = $operateCode;
	}

	public function getOperateCode()
	{
		return $this->operateCode;
	}

	public function setSettlementAdjustmentOrderId($settlementAdjustmentOrderId)
	{
		$this->settlementAdjustmentOrderId = $settlementAdjustmentOrderId;
		$this->apiParas["settlement_adjustment_order_id"] = $settlementAdjustmentOrderId;
	}

	public function getSettlementAdjustmentOrderId()
	{
		return $this->settlementAdjustmentOrderId;
	}

	public function getApiMethodName()
	{
		return "tmall.service.settleadjustment.operate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->memo,"memo");
		RequestCheckUtil::checkNotNull($this->operateCode,"operateCode");
		RequestCheckUtil::checkNotNull($this->settlementAdjustmentOrderId,"settlementAdjustmentOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
