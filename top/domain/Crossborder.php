<?php

/**
 * 货品跨境信息
 * @author auto create
 */
class Crossborder
{
	
	/** 
	 * 检验检疫商品备案编号
	 **/
	public $goodnociq;
	
	/** 
	 * 海关备案商品编号
	 **/
	public $goodnohs;
	
	/** 
	 * 原产国，默认中国
	 **/
	public $goods_coo;
	
	/** 
	 * 海关备案商品编号（保税）
	 **/
	public $goodshsno_b;
	
	/** 
	 * 海关备案商品编号（直邮)
	 **/
	public $goodshsno_m;
	
	/** 
	 * 消费税税率
	 **/
	public $gst_taxrate;
	
	/** 
	 * h2010
	 **/
	public $h2010no;
	
	/** 
	 * 关税税率
	 **/
	public $hs_taxrate;
	
	/** 
	 * 默认海关编号类型
	 **/
	public $hsnotype;
	
	/** 
	 * 进口税税则号
	 **/
	public $hstaxno;
	
	/** 
	 * 包装类型代码(检验检疫)默认其它
	 **/
	public $packtypeciq;
	
	/** 
	 * 包装类型代码(海关)默认其它
	 **/
	public $packtypehs;
	
	/** 
	 * 行邮税号
	 **/
	public $taxid;
	
	/** 
	 * 增值税税率
	 **/
	public $vat_taxrate;	
}
?>