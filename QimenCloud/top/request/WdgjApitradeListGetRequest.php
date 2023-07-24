<?php
/**
 * TOP API: t33hglzv00.wdgj.apitrade.list.get request
 * 
 * @author auto create
 * @since 1.0, 2020.01.09
 */
class WdgjApitradeListGetRequest
{
	/** 
	 * 开始时间
	 **/
	private $begintime;
	
	/** 
	 * 结束时间
	 **/
	private $endtime;
	
	/** 
	 * 发货状态：0 待同步 1 就绪  2 同步失败  3 待校验 4 成功 5 取消 8 在线下单等确认 9表示拆单未出库  10表示拆单出库 11表示拆单发货失败
	 **/
	private $operationtype;
	
	/** 
	 * 页码
	 **/
	private $pageno;
	
	/** 
	 * 每页条数，取值范围 1 ~ 100
	 **/
	private $pagesize;
	
	/** 
	 * 店铺ID
	 **/
	private $searchname;
	
	/** 
	 * 原始单编号
	 **/
	private $searchno;
	
	/** 
	 * 原始单状态：0 待过滤 1 等扫描 2 待递交 3 放弃 4   已递交  11 退款  13 部份退款
	 **/
	private $searchstatus;
	
	/** 
	 * 0：未归档原始单，1：已归档原始单
	 **/
	private $searchtype;
	
	/** 
	 * 查询时间类型（0：下载时间 1：成交时间(索引字段 可以缩减查询时间) 2：支付时间 3：发货时间 , 不填, 按订单成交时间查询）
	 **/
	private $timetype;
	
	/** 
	 * 长期有效的授权码，调用OpenApi时需要的主要验证
	 **/
	private $wdgjaccesstoken;
	
	/** 
	 * 创建应用接入时申请的appkey
	 **/
	private $wdgjappkey;
	
	/** 
	 * 数据返回值格式xml/json（默认xml）
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
	 * 协议版本号（1.1）
	 **/
	private $wdgjversions;
	
	private $apiParas = array();
	
	public function setBegintime($begintime)
	{
		$this->begintime = $begintime;
		$this->apiParas["begintime"] = $begintime;
	}

	public function getBegintime()
	{
		return $this->begintime;
	}

	public function setEndtime($endtime)
	{
		$this->endtime = $endtime;
		$this->apiParas["endtime"] = $endtime;
	}

	public function getEndtime()
	{
		return $this->endtime;
	}

	public function setOperationtype($operationtype)
	{
		$this->operationtype = $operationtype;
		$this->apiParas["operationtype"] = $operationtype;
	}

	public function getOperationtype()
	{
		return $this->operationtype;
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

	public function setSearchstatus($searchstatus)
	{
		$this->searchstatus = $searchstatus;
		$this->apiParas["searchstatus"] = $searchstatus;
	}

	public function getSearchstatus()
	{
		return $this->searchstatus;
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

	public function setTimetype($timetype)
	{
		$this->timetype = $timetype;
		$this->apiParas["timetype"] = $timetype;
	}

	public function getTimetype()
	{
		return $this->timetype;
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
		return "t33hglzv00.wdgj.apitrade.list.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->begintime,"begintime");
		RequestCheckUtil::checkNotNull($this->endtime,"endtime");
		RequestCheckUtil::checkNotNull($this->pageno,"pageno");
		RequestCheckUtil::checkNotNull($this->pagesize,"pagesize");
		RequestCheckUtil::checkNotNull($this->searchtype,"searchtype");
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
