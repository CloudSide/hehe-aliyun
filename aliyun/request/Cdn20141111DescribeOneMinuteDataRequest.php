<?php
/**
 * TOP API: cdn.aliyuncs.com.DescribeOneMinuteData.2014-11-11 request
 * 
 * @author auto create
 * @since 1.0, 2015.04.27
 */
class Cdn20141111DescribeOneMinuteDataRequest
{
	/** 
	 * GMT分钟ISO格式YYYY-MM-DDThh:mmZ
	 **/
	private $dataTime;
	
	/** 
	 * 要查询的域名
	 **/
	private $domainName;
	
	/**
	 * 仅用于渠道商发起API调用时，指定访问的资源拥有者的ID
	 **/
	private $ownerId;
	
	/**
	 *仅用于渠道商发起API调用时，指定访问的资源拥有者的账号
	 **/
    private  $ownerAccount;
    
    /**
     *API调用者试图通过API调用来访问别人拥有但已经授权给他的资源时，
     *通过使用该参数来声明此次操作涉及到的资源是谁名下的,该参数仅官网用户可用
     **/
    private $resourceOwnerAccount;
    
	private $apiParas = array();
	
	public function setDataTime($dataTime)
	{
		$this->dataTime = $dataTime;
		$this->apiParas["DataTime"] = $dataTime;
	}

	public function getDataTime()
	{
		return $this->dataTime;
	}

	public function setDomainName($domainName)
	{
		$this->domainName = $domainName;
		$this->apiParas["DomainName"] = $domainName;
	}

	public function getDomainName()
	{
		return $this->domainName;
	}

	
	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["OwnerId"] = $ownerId;
	}
	
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	
	public function setOwnerAccount($ownerAccount)
	{
		$this->ownerAccount = $ownerAccount;
		$this->apiParas["OwnerAccount"] = $ownerAccount;
	}
	
	public function getOwnerAccount()
	{
		return $this->ownerAccount;
	}
	
	public function setResourceOwnerAccount($resourceOwnerAccount)
	{
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->apiParas["ResourceOwnerAccount"] = $resourceOwnerAccount;
	}
	
	public function getResourceOwnerAccount()
	{
		return $this->resourceOwnerAccount;
	}

	public function getApiMethodName()
	{
		return "cdn.aliyuncs.com.DescribeOneMinuteData.2014-11-11";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->domainName,"domainName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}