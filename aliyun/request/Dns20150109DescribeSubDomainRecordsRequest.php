<?php
/**
 * TOP API: dns.aliyuncs.com.DescribeSubDomainRecords.2015-01-09 request
 * 
 * @author auto create
 * @since 1.0, 2015.11.16
 */
class Dns20150109DescribeSubDomainRecordsRequest
{
	/** 
	 * 当前页数，起始值为1，默认为1
	 **/
	private $pageNumber;
	
	/** 
	 * 分页查询时设置的每页行数，最大值500，默认为20
	 **/
	private $pageSize;
	
	/** 
	 * 需要获取解析列表的子域名
	 **/
	private $subDomain;
	
	/** 
	 * 解析类型的关键字，按照全匹配搜索，不区分大小写
	 **/
	private $type;
	
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
	
	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["PageNumber"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["PageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setSubDomain($subDomain)
	{
		$this->subDomain = $subDomain;
		$this->apiParas["SubDomain"] = $subDomain;
	}

	public function getSubDomain()
	{
		return $this->subDomain;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["Type"] = $type;
	}

	public function getType()
	{
		return $this->type;
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
		return "dns.aliyuncs.com.DescribeSubDomainRecords.2015-01-09";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->subDomain,"subDomain");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}