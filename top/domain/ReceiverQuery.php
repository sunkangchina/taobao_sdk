<?php

/**
 * 解密请求列表，最多支持20个。
 * @author auto create
 */
class ReceiverQuery
{
	
	/** 
	 * 收件人ID (Open Addressee ID)，长度在128个字符之内。
	 **/
	public $oaid;
	
	/** 
	 * 解密场景编号。不同场景，解密策略不同。请根据产品功能选择相应的场景编号。可选的场景：1001(顺丰电子面单发货)、1002(4通一达电子面单发货)、1003(EMS电子面单发货)、1004(其他电子面单发货)、1005(线下门店发货)、1006(手工单发货)、1007(代发货)、2001(客户售后服务)、2002(客户关怀)，<a href="https://open.taobao.com/doc.htm?docId=120186&docType=1" target="_blank">详情点击</a>
	 **/
	public $scene;
	
	/** 
	 * 隐私号绑定时间
	 **/
	public $secret_no_days;
	
	/** 
	 * 交易订单ID
	 **/
	public $tid;	
}
?>