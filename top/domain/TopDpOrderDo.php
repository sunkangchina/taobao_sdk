<?php

/**
 * 采购单及子采购单信息。 返回 PurchaseOrder 包含的字段信息。
 * @author auto create
 */
class TopDpOrderDo
{
	
	/** 
	 * 支付宝交易号，在分销商使用担保交易支付时存在。 来源主订单的payOrderId。
	 **/
	public $alipay_no;
	
	/** 
	 * 支付宝交易号，担保交易使用。
	 **/
	public $alipay_order_no;
	
	/** 
	 * 配送服务,201为驿站送货上门服务,202为顺丰配送服务,里面多个值时用英文逗号隔开
	 **/
	public $asdp_ads;
	
	/** 
	 * 消费者（买家）nick，供应商查询不会返回买家昵称，分销商查询才会返回。
	 **/
	public $buyer_nick;
	
	/** 
	 * 消费者（买家）支付给分销商的主单的实际总金额。 注意买家购买的商品可能不是全部来自同一供货商，所以此金额不代表供应商销售商品消费者的实付款。请同时参考子单上的相关金额。（精确到2位小数;单位:元。如:200.07，表示:200元7分）
	 **/
	public $buyer_payment;
	
	/** 
	 * 加密后的消费者淘宝ID，长度为32
	 **/
	public $buyer_taobao_id;
	
	/** 
	 * 渠道(市场)编码，例如消费电子的编码为200002
	 **/
	public $channel_code;
	
	/** 
	 * 已执行确认收货的金额，单位：元
	 **/
	public $confirm_paid_fee_yuan;
	
	/** 
	 * 采购单物流发货时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $consign_time;
	
	/** 
	 * 采购单创建时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $created;
	
	/** 
	 * 推荐配送公司编码
	 **/
	public $delivery_cps;
	
	/** 
	 * 计划出库时间
	 **/
	public $delivery_time;
	
	/** 
	 * 建议废弃： 分销商来源网站。 入驻时定义分销商来源的外部系统编码, 目前固定值: taobao
	 **/
	public $distributor_from;
	
	/** 
	 * 分销商实付金额。(精确到2位小数;单位:元。如:208.14，表示:208元1角4分 )
	 **/
	public $distributor_payment;
	
	/** 
	 * 分销商昵称（在来源网站的帐号名）。
	 **/
	public $distributor_username;
	
	/** 
	 * 交易结束时间。 如果交易成功此时间表示交易成功时间，如果交易关闭，此时间表示交易关闭时间。
	 **/
	public $end_time;
	
	/** 
	 * 建议废弃 Feature对象列表目前已有的属性： attr_key为 www，attr_value为1 表示是www子订单； attr_key为 wwwStoreCode，attr_value是www子订单发货的仓库编码； attr_key为 isWt，attr_value为1 表示是网厅子订单； attr_key为wtInfo,attr_value为网厅相关合约信息； attr_key为 storeCode，attr_value为仓库信息；  attr_key为 erpHold，attr_value为1表示强管控中， attr_value为2表示分单完成；
	 **/
	public $features;
	
	/** 
	 * 分销采购单号（分销流水号）
	 **/
	public $fenxiao_id;
	
	/** 
	 * 废弃：如果是担保交易此值是TP800的交易单号，其他情况是采购单单号
	 **/
	public $id;
	
	/** 
	 * ISV自定义key，通过taobao.fenxiao.order.customfield.update 写入。目前禁用
	 **/
	public $isv_custom_key;
	
	/** 
	 * ISV自定义值，通过taobao.fenxiao.order.customfield.update 写入。目前禁用
	 **/
	public $isv_custom_value;
	
	/** 
	 * 物流公司名称
	 **/
	public $logistics_company_name;
	
	/** 
	 * 运单号
	 **/
	public $logistics_id;
	
	/** 
	 * [架海金梁独有字段，非架海金梁用户请勿关心]子单物流发货信息
	 **/
	public $logistics_infos;
	
