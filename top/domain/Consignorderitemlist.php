<?php

/**
 * 发货子单信息
 * @author auto create
 */
class Consignorderitemlist
{
	
	/** 
	 * 扩展字段JSON串
	 **/
	public $feature;
	
	/** 
	 * 货品名称(货品为商家实际发货货品信息)
	 **/
	public $goods_name;
	
	/** 
	 * 货品数量
	 **/
	public $goods_qty;
	
	/** 
	 * 货品体积(m3)
	 **/
	public $goods_volume;
	
	/** 
	 * 货品重量(kg)
	 **/
	public $goods_weight;
	
	/** 
	 * 安装类型 1:整装 2:拆装
	 **/
	public $install_type;
	
	/** 
	 * 商品编码
	 **/
	public $item_code;
	
	/** 
	 * 商品名称(商品为店铺销售宝贝信息)
	 **/
	public $item_name;
	
	/** 
	 * 交易主单号
	 **/
	public $order_source_code;
	
	/** 
	 * 包件明细( 包件为包裹信息)
	 **/
	public $package_detail_list;
	
	/** 
	 * 包件数量
	 **/
	public $package_qty;
	
	/** 
	 * 交易子单号
	 **/
	public $sub_source_code;	
}
?>