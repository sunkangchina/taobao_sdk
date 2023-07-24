<?php

/**
 * 订单详情
 * @author auto create
 */
class TradeOrder
{
	
	/** 
	 * 支付宝交易号
	 **/
	public $alipay_no;
	
	/** 
	 * 合计应收
	 **/
	public $all_total;
	
	/** 
	 * 是否开发票(0：不开发票;1：开发票)
	 **/
	public $binvoice;
	
	/** 
	 * 发票状态(0未开票1已开票2开票中3开票失败)
	 **/
	public $binvoicemade;
	
	/** 
	 * 买家支付宝账号
	 **/
	public $buyer_alipay_no;
	
	/** 
	 * 买家留言
	 **/
	public $buyer_remark;
	
	/** 
	 * 取消原因
	 **/
	public $cancel_reason;
	
	/** 
	 * 审核时间
	 **/
	public $chk_time;
	
	/** 
	 * 交易佣金
	 **/
	public $commission_value;
	
	/** 
	 * 国家
	 **/
	public $country;
	
	/** 
	 * 抵扣金额
	 **/
	public $coupon_value;
	
	/** 
	 * 分销商名称
	 **/
	public $distributor_name;
	
	/** 
	 * 订单结束时间
	 **/
	public $end_time;
	
	/** 
	 * 扩展属性
	 **/
	public $extend_props;
	
	/** 
	 * 优惠金额
	 **/
	public $favourable_total;
	
	/** 
	 * 货品成本
	 **/
	public $goods_cost;
	
	/** 
	 * 货款合计
	 **/
	public $goods_total;
	
	/** 
	 * 发票类型
	 **/
	public $invoice_kind;
	
	/** 
	 * 发票抬头
	 **/
	public $invoice_title;
	
	/** 
	 * 发票号
	 **/
	public $invoiceno;
	
	/** 
	 * 分销商实付金额
	 **/
	public $istributor_payment;
	
	/** 
	 * 物流公司ID
	 **/
	public $logistic_id;
	
	/** 
	 * 物流单号
	 **/
	public $logistic_no;
	
	/** 
	 * 物流方式
	 **/
	public $logistname;
	
	/** 
	 * 订单修改时间
	 **/
	public $modified;
	
	/** 
	 * 其他成本
	 **/
	public $other_cost;
	
	/** 
	 * 包装成本
	 **/
	public $package_total;
	
	/** 
	 * 付款时间
	 **/
	public $pay_time;
	
	/** 
	 * 支付方式
	 **/
	public $pay_type;
	
	/** 
	 * 实际邮资
	 **/
	public $postage;
	
	/** 
	 * 应收邮资
	 **/
	public $postage_total;
	
	/** 
	 * 原始单号
	 **/
	public $raw_no;
	
	/** 
	 * 实际结算
	 **/
	public $recv_total;
	
	/** 
	 * 登记时间
	 **/
	public $reg_time;
	
	/** 
	 * 业务员
	 **/
	public $seller;
	
	/** 
	 * 卖家追加备注
	 **/
	public $seller_append_remark;
	
	/** 
	 * 卖家备注
	 **/
	public $seller_flag;
	
	/** 
	 * 客服备注
	 **/
	public $seller_remark;
	
	/** 
	 * 店铺id
	 **/
	public $shop_id;
	
	/** 
	 * 店铺名称
	 **/
	public $shop_name;
	
	/** 
	 * 发货时间
	 **/
	public $sndtime;
	
	/** 
	 * 客付税额
	 **/
	public $tax_value;
	
	/** 
	 * 分销主订单号
	 **/
	public $tc_order_id;
	
	/** 
	 * 订单利润
	 **/
	public $total_profit;
	
	/** 
	 * 订单id
	 **/
	public $trade_id;
	
	/** 
	 * 订单号
	 **/
	public $trade_no;
	
	/** 
	 * 订单状态（0被取消;1等待单;2待审核;3预订单;4待结算;5待发货;6生产等待;7发货在途;8代销发货;10委外发货;11已完成)
	 **/
	public $trade_status;
	
	/** 
	 * 交易时间
	 **/
	public $trade_time;
	
	/** 
	 * 订单类型
	 **/
	public $trade_type;
	
	/** 
	 * 发货仓库ID
	 **/
	public $warehouse_id;
	
	/** 
	 * 仓库名称
	 **/
	public $warehouse_name;	
}
?>