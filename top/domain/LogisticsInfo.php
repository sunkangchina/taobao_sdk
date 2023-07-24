<?php

/**
 * 子单维度物流发货信息
 * @author auto create
 */
class LogisticsInfo
{
	
	/** 
	 * 货品BarCode
	 **/
	public $bar_code;
	
	/** 
	 * 推荐配送erp编码
	 **/
	public $biz_delivery_code;
	
	/** 
	 * 订单推荐配送类型      * 0：子单无配建议；ERP按照自己的逻辑进行择配。      * 1：子单有推荐配list，erp可按需参考。      * 2：子单有推荐配list，erp必须在推荐配list中选择配品牌。      * 3：子单有禁用配list，erp需要过滤配品牌。
	 **/
	public $biz_delivery_type;
	
	/** 
	 * 仓配建议类型
	 **/
	public $biz_sd_type;
	
	/** 
	 * 仓商家编码
	 **/
	public $biz_store_code;
	
	/** 
	 * 服务决策的快递黑名单列表
	 **/
	public $black_delivery_cps;
	
	/** 
	 * 组合货品Code
	 **/
	public $combine_item_code;
	
	/** 
	 * 组合货品ID
	 **/
	public $combine_item_id;
	
	/** 
	 * 发货类型 CN=菜鸟发货,SC的商家仓发货
	 **/
	public $consign_type;
	
	/** 
	 * 择配信息
	 **/
	public $delivery_cps;
	
	/** 
	 * 货品仓储code
	 **/
	public $item_code;
	
	/** 
	 * 货品仓储id
	 **/
	public $item_id;
	
	/** 
	 * 组合货品比例
	 **/
	public $item_ratio;
	
	/** 
	 * 应发数量
	 **/
	public $need_consign_num;
	
	/** 
	 * 商品数字编号
	 **/
	public $num_iid;
	
	/** 
	 * 承诺/最晚揽收时间
	 **/
	public $promise_collect_time;
	
	/** 
	 * 承诺/最晚出库时间
	 **/
	public $promise_outbound_time;
	
	/** 
	 * 服务决策的发货地，城市
	 **/
	public $send_city;
	
	/** 
	 * 服务决策的发货地，国家
	 **/
	public $send_country;
	
	/** 
	 * 服务决策的发货地，地区
	 **/
	public $send_district;
	
	/** 
	 * 服务决策的发货地最小地址编码
	 **/
	public $send_division_code;
	
	/** 
	 * 服务决策的发货地，省份
	 **/
	public $send_state;
	
	/** 
	 * 服务决策的发货地，街道地址
	 **/
	public $send_town;
	
	/** 
	 * 商品的最小库存单位Sku的id
	 **/
	public $sku_id;
	
	/** 
	 * 如是菜鸟仓，则将菜鸟仓的区域仓code进行填充，如是商家仓发货则填充SC
	 **/
	public $store_code;
	
	/** 
	 * 子交易号
	 **/
	public $sub_trade_id;
	
	/** 
	 * 主交易号
	 **/
	public $trade_id;
	
	/** 
	 * 子订单类型:标示该子交易单来源交易，还是BMS增加的，枚举值(00=交易，10=BMS绑定)
	 **/
	public $type;
	
	/** 
	 * 未使用配建议报错
	 **/
	public $unused_delivery_error_msg;
	
	/** 
	 * 未使用仓建议报错
	 **/
	public $unused_warehouse_error_msg;
	
	/** 
	 * 使用禁止配报错
	 **/
	public $used_black_delivery_error_msg;
	
	/** 
	 * 服务决策的快递白名单列表
	 **/
	public $white_delivery_cps;	
}
?>