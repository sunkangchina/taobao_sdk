<?php

/**
 * 工单列表
 * @author auto create
 */
class Workcard
{
	
	/** 
	 * 额外属性，包含：{   servPrice: 服务采购价,   newService: 切服务化之后的服务单标识,   lbxNo: 淘宝的物流订单号,   discountFee: 优惠金额,   reserveSource: 预约来源,   serviceDate: 预约时间,   gmtExpire: 过期时间,   bizCode: 业务身份,   型号: IKEA00000237S,   serviceAuctionTitle: 服务商品标题,   reserveTimeEnd: 预约时间段的结束时间,   reassign: 是否是改派工单,   masterSkuId: 实物sku id,   serviceSkuDesc: 服务sku描述,   operator: 工单预约操作者 1表示消费者主动预约，2表示服务回传预约时间,   settlement: 是否进行线上结算,   mainServiceOrder: 双主服务主订单key,   signedTime: 签收时间,   masterAuctionTitle: 实物商品标题,   msfRervDate: 瞄师傅预约日期,   类目: 书架,   品牌: IKEA/宜家,   auctionImageUrl: 实物图片链接,   masterSkuDesc: 实物sku描述,   af: 交易订单实付金额,   auto_dispatch_order: 是否智能派单,   usedServiceCount: "工单总使用次数",   reserveTimeStart: 预约时间段的开始时间,   masterParentOrderId: 实物订单主订单,   address_city: 买家城市,   reserveRemark: 预约备注,   父类目: 架类,   arrivalTimeNum: 物品签收时间,   outerIdSKU: 商家编码 }
	 **/
	public $attribute_map;
	
	/** 
	 * 买家期望服务时间
	 **/
	public $buyer_expect_date;
	
	/** 
	 * 分配工人时间
	 **/
	public $gmt_assign_worker;
	
	/** 
	 * 工单创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 核销时间
	 **/
	public $gmt_identify;
	
	/** 
	 * 预约结束时间
	 **/
	public $gmt_reserve_end;
	
	/** 
	 * 预约时间开始
	 **/
	public $gmt_reserve_start;
	
	/** 
	 * 签到时间
	 **/
	public $gmt_sign_in;
	
	/** 
	 * 工单id
	 **/
	public $id;
	
	/** 
	 * 剩余次数
	 **/
	public $left_service_count;
	
	/** 
	 * 实物订单信息
	 **/
	public $master_trade_order;
	
	/** 
	 * 主订单号
	 **/
	public $parent_biz_order_id;
	
	/** 
	 * 核销/工单完结请求中直接带回该字段
	 **/
	public $sequence;
	
	/** 
	 * 工单服务总次数
	 **/
	public $service_count;
	
	/** 
	 * 服务定义
	 **/
	public $service_definition;
	
	/** 
	 * 服务提供者
	 **/
	public $service_provider;
	
	/** 
	 * 服务订单数据
	 **/
	public $service_trade_order;
	
	/** 
	 * 服务单id
	 **/
	public $sp_service_order_id;
	
	/** 
	 * 工单状态编码
	 **/
	public $status_code;
	
	/** 
	 * 已使用的次数
	 **/
	public $used_service_count;	
}
?>