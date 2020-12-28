<?php
/**
 * OrderMetricsInterval
 *
 * PHP version 5
 *
 * @category Class
 * @package  Evers\SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Sales
 *
 * The Selling Partner API for Sales provides APIs related to sales performance.
 *
 * OpenAPI spec version: v1
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
 * OrderMetricsInterval Class Doc Comment
 *
 * @category Class
 * @description Contains order metrics.
 * @package  Evers\SellingPartnerApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderMetricsInterval implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderMetricsInterval';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'interval' => 'string',
        'unit_count' => 'int',
        'order_item_count' => 'int',
        'order_count' => 'int',
        'average_unit_price' => '\Evers\SellingPartnerApi\Model\Money',
        'total_sales' => '\Evers\SellingPartnerApi\Model\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'interval' => null,
        'unit_count' => null,
        'order_item_count' => null,
        'order_count' => null,
        'average_unit_price' => null,
        'total_sales' => null
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
        'interval' => 'interval',
        'unit_count' => 'unitCount',
        'order_item_count' => 'orderItemCount',
        'order_count' => 'orderCount',
        'average_unit_price' => 'averageUnitPrice',
        'total_sales' => 'totalSales'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interval' => 'setInterval',
        'unit_count' => 'setUnitCount',
        'order_item_count' => 'setOrderItemCount',
        'order_count' => 'setOrderCount',
        'average_unit_price' => 'setAverageUnitPrice',
        'total_sales' => 'setTotalSales'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interval' => 'getInterval',
        'unit_count' => 'getUnitCount',
        'order_item_count' => 'getOrderItemCount',
        'order_count' => 'getOrderCount',
        'average_unit_price' => 'getAverageUnitPrice',
        'total_sales' => 'getTotalSales'
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
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['unit_count'] = isset($data['unit_count']) ? $data['unit_count'] : null;
        $this->container['order_item_count'] = isset($data['order_item_count']) ? $data['order_item_count'] : null;
        $this->container['order_count'] = isset($data['order_count']) ? $data['order_count'] : null;
        $this->container['average_unit_price'] = isset($data['average_unit_price']) ? $data['average_unit_price'] : null;
        $this->container['total_sales'] = isset($data['total_sales']) ? $data['total_sales'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
        if ($this->container['unit_count'] === null) {
            $invalidProperties[] = "'unit_count' can't be null";
        }
        if ($this->container['order_item_count'] === null) {
            $invalidProperties[] = "'order_item_count' can't be null";
        }
        if ($this->container['order_count'] === null) {
            $invalidProperties[] = "'order_count' can't be null";
        }
        if ($this->container['average_unit_price'] === null) {
            $invalidProperties[] = "'average_unit_price' can't be null";
        }
        if ($this->container['total_sales'] === null) {
            $invalidProperties[] = "'total_sales' can't be null";
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
     * Gets interval
     *
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string $interval The interval of time based on requested granularity (ex. Hour, Day, etc.) If this is the first or the last interval from the list, it might contain incomplete data if the requested interval doesn't align with the requested granularity (ex. request interval 2018-09-01T02:00:00Z--2018-09-04T19:00:00Z and granularity day will result in Sept 1st UTC day and Sept 4th UTC days having partial data).
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets unit_count
     *
     * @return int
     */
    public function getUnitCount()
    {
        return $this->container['unit_count'];
    }

    /**
     * Sets unit_count
     *
     * @param int $unit_count The number of units in orders based on the specified filters.
     *
     * @return $this
     */
    public function setUnitCount($unit_count)
    {
        $this->container['unit_count'] = $unit_count;

        return $this;
    }

    /**
     * Gets order_item_count
     *
     * @return int
     */
    public function getOrderItemCount()
    {
        return $this->container['order_item_count'];
    }

    /**
     * Sets order_item_count
     *
     * @param int $order_item_count The number of order items based on the specified filters.
     *
     * @return $this
     */
    public function setOrderItemCount($order_item_count)
    {
        $this->container['order_item_count'] = $order_item_count;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int $order_count The number of orders based on the specified filters.
     *
     * @return $this
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets average_unit_price
     *
     * @return \Evers\SellingPartnerApi\Model\Money
     */
    public function getAverageUnitPrice()
    {
        return $this->container['average_unit_price'];
    }

    /**
     * Sets average_unit_price
     *
     * @param \Evers\SellingPartnerApi\Model\Money $average_unit_price The average price for an item based on the specified filters. Formula is totalSales/unitCount.
     *
     * @return $this
     */
    public function setAverageUnitPrice($average_unit_price)
    {
        $this->container['average_unit_price'] = $average_unit_price;

        return $this;
    }

    /**
     * Gets total_sales
     *
     * @return \Evers\SellingPartnerApi\Model\Money
     */
    public function getTotalSales()
    {
        return $this->container['total_sales'];
    }

    /**
     * Sets total_sales
     *
     * @param \Evers\SellingPartnerApi\Model\Money $total_sales The total ordered product sales for all orders based on the specified filters.
     *
     * @return $this
     */
    public function setTotalSales($total_sales)
    {
        $this->container['total_sales'] = $total_sales;

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


