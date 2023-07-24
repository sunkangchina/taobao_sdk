<?php
/**
 * TOP API: t33hglzv00.wdgj.trade.confirm request
 * 
 * @author auto create
 * @since 1.0, 2018.03.29
 */
class WdgjTradeConfirmRequest
{
	/** 
	 * 订单的列表
	 **/
	private $content;
	
	/** 
	 * 长期有效的授权码，调用OpenAPI时候需要的主要的主要验证
	 **/
	private $wdgjaccesstoken;
	
	/** 
	 * 创建应用时候申请的appkey
	 **/
	private $wdgjappkey;
	
	/** 
	 * 数据返回值格式xml/json
	 **/
	private $wdgjformat;
	
	/** 
	 * 相关的业务接口名称编码
	 **/
	private $wdgjmethod;
	
	/** 
	 * 接口签名
	 **/
	private $wdgjsign;
	
	/** 
	 * 时间戳
	 **/
	private $wdgjtimestap;
	
	/** 
	 * 协议版本号
	 **/
	private $wdgjversions;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setWdgjaccesstoken($wdgjaccesstoken)
	{
		$this->wdgjaccesstoken = $wdgjaccesstoken;
		$this->apiParas["wdgjaccesstoken"] = $wdgjaccesstoken;
	}

	public function getWdgjaccesstoken()
	{
		return $this->wdgjaccesstoken;
	}

	public function setWdgjappkey($wdgjappkey)
	{
		$this->wdgjappkey = $wdgjappkey;
		$this->apiParas["wdgjappkey"] = $wdgjappkey;
	}

	public function getWdgjappkey()
	{
		return $this->wdgjappkey;
	}

	public function setWdgjformat($wdgjformat)
	{
		$this->wdgjformat = $wdgjformat;
		$this->apiParas["wdgjformat"] = $wdgjformat;
	}

	public function getWdgjformat()
	{
		return $this->wdgjformat;
	}

	public function setWdgjmethod($wdgjmethod)
	{
		$this->wdgjmethod = $wdgjmethod;
		$this->apiParas["wdgjmethod"] = $wdgjmethod;
	}

	public function getWdgjmethod()
	{
		return $this->wdgjmethod;
	}

	public function setWdgjsign($wdgjsign)
	{
		$this->wdgjsign = $wdgjsign;
		$this->apiParas["wdgjsign"] = $wdgjsign;
	}

	public function getWdgjsign()
	{
		return $this->wdgjsign;
	}

	public function setWdgjtimestap($wdgjtimestap)
	{
		$this->wdgjtimestap = $wdgjtimestap;
		$this->apiParas["wdgjtimestap"] = $wdgjtimestap;
	}

	public function getWdgjtimestap()
	{
		return $this->wdgjtimestap;
	}

	public function setWdgjversions($wdgjversions)
	{
		$this->wdgjversions = $wdgjversions;
		$this->apiParas["wdgjversions"] = $wdgjversions;
	}

	public function getWdgjversions()
	{
		return $this->wdgjversions;
	}

	public function getApiMethodName()
	{
		return "t33hglzv00.wdgj.trade.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->wdgjaccesstoken,"wdgjaccesstoken");
		RequestCheckUtil::checkNotNull($this->wdgjappkey,"wdgjappkey");
		RequestCheckUtil::checkNotNull($this->wdgjformat,"wdgjformat");
		RequestCheckUtil::checkNotNull($this->wdgjmethod,"wdgjmethod");
		RequestCheckUtil::checkNotNull($this->wdgjsign,"wdgjsign");
		RequestCheckUtil::checkNotNull($this->wdgjtimestap,"wdgjtimestap");
		RequestCheckUtil::checkNotNull($this->wdgjversions,"wdgjversions");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
