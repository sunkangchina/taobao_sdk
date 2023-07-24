<?php

/**
 * 操作主单
 * @author auto create
 */
class Mainorderdto
{
	
	/** 
	 * 业务活动代码, 新增：FU010，修改：FU020，停用：FU030
	 **/
	public $biz_activity_code;
	
	/** 
	 * 请求唯一号
	 **/
	public $operation_code;
	
	/** 
	 * JIT协议ID，必须是数字，长度不能超过18位（Long类型的大小）
	 **/
	public $operation_order_id;
	
	/** 
	 * 供应链原始单据来源平台
	 **/
	public $order_source_code;
	
	/** 
	 * 物流货主ID2207644760486
	 **/
	public $user_id;	
}
?>