<?php

/**
 * [架海金梁独有字段，非架海金梁用户请勿关心]子单物流发货信息
 * @author auto create
 */
class ErpLogisticsInfo
{
	
	/** 
	 * 货品条码
	 **/
	public $bar_code;
	
	/** 
	 * 推荐配送erp编码
	 **/
	public $biz_delivery_code;
	
	/** 
	 * 仓配建议类型
	 **/
	public $biz_sd_type;
	
	/** 
	 * 仓商家编码
	 **/
	public $biz_store_code;
	
	/** 
	 * CP黑名单，逗号分隔
	 **/
	public $black_delivery_cps;
	
	/** 
	 * 组合商品Code
	 **/
	public $combine_item_code;
	
	/** 
	 * 组合商品ID
	 **/
	public $combine_item_id;
	
	/** 
	 * 发货类型 CN=菜鸟发货,SC的商家仓发货
	 **/
	public $consign_type;
	
	/** 
	 * 推荐配送公司编码
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
	 * 采购单号
	 **/
	public $order_id;
	
	/** 
	 * 预计发货地址-文案描述-城市
	 **/
	public $send_city;
	
	/** 
	 * 预计发货地址-文案描述-国家
	 **/
	public $send_country;
	
	/** 
	 * 预计发货地址-文案描述-地区
	 **/
	public $send_district;
	
	/** 
	 * 预计发货地址-最小行政地址编码
	 **/
	public $send_division_code;
	
	/** 
	 * 预计发货地址-文案描述-省份
	 **/
	public $send_state;
	
	/** 
	 * 预计发货地址-文案描述-街道/镇
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
	 * 采购单子单号
	 **/
	public $sub_order_id;
	
	/** 
	 * 子订单类型:标示该子交易单来源交易，还是BMS增加的，枚举值(00=交易，10=BMS绑定)
	 **/
	public $type;
	
	/** 
	 * CP白名单，逗号分隔
	 **/
	public $white_delivery_cps;	
}
?>