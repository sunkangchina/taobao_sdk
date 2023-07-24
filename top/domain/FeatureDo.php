<?php

/**
 * 建议废弃 Feature对象列表目前已有的属性： attr_key为 www，attr_value为1 表示是www子订单； attr_key为 wwwStoreCode，attr_value是www子订单发货的仓库编码； attr_key为 isWt，attr_value为1 表示是网厅子订单； attr_key为wtInfo,attr_value为网厅相关合约信息；  attr_key为 storeCode，attr_value为仓库信息；  attr_key为 erpHold，attr_value为1表示强管控中， attr_value为2表示分单完成；
 * @author auto create
 */
class FeatureDo
{
	
	/** 
	 * 属性键
	 **/
	public $attr_key;
	
	/** 
	 * 属性值
	 **/
	public $attr_value;	
}
?>