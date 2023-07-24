<?php
/**
 * TOP API: taobao.jushita.jdp.user.delete request
 * 
 * @author auto create
 * @since 1.0, 2023.02.09
 */
class JushitaJdpUserDeleteRequest
{
	/** 
	 * 要删除用户的昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.jdp.user.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
