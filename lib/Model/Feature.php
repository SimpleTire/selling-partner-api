<?php
/**
 * Feature
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
 * Feature Class Doc Comment
 *
 * @category Class
 * @description A Multi-Channel Fulfillment feature.
 * @package  Evers\SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Feature implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Feature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'feature_name' => 'string',
        'feature_description' => 'string',
        'seller_eligible' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'feature_name' => null,
        'feature_description' => null,
        'seller_eligible' => null
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
        'feature_name' => 'featureName',
        'feature_description' => 'featureDescription',
        'seller_eligible' => 'sellerEligible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feature_name' => 'setFeatureName',
        'feature_description' => 'setFeatureDescription',
        'seller_eligible' => 'setSellerEligible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feature_name' => 'getFeatureName',
        'feature_description' => 'getFeatureDescription',
        'seller_eligible' => 'getSellerEligible'
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
        $this->container['feature_name'] = isset($data['feature_name']) ? $data['feature_name'] : null;
        $this->container['feature_description'] = isset($data['feature_description']) ? $data['feature_description'] : null;
        $this->container['seller_eligible'] = isset($data['seller_eligible']) ? $data['seller_eligible'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['feature_name'] === null) {
            $invalidProperties[] = "'feature_name' can't be null";
        }
        if ($this->container['feature_description'] === null) {
            $invalidProperties[] = "'feature_description' can't be null";
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
     * @param string $feature_name The feature name.
     *
     * @return $this
     */
    public function setFeatureName($feature_name)
    {
        $this->container['feature_name'] = $feature_name;

        return $this;
    }

    /**
     * Gets feature_description
     *
     * @return string
     */
    public function getFeatureDescription()
    {
        return $this->container['feature_description'];
    }

    /**
     * Sets feature_description
     *
     * @param string $feature_description The feature description.
     *
     * @return $this
     */
    public function setFeatureDescription($feature_description)
    {
        $this->container['feature_description'] = $feature_description;

        return $this;
    }

    /**
     * Gets seller_eligible
     *
     * @return bool
     */
    public function getSellerEligible()
    {
        return $this->container['seller_eligible'];
    }

    /**
     * Sets seller_eligible
     *
     * @param bool $seller_eligible When true, indicates that the seller is eligible to use the feature.
     *
     * @return $this
     */
    public function setSellerEligible($seller_eligible)
    {
        $this->container['seller_eligible'] = $seller_eligible;

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


