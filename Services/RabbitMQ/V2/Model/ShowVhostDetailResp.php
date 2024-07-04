<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVhostDetailResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVhostDetailResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  Vhost名称。
    * tracing  是否开启消息轨迹（AMQP版本不涉及此字段）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'tracing' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  Vhost名称。
    * tracing  是否开启消息轨迹（AMQP版本不涉及此字段）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'tracing' => null
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
    * name  Vhost名称。
    * tracing  是否开启消息轨迹（AMQP版本不涉及此字段）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'tracing' => 'tracing'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  Vhost名称。
    * tracing  是否开启消息轨迹（AMQP版本不涉及此字段）
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'tracing' => 'setTracing'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  Vhost名称。
    * tracing  是否开启消息轨迹（AMQP版本不涉及此字段）
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'tracing' => 'getTracing'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tracing'] = isset($data['tracing']) ? $data['tracing'] : null;
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
    * Gets name
    *  Vhost名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name Vhost名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets tracing
    *  是否开启消息轨迹（AMQP版本不涉及此字段）
    *
    * @return bool|null
    */
    public function getTracing()
    {
        return $this->container['tracing'];
    }

    /**
    * Sets tracing
    *
    * @param bool|null $tracing 是否开启消息轨迹（AMQP版本不涉及此字段）
    *
    * @return $this
    */
    public function setTracing($tracing)
    {
        $this->container['tracing'] = $tracing;
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

