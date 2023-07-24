<?php

/**
 * 规格列表
 * @author auto create
 */
class Specinfo
{
	
	/** 
	 * 是否停用 True/False
	 **/
	public $bblockup;
	
	/** 
	 * 是否启用固定成本价 True/False
	 **/
	public $bfixcost;
	
	/** 
	 * 固定成本价
	 **/
	public $fixcostprice;
	
	/** 
	 * 附加码
	 **/
	public $speccode;
	
	/** 
	 * 规格ID，单规格为0
	 **/
	public $specid;
	
	/** 
	 * 规格名
	 **/
	public $specname;
	
	/** 
	 * 重量
	 **/
	public $weight;	
}
?>