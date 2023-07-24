<?php
/**
 * TOP API: t33hglzv00.wdgj.backpurchase.list.get request
 * 
 * @author auto create
 * @since 1.0, 2019.12.24
 */
class WdgjBackpurchaseListGetRequest
{
	/** 
	 * 查询开始时间 YYYY-MM-DD HH:mm:ss
	 **/
	private $begintime;
	
	/** 
	 * 查询结束时间 YYYY-MM-DD HH:mm:ss
	 **/
	private $endtime;
	
	/** 
	 * 页码
	 **/
	private $pageno;
	
	/** 
	 * 每页条数，取值范围 1 ~ 100
	 **/
	private $pagesize;
	
	/** 
	 * 单据查询标记 	1 已经查询 ，2已被取消查询标记
	 **/
	private $querymarkup;
	
	/** 
	 * 采购单号
	 **/
	private $relationno;
	
	/** 
	 * 采购退货单id
	 **/
	private $searchno;
	
	/** 
	 * 订单状态 0 待执行 1 已完成 2 被取消
	 **/
	private $searchstatus;
	
	/** 
	 * 查询时间类型 1：登记时间 2：发货时间 3：结算时间（不填或者填写其他值默认登记时间）
	 **/
	private $timetype;
	
	/** 
	 * 仓库编号
	 **/
	private $warehouseno;
	
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

	public function setQuerymarkup($querymarkup)
	{
		$this->querymarkup = $querymarkup;
		$this->apiParas["querymarkup"] = $querymarkup;
	}

	public function getQuerymarkup()
	{
		return $this->querymarkup;
	}

	public function setRelationno($relationno)
	{
		$this->relationno = $relationno;
		$this->apiParas["relationno"] = $relationno;
	}

	public function getRelationno()
	{
		return $this->relationno;
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

	public function setTimetype($timetype)
	{
		$this->timetype = $timetype;
		$this->apiParas["timetype"] = $timetype;
	}

	public function getTimetype()
	{
		return $this->timetype;
	}

	public function setWarehouseno($warehouseno)
	{
		$this->warehouseno = $warehouseno;
		$this->apiParas["warehouseno"] = $warehouseno;
	}

	public function getWarehouseno()
	{
		return $this->warehouseno;
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
		return "t33hglzv00.wdgj.backpurchase.list.get";
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
