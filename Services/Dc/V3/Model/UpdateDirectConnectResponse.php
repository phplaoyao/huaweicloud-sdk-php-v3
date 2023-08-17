<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDirectConnectResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDirectConnectResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  操作请求ID
    * directConnect  directConnect
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'directConnect' => '\HuaweiCloud\SDK\Dc\V3\Model\DirectConnect'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  操作请求ID
    * directConnect  directConnect
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'directConnect' => null
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
    * requestId  操作请求ID
    * directConnect  directConnect
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'directConnect' => 'direct_connect'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  操作请求ID
    * directConnect  directConnect
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'directConnect' => 'setDirectConnect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  操作请求ID
    * directConnect  directConnect
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'directConnect' => 'getDirectConnect'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['directConnect'] = isset($data['directConnect']) ? $data['directConnect'] : null;
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
    * Gets requestId
    *  操作请求ID
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 操作请求ID
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets directConnect
    *  directConnect
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\DirectConnect|null
    */
    public function getDirectConnect()
    {
        return $this->container['directConnect'];
    }

    /**
    * Sets directConnect
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\DirectConnect|null $directConnect directConnect
    *
    * @return $this
    */
    public function setDirectConnect($directConnect)
    {
        $this->container['directConnect'] = $directConnect;
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

