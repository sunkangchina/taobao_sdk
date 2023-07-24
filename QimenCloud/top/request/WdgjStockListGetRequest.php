<?php
/**
 * TOP API: t33hglzv00.wdgj.stock.list.get request
 * 
 * @author auto create
 * @since 1.0, 2020.02.27
 */
class WdgjStockListGetRequest
{
	/** 
	 * 库存更改日期，YYYY-MM-DD HH:mm:ss格式。 查询结果：更改日期大于传入的modifydate 或者 货品的库存变动日期为0而且订购量大于0的货品的库存
	 **/
	private $modifydate;
	
	/** 
	 * 页码
	 **/
	private $pageno;
	
	/** 
	 * 每页条数，取值范围 1 ~ 100
	 **/
	private $pagesize;
	
	/** 
	 * 货品编码
	 **/
	private $searchcode;
	
	/** 
	 * 仓库名
	 **/
	private $searchname;
	
	/** 
	 * 仓库编码
	 **/
	private $searchno;
	
	/** 
	 * 查询类别 （1 分仓库存 0 总库存 不填或者填写其他值默认0 总库存,查询总库存不显示仓库信息）
	 **/
	private $searchtype;
	
	/** 
	 * 长期有效的授权码，调用OpenApi时需要的主要验证
	 **/
	private $wdgjaccesstoken;
	
	/** 
	 * 创建应用接入时申请的appkey
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
	 * 签名
	 **/
	private $wdgjsign;
	
	/** 
	 * 当前时间的Unix时间戳
	 **/
	private $wdgjtimestamp;
	
	/** 
	 * 协议版本号
	 **/
	private $wdgjversions;
	
	private $apiParas = array();
	
	public function setModifydate($modifydate)
	{
		$this->modifydate = $modifydate;
		$this->apiParas["modifydate"] = $modifydate;
	}

	public function getModifydate()
	{
		return $this->modifydate;
	}

	public function setPageno($pageno)
	{
		$this->pageno = $pageno;
		$this->apiParas["pageno"] = $pageno;
	}

	public function getPageno()
	{
		return $this->pageno;
	}

	public function setPagesize($pagesize)
	{
		$this->pagesize = $pagesize;
		$this->apiParas["pagesize"] = $pagesize;
	}

	public function getPagesize()
	{
		return $this->pagesize;
	}

	public function setSearchcode($searchcode)
	{
		$this->searchcode = $searchcode;
		$this->apiParas["searchcode"] = $searchcode;
	}

	public function getSearchcode()
	{
		return $this->searchcode;
	}

	public function setSearchname($searchname)
	{
		$this->searchname = $searchname;
		$this->apiParas["searchname"] = $searchname;
	}

	public function getSearchname()
	{
		return $this->searchname;
	}

	public function setSearchno($searchno)
	{
		$this->searchno = $searchno;
		$this->apiParas["searchno"] = $searchno;
	}

	public function getSearchno()
	{
		return $this->searchno;
	}

	public function setSearchtype($searchtype)
	{
		$this->searchtype = $searchtype;
		$this->apiParas["searchtype"] = $searchtype;
	}

	public function getSearchtype()
	{
		return $this->searchtype;
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

	public function setWdgjtimestamp($wdgjtimestamp)
	{
		$this->wdgjtimestamp = $wdgjtimestamp;
		$this->apiParas["wdgjtimestamp"] = $wdgjtimestamp;
	}

	public function getWdgjtimestamp()
	{
		return $this->wdgjtimestamp;
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
		return "t33hglzv00.wdgj.stock.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageno,"pageno");
		RequestCheckUtil::checkNotNull($this->pagesize,"pagesize");
		RequestCheckUtil::checkNotNull($this->wdgjaccesstoken,"wdgjaccesstoken");
		RequestCheckUtil::checkNotNull($this->wdgjappkey,"wdgjappkey");
		RequestCheckUtil::checkNotNull($this->wdgjformat,"wdgjformat");
		RequestCheckUtil::checkNotNull($this->wdgjmethod,"wdgjmethod");
		RequestCheckUtil::checkNotNull($this->wdgjsign,"wdgjsign");
		RequestCheckUtil::checkNotNull($this->wdgjtimestamp,"wdgjtimestamp");
		RequestCheckUtil::checkNotNull($this->wdgjversions,"wdgjversions");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
