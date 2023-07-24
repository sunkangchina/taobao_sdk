<?php

/**
 * 库存查询模型
 * @author auto create
 */
class HiErpQueryInventoryReq
{
	
	/** 
	 * 货品编码集合（优先读货品ID，货品ID为空才读货品编码）
	 **/
	public $item_codes;
	
	/** 
	 * 货品ID集合（优先读货品ID，货品ID为空才读货品编码）
	 **/
	public $item_ids;
	
	/** 
	 * 货主ID
	 **/
	public $owner_id;
	
	/** 
	 * 仓编码
	 **/
	public $store_code;	
}
?>