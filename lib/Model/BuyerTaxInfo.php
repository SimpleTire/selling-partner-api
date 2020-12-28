<?php
/**
 * BuyerTaxInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Evers\SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * OpenAPI spec version: v0
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
 * BuyerTaxInfo Class Doc Comment
 *
 * @category Class
 * @description Tax information about the buyer.
 * @package  Evers\SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuyerTaxInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuyerTaxInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_legal_name' => 'string',
        'taxing_region' => 'string',
        'tax_classifications' => '\Evers\SellingPartnerApi\Model\TaxClassification[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_legal_name' => null,
        'taxing_region' => null,
        'tax_classifications' => null
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
        'company_legal_name' => 'CompanyLegalName',
        'taxing_region' => 'TaxingRegion',
        'tax_classifications' => 'TaxClassifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_legal_name' => 'setCompanyLegalName',
        'taxing_region' => 'setTaxingRegion',
        'tax_classifications' => 'setTaxClassifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_legal_name' => 'getCompanyLegalName',
        'taxing_region' => 'getTaxingRegion',
        'tax_classifications' => 'getTaxClassifications'
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
        $this->container['company_legal_name'] = isset($data['company_legal_name']) ? $data['company_legal_name'] : null;
        $this->container['taxing_region'] = isset($data['taxing_region']) ? $data['taxing_region'] : null;
        $this->container['tax_classifications'] = isset($data['tax_classifications']) ? $data['tax_classifications'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets company_legal_name
     *
     * @return string
     */
    public function getCompanyLegalName()
    {
        return $this->container['company_legal_name'];
    }

    /**
     * Sets company_legal_name
     *
     * @param string $company_legal_name The legal name of the company.
     *
     * @return $this
     */
    public function setCompanyLegalName($company_legal_name)
    {
        $this->container['company_legal_name'] = $company_legal_name;

        return $this;
    }

    /**
     * Gets taxing_region
     *
     * @return string
     */
    public function getTaxingRegion()
    {
        return $this->container['taxing_region'];
    }

    /**
     * Sets taxing_region
     *
     * @param string $taxing_region The country or region imposing the tax.
     *
     * @return $this
     */
    public function setTaxingRegion($taxing_region)
    {
        $this->container['taxing_region'] = $taxing_region;

        return $this;
    }

    /**
     * Gets tax_classifications
     *
     * @return \Evers\SellingPartnerApi\Model\TaxClassification[]
     */
    public function getTaxClassifications()
    {
        return $this->container['tax_classifications'];
    }

    /**
     * Sets tax_classifications
     *
     * @param \Evers\SellingPartnerApi\Model\TaxClassification[] $tax_classifications A list of tax classifications that apply to the order.
     *
     * @return $this
     */
    public function setTaxClassifications($tax_classifications)
    {
        $this->container['tax_classifications'] = $tax_classifications;

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


