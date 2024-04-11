<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomizedFieldsVOList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomizedFieldsVOList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  自定义项类型。TABLE(表自定义项)、ATTRIBUTE(属性自定义项)、SUBJECT(主题自定义项)、METRIC(业务指标自定义项)。
    * fields  自定义项列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'fields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CustomizedFieldsVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  自定义项类型。TABLE(表自定义项)、ATTRIBUTE(属性自定义项)、SUBJECT(主题自定义项)、METRIC(业务指标自定义项)。
    * fields  自定义项列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'fields' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * type  自定义项类型。TABLE(表自定义项)、ATTRIBUTE(属性自定义项)、SUBJECT(主题自定义项)、METRIC(业务指标自定义项)。
    * fields  自定义项列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'fields' => 'fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  自定义项类型。TABLE(表自定义项)、ATTRIBUTE(属性自定义项)、SUBJECT(主题自定义项)、METRIC(业务指标自定义项)。
    * fields  自定义项列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'fields' => 'setFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  自定义项类型。TABLE(表自定义项)、ATTRIBUTE(属性自定义项)、SUBJECT(主题自定义项)、METRIC(业务指标自定义项)。
    * fields  自定义项列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'fields' => 'getFields'
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
        return self::$openAPIModelName;
    }
    const TYPE_TABLE = 'TABLE';
    const TYPE_ATTRIBUTE = 'ATTRIBUTE';
    const TYPE_SUBJECT = 'SUBJECT';
    const TYPE_METRIC = 'METRIC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TABLE,
            self::TYPE_ATTRIBUTE,
            self::TYPE_SUBJECT,
            self::TYPE_METRIC,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  自定义项类型。TABLE(表自定义项)、ATTRIBUTE(属性自定义项)、SUBJECT(主题自定义项)、METRIC(业务指标自定义项)。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 自定义项类型。TABLE(表自定义项)、ATTRIBUTE(属性自定义项)、SUBJECT(主题自定义项)、METRIC(业务指标自定义项)。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets fields
    *  自定义项列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CustomizedFieldsVO[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CustomizedFieldsVO[]|null $fields 自定义项列表。
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

