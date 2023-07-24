<?php

/**
 * 修改库存模型
 * @author auto create
 */
class HiErpModifyInventoryReq
{
	
	/** 
	 * 货品编码（优先读货品ID，货品ID为空才读货品编码）
	 **/
	public $item_code;
	
	/** 
	 * 货品ID（优先读货品ID，货品ID为空才读货品编码）
	 **/
	public $item_id;
	
	/** 
	 * 操作数量（正数为增加库存，负数为减少库存）
	 **/
	public $number;
	
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