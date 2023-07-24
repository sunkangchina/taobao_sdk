<?php
/**
 * TOP API: alibaba.nlp.review.analysis.ecommerce request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AlibabaNlpReviewAnalysisEcommerceRequest
{
	/** 
	 * 要处理的文本
	 **/
	private $text;
	
	private $apiParas = array();
	
	public function setText($text)
	{
		$this->text = $text;
		$this->apiParas["text"] = $text;
	}

	public function getText()
	{
		return $this->text;
	}

	public function getApiMethodName()
	{
		return "alibaba.nlp.review.analysis.ecommerce";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->text,"text");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
