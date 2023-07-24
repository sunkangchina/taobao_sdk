<?php
/**
 * TOP API: t33hglzv00.wdgj.stockin.list.get request
 * 
 * @author auto create
 * @since 1.0, 2018.10.24
 */
class WdgjStockinListGetRequest
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
	 * 单据类型（'2 （采购入库，采购入库冲销） 3退货入库 5库存盘点 9调拨入库 10 生产入库'）
	 **/
	private $operationtype;
	
	/** 
	 * 0 API导入商品 0 其它入库 0 其它入库冲销 0 组装拆卸 0 组装拆卸冲销 2 采购入库 2 采购入库冲销 3 退货入库 3 退货入库冲销 5 库存盘点 5 库存盘点冲销 9 调拨入库 9 调拨入库冲销 10 生产入库 10 生产退料入库 12 其它入库 12 其它入库冲销
	 **/
	private $ordertype;
	
	/** 
	 * 页码
	 **/
	private $pageno;
	
	/** 
	 * 每页条数，取值范围 1 ~ 100
	 **/
	private $pagesize;
	
	/** 
	 * 单据查询标记	1 已经查询 2 被取消查询标记
	 **/
	private $querymarkup;
	
	/** 
	 * 入库单号
	 **/
	private $searchno;
	
	/** 
	 * 0 待审核 1 已审核 2 已取消'
	 **/
	private $searchstatus;
	
	/** 
	 * 0查询未归档数据，1查询归档数据（不填或者填写其他值默认查询未归档数据）
	 **/
	private $searchtype;
	
	/** 
	 * 时间类型（0：表示登记时间，1：表示审核时间）
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

	public function setOperationtype($operationtype)
	{
		$this->operationtype = $operationtype;
		$this->apiParas["operationtype"] = $operationtype;
	}

	public function getOperationtype()
	{
		return $this->operationtype;
	}

	public function setOrdertype($ordertype)
	{
		$this->ordertype = $ordertype;
		$this->apiParas["ordertype"] = $ordertype;
	}

	public function getOrdertype()
	{
		return $this->ordertype;
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
		return "t33hglzv00.wdgj.stockin.list.get";
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
