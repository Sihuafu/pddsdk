<?php
namespace Com\Pdd\Pop\Sdk\Api\Request;

use Com\Pdd\Pop\Sdk\PopBaseHttpRequest;
use Com\Pdd\Pop\Sdk\PopBaseJsonEntity;

class PddDdkOauthGoodsDetailRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(String, "custom_parameters")
	*/
	private $customParameters;

	/**
	* @JsonProperty(Integer, "goods_img_type")
	*/
	private $goodsImgType;

	/**
	* @JsonProperty(String, "goods_sign")
	*/
	private $goodsSign;

	/**
	* @JsonProperty(Boolean, "need_sku_info")
	*/
	private $needSkuInfo;

	/**
	* @JsonProperty(String, "pid")
	*/
	private $pid;

	/**
	* @JsonProperty(String, "search_id")
	*/
	private $searchId;

	/**
	* @JsonProperty(Long, "zs_duo_id")
	*/
	private $zsDuoId;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "custom_parameters", $this->customParameters);
		$this->setUserParam($params, "goods_img_type", $this->goodsImgType);
		$this->setUserParam($params, "goods_sign", $this->goodsSign);
		$this->setUserParam($params, "need_sku_info", $this->needSkuInfo);
		$this->setUserParam($params, "pid", $this->pid);
		$this->setUserParam($params, "search_id", $this->searchId);
		$this->setUserParam($params, "zs_duo_id", $this->zsDuoId);

	}

	public function getVersion()
	{
		return "V1";
	}

	public function getDataType()
	{
		return "JSON";
	}

	public function getType()
	{
		return "pdd.ddk.oauth.goods.detail";
	}

	public function setCustomParameters($customParameters)
	{
		$this->customParameters = $customParameters;
	}

	public function setGoodsImgType($goodsImgType)
	{
		$this->goodsImgType = $goodsImgType;
	}

	public function setGoodsSign($goodsSign)
	{
		$this->goodsSign = $goodsSign;
	}

	public function setNeedSkuInfo($needSkuInfo)
	{
		$this->needSkuInfo = $needSkuInfo;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
	}

	public function setSearchId($searchId)
	{
		$this->searchId = $searchId;
	}

	public function setZsDuoId($zsDuoId)
	{
		$this->zsDuoId = $zsDuoId;
	}

}
