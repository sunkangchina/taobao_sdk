<?php

/**
 * 产品的属性图片.比如说黄色对应的产品图片,绿色对应的产品图片。fields中设置为product_prop_imgs.id、 
product_prop_imgs.props、product_prop_imgs.url、product_prop_imgs.position等形式就会返回相应的字段
 * @author auto create
 */
class ProductPropImg
{
	
	/** 
	 * 添加时间.格式:yyyy-mm-dd hh:mm:ss
	 **/
	public $created;
	
	/** 
	 * 产品属性图片ID
	 **/
	public $id;
	
	/** 
	 * 修改时间.格式:yyyy-mm-dd hh:mm:ss
	 **/
	public $modified;
	
	/** 
	 * 图片序号。产品里的图片展示顺序，数据越小越靠前。要求是正整数。
	 **/
	public $position;
	
	/** 
	 * 图片所属产品的ID
	 **/
	public $product_id;
	
	/** 
	 * 属性串(pid:vid),目前只有颜色属性.如:颜色:红色表示为　1627207:28326
	 **/
	public $props;
	
	/** 
	 * 图片地址.(绝对地址,格式:http://host/image_path)
	 **/
	public $url;	
}
?>