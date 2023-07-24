<?php

/**
 * 请求对象
 * @author auto create
 */
class OmsComplaintWorkCardStatusModifyParameter
{
	
	/** 
	 * 投诉工单id
	 **/
	public $complaint_workcard_id;
	
	/** 
	 * 工单回复(处理中需要填写)      * 完结内容(已完结需要填写)
	 **/
	public $remark;
	
	/** 
	 * 商家id
	 **/
	public $seller_id;
	
	/** 
	 * 状态0 - 待收款   1 - 待补充举证    2 - 处理中  3 - 已完结
	 **/
	public $status;
	
	/** 
	 * BFC履行单号
	 **/
	public $wds_coordination_order_id;	
}
?>