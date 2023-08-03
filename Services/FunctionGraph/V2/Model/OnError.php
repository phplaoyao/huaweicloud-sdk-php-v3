<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OnError implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OnError';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * error  错误匹配表达式，用来过滤需要处理的异常
    * transition  下一步骤节点ID
    * retryRef  重试策略名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'error' => 'string',
            'transition' => 'string',
            'retryRef' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * error  错误匹配表达式，用来过滤需要处理的异常
    * transition  下一步骤节点ID
    * retryRef  重试策略名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'error' => null,
        'transition' => null,
        'retryRef' => null
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
    * error  错误匹配表达式，用来过滤需要处理的异常
    * transition  下一步骤节点ID
    * retryRef  重试策略名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'error' => 'error',
            'transition' => 'transition',
            'retryRef' => 'retry_ref'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * error  错误匹配表达式，用来过滤需要处理的异常
    * transition  下一步骤节点ID
    * retryRef  重试策略名称
    *
    * @var string[]
    */
    protected static $setters = [
            'error' => 'setError',
            'transition' => 'setTransition',
            'retryRef' => 'setRetryRef'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * error  错误匹配表达式，用来过滤需要处理的异常
    * transition  下一步骤节点ID
    * retryRef  重试策略名称
    *
    * @var string[]
    */
    protected static $getters = [
            'error' => 'getError',
            'transition' => 'getTransition',
            'retryRef' => 'getRetryRef'
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
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['transition'] = isset($data['transition']) ? $data['transition'] : null;
        $this->container['retryRef'] = isset($data['retryRef']) ? $data['retryRef'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) > 256)) {
                $invalidProperties[] = "invalid value for 'error', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) < 0)) {
                $invalidProperties[] = "invalid value for 'error', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['transition']) && (mb_strlen($this->container['transition']) > 256)) {
                $invalidProperties[] = "invalid value for 'transition', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['transition']) && (mb_strlen($this->container['transition']) < 0)) {
                $invalidProperties[] = "invalid value for 'transition', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['retryRef']) && (mb_strlen($this->container['retryRef']) > 256)) {
                $invalidProperties[] = "invalid value for 'retryRef', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['retryRef']) && (mb_strlen($this->container['retryRef']) < 0)) {
                $invalidProperties[] = "invalid value for 'retryRef', the character length must be bigger than or equal to 0.";
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
    * Gets error
    *  错误匹配表达式，用来过滤需要处理的异常
    *
    * @return string|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param string|null $error 错误匹配表达式，用来过滤需要处理的异常
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets transition
    *  下一步骤节点ID
    *
    * @return string|null
    */
    public function getTransition()
    {
        return $this->container['transition'];
    }

    /**
    * Sets transition
    *
    * @param string|null $transition 下一步骤节点ID
    *
    * @return $this
    */
    public function setTransition($transition)
    {
        $this->container['transition'] = $transition;
        return $this;
    }

    /**
    * Gets retryRef
    *  重试策略名称
    *
    * @return string|null
    */
    public function getRetryRef()
    {
        return $this->container['retryRef'];
    }

    /**
    * Sets retryRef
    *
    * @param string|null $retryRef 重试策略名称
    *
    * @return $this
    */
    public function setRetryRef($retryRef)
    {
        $this->container['retryRef'] = $retryRef;
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

