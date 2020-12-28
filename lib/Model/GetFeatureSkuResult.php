<?php
/**
 * GetFeatureSkuResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Evers\SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Evers\SellingPartnerApi\Model;

use \ArrayAccess;
use \Evers\SellingPartnerApi\ObjectSerializer;

/**
 * GetFeatureSkuResult Class Doc Comment
 *
 * @category Class
 * @description The payload for the getFeatureSKU operation.
 * @package  Evers\SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetFeatureSkuResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetFeatureSkuResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
        'feature_name' => 'string',
        'is_eligible' => 'bool',
        'ineligible_reasons' => 'string[]',
        'sku_info' => '\Evers\SellingPartnerApi\Model\FeatureSku'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
        'feature_name' => null,
        'is_eligible' => null,
        'ineligible_reasons' => null,
        'sku_info' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'feature_name' => 'featureName',
        'is_eligible' => 'isEligible',
        'ineligible_reasons' => 'ineligibleReasons',
        'sku_info' => 'skuInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'feature_name' => 'setFeatureName',
        'is_eligible' => 'setIsEligible',
        'ineligible_reasons' => 'setIneligibleReasons',
        'sku_info' => 'setSkuInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'feature_name' => 'getFeatureName',
        'is_eligible' => 'getIsEligible',
        'ineligible_reasons' => 'getIneligibleReasons',
        'sku_info' => 'getSkuInfo'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['feature_name'] = isset($data['feature_name']) ? $data['feature_name'] : null;
        $this->container['is_eligible'] = isset($data['is_eligible']) ? $data['is_eligible'] : null;
        $this->container['ineligible_reasons'] = isset($data['ineligible_reasons']) ? $data['ineligible_reasons'] : null;
        $this->container['sku_info'] = isset($data['sku_info']) ? $data['sku_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['feature_name'] === null) {
            $invalidProperties[] = "'feature_name' can't be null";
        }
        if ($this->container['is_eligible'] === null) {
            $invalidProperties[] = "'is_eligible' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id The requested marketplace.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets feature_name
     *
     * @return string
     */
    public function getFeatureName()
    {
        return $this->container['feature_name'];
    }

    /**
     * Sets feature_name
     *
     * @param string $feature_name The name of the feature.
     *
     * @return $this
     */
    public function setFeatureName($feature_name)
    {
        $this->container['feature_name'] = $feature_name;

        return $this;
    }

    /**
     * Gets is_eligible
     *
     * @return bool
     */
    public function getIsEligible()
    {
        return $this->container['is_eligible'];
    }

    /**
     * Sets is_eligible
     *
     * @param bool $is_eligible When true, the seller SKU is eligible for the requested feature.
     *
     * @return $this
     */
    public function setIsEligible($is_eligible)
    {
        $this->container['is_eligible'] = $is_eligible;

        return $this;
    }

    /**
     * Gets ineligible_reasons
     *
     * @return string[]
     */
    public function getIneligibleReasons()
    {
        return $this->container['ineligible_reasons'];
    }

    /**
     * Sets ineligible_reasons
     *
     * @param string[] $ineligible_reasons A list of one or more reasons that the seller SKU is ineligibile for the feature.  Possible values: * MERCHANT_NOT_ENROLLED - The merchant isn't enrolled for the feature. * SKU_NOT_ELIGIBLE - The SKU doesn't reside in a warehouse that supports the feature. * INVALID_SKU - There is an issue with the SKU provided.
     *
     * @return $this
     */
    public function setIneligibleReasons($ineligible_reasons)
    {
        $this->container['ineligible_reasons'] = $ineligible_reasons;

        return $this;
    }

    /**
     * Gets sku_info
     *
     * @return \Evers\SellingPartnerApi\Model\FeatureSku
     */
    public function getSkuInfo()
    {
        return $this->container['sku_info'];
    }

    /**
     * Sets sku_info
     *
     * @param \Evers\SellingPartnerApi\Model\FeatureSku $sku_info Information about the SKU, including the count available, identifiers, and a list of overlapping SKUs that share the same inventory pool.
     *
     * @return $this
     */
    public function setSkuInfo($sku_info)
    {
        $this->container['sku_info'] = $sku_info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


