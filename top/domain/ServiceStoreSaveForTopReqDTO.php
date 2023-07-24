<?php

/**
 * 入参
 * @author auto create
 */
class ServiceStoreSaveForTopReqDTO
{
	
	/** 
	 * 详细地址
	 **/
	public $address;
	
	/** 
	 * 网点地址编码经纬度和详细地址id二选一
	 **/
	public $address_id;
	
	/** 
	 * 支付宝账号注册的信息--如用手机号或者邮箱
	 **/
	public $alipay_account;
	
	/** 
	 * 支付宝账号id
	 **/
	public $alipay_account_id;
	
	/** 
	 * 支付宝账号
	 **/
	public $alipay_account_id_number;
	
	/** 
	 * 支付宝账号真实姓名
	 **/
	public $alipay_account_name;
	
	/** 
	 * 扩展属性，底层必须是map结构
	 **/
	public $attributes;
	
	/** 
	 * 品牌认证图片url-使用阿里图片服务
	 **/
	public $brand_certification;
	
	/** 
	 * 营业时间,小时维度
	 **/
	public $business_hours;
	
	/** 
	 * 认证的天猫品牌id集合-找运营支持
	 **/
	public $certificated_brand_ids;
	
	/** 
	 * 公司名称
	 **/
	public $company_name;
	
	/** 
	 * 门头照片-使用阿里图片服务
	 **/
	public $front_photo;
	
	/** 
	 * 维度，必须是数字
	 **/
	public $latitude;
	
	/** 
	 * 法人身份证照片l-使用阿里图片服务
	 **/
	public $legal_person_id_card_pic;
	
	/** 
	 * 法人身份证反面l-使用阿里图片服务
	 **/
	public $legal_person_id_card_pic_back;
	
	/** 
	 * 法人身份证
	 **/
	public $legal_person_id_number;
	
	/** 
	 * 法人姓名
	 **/
	public $legal_person_name;
	
	/** 
	 * 营业执照照片-使用阿里图片服务
	 **/
	public $license_photo;
	
	/** 
	 * 精度，必须是数字
	 **/
	public $longitude;
	
	/** 
	 * 网点负责人姓名
	 **/
	public $manager_name;
	
	/** 
	 * 网点负责人电话
	 **/
	public $manager_phone;
	
	/** 
	 * 对外服务电话
	 **/
	public $phone;
	
	/** 
	 * 网点code和网点id选其一
	 **/
	public $service_store_code;
	
	/** 
	 * 网点id和网点code选其一
	 **/
	public $service_store_id;
	
	/** 
	 * 网点邮箱
	 **/
	public $service_store_mail;
	
	/** 
	 * 网点名称-唯一
	 **/
	public $service_store_name;
	
	/** 
	 * 统一社会信用代码
	 **/
	public $social_credit_code;	
}
?>