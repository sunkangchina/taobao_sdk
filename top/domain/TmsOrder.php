<?php

/**
 * 配送订单
 * @author auto create
 */
class TmsOrder
{
	
	/** 
	 * 物流商编码
	 **/
	public $cp_code;
	
	/** 
	 * 扩展属性
	 **/
	public $extend_fields;
	
	/** 
	 * 包裹号
	 **/
	public $package_code;
	
	/** 
	 * 包裹高度，单位：毫米
	 **/
	public $package_height;
	
	/** 
	 * 包裹长度，单位：毫米
	 **/
	public $package_length;
	
	/** 
	 * 包裹材料列表
	 **/
	public $package_material_list;
	
	/** 
	 * 包裹状态(配签收TMS_SIGN|配拒签TMS_FAILED|部分签收TMS_PART_SIGN)
	 **/
	public $package_status;
	
	/** 
	 * 包裹重量，单位：克
	 **/
	public $package_weight;
	
	/** 
	 * 包裹宽度，单位：毫米
	 **/
	public $package_width;
	
	/** 
	 * 备注如拒签原因
	 **/
	public $remark;
	
	/** 
	 * 资源编码
	 **/
	public $res_code;
	
	/** 
	 * 快递公司服务编码
	 **/
	public $tms_code;
	
	/** 
	 * 配明细列表
	 **/
	public $tms_items;
	
	/** 
	 * 运单编码
	 **/
	public $tms_order_code;
	
	/** 
	 * 包裹的揽收/签收/ 拒签时间
	 **/
	public $update_time;	
}
?>