	/** 
	 * 采购单留言，默认是分销商留言。在代销模式下信息包括消费者（买家）留言和分销商留言信息
	 **/
	public $memo;
	
	/** 
	 * 采购单最后修改时间（包括订单状态变更和订单操作）。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $modified;
	
	/** 
	 * 消费者淘宝id被加密后的唯一标识
	 **/
	public $open_buyer_uid;
	
	/** 
	 * 采购单留言列表，如果是代销，包含消费者留言。
	 **/
	public $order_messages;
	
	/** 
	 * 采购单付款时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $pay_time;
	
	/** 
	 * 支付方式：ALIPAY_SURETY（支付宝担保交易）、ALIPAY_CHAIN（分账交易）、TRANSFER（线下转账）、PREPAY（预存款）、IMMEDIATELY（即时到账）、CASHGOODS（先款后货）、ACCOUNT_PERIOD（账期支付）
	 **/
	public $pay_type;
	
	/** 
	 * 采购单邮费。(改价后最新邮费，精确到2位小数;单位:元。如:8.07，表示:8元7分 )
	 **/
	public $post_fee;
	
	/** 
	 * 买家详细信息
	 **/
	public $receiver;
	
	/** 
	 * 物流配送方式，发货后有此数据。 对应的值：FAST(快速)、EMS、ORDINARY(平邮)、SELLER(卖家包邮)
	 **/
	public $shipping;
	
	/** 
	 * 计划送达时间
	 **/
	public $sign_time;
	
	/** 
	 * 交易订单快照URL（该字段废弃）
	 **/
	public $snapshot_url;
	
	/** 
	 * 采购单交易状态。 可选值： WAIT_BUYER_PAY(等待付款) WAIT_SELLER_SEND_GOODS(已付款，待发货） WAIT_BUYER_CONFIRM_GOODS(已付款，已发货) PAID_FORBID_CONSIGN(已付款，禁止发货 ps:只有大快消行业的才有) TRADE_FINISHED(交易成功) TRADE_CLOSED(交易关闭) WAIT_BUYER_CONFIRM_GOODS_ACOUNTED(已付款（已分账），已发货。只对代销分账支持) PAY_ACOUNTED_GOODS_CONFIRM （已分账发货成功） PAY_WAIT_ACOUNT_GOODS_CONFIRM（已付款，确认收货）
	 **/
	public $status;
	
	/** 
	 * 子订单的详细信息列表
	 **/
	public $sub_purchase_orders;
	
	/** 
	 * 供应商备注旗帜vlaue在1-5之间。 非1-5之间，都采用1作为默认。 1:红色 2:黄色 3:绿色 4:蓝色 5:粉红色 供应商角色查询返回
	 **/
	public $supplier_flag;
	
	/** 
	 * 供应商来源网站。 入驻时定义供应商来源的外部系统编码, values: taobao, alibaba
	 **/
	public $supplier_from;
	
	/** 
	 * 供应商备注信息。 只有供应商身份查询输出此新信息
	 **/
	public $supplier_memo;
	
	/** 
	 * 供应商昵称（在来源网站的帐号名）
	 **/
	public $supplier_username;
	
	/** 
	 * 消费者主订单ID （经销模式下，不存在该单号）
	 **/
	public $tc_order_id;
	
	/** 
	 * 应付采购单总额（不含邮费,精确到2位小数;单位:元。如:200.07，表示:200元7分 ) 计算公式： SUM(子单采购价 * 子单采购数量 - 子单折扣）+ 主单调整金额 - 主单折扣
	 **/
	public $total_fee;
	
	/** 
	 * 交易模式（分销方式）：AGENT（代销）、DEALER（经销）、INSTEAD_SALE（代售）、CONSIGNMENT（自营寄售）、PLATFORM_CONSIGNMENT（平台寄售）
	 **/
	public $trade_type;	
}
?>