<?php

/**
 * 货品列表
 * @author auto create
 */
class Goodsinfo
{
	
	/** 
	 * 条码 （条码+附加码）
	 **/
	public $barcode;
	
	/** 
	 * 是否组合装 True/False
	 **/
	public $bfit;
	
	/** 
	 * 是否赠品 True/False
	 **/
	public $bgift;
	
	/** 
	 * 数量
	 **/
	public $goodscount;
	
	/** 
	 * 货品ID
	 **/
	public $goodsid;
	
	/** 
	 * 金额
	 **/
	public $goodsmoney;
	
	/** 
	 * 品名
	 **/
	public $goodsname;
	
	/** 
	 * 货品编号
	 **/
	public $goodsno;
	
	/** 
	 * 货位
	 **/
	public $positionsname;
	
	/** 
	 * 单价
	 **/
	public $price;
	
	/** 
	 * 记录id（唯一）
	 **/
	public $recid;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 序列号
	 **/
	public $sn;
	
	/** 
	 * 规格ID，单规格为0
	 **/
	public $specid;
	
	/** 
	 * 规格名
	 **/
	public $specname;
	
	/** 
	 * 单位
	 **/
	public $unit;	
}
?>