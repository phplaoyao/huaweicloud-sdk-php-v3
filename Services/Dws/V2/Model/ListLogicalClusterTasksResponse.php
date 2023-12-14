<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogicalClusterTasksResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogicalClusterTasksResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logicalClusterTasks  逻辑集群任务信息
    * count  逻辑集群任务总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logicalClusterTasks' => '\HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterTaskInfo[]',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logicalClusterTasks  逻辑集群任务信息
    * count  逻辑集群任务总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logicalClusterTasks' => null,
        'count' => 'int64'
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
    * logicalClusterTasks  逻辑集群任务信息
    * count  逻辑集群任务总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logicalClusterTasks' => 'logical_cluster_tasks',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logicalClusterTasks  逻辑集群任务信息
    * count  逻辑集群任务总数
    *
    * @var string[]
    */
    protected static $setters = [
            'logicalClusterTasks' => 'setLogicalClusterTasks',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logicalClusterTasks  逻辑集群任务信息
    * count  逻辑集群任务总数
    *
    * @var string[]
    */
    protected static $getters = [
            'logicalClusterTasks' => 'getLogicalClusterTasks',
            'count' => 'getCount'
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
        $this->container['logicalClusterTasks'] = isset($data['logicalClusterTasks']) ? $data['logicalClusterTasks'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    * Gets logicalClusterTasks
    *  逻辑集群任务信息
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterTaskInfo[]|null
    */
    public function getLogicalClusterTasks()
    {
        return $this->container['logicalClusterTasks'];
    }

    /**
    * Sets logicalClusterTasks
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\LogicalClusterTaskInfo[]|null $logicalClusterTasks 逻辑集群任务信息
    *
    * @return $this
    */
    public function setLogicalClusterTasks($logicalClusterTasks)
    {
        $this->container['logicalClusterTasks'] = $logicalClusterTasks;
        return $this;
    }

    /**
    * Gets count
    *  逻辑集群任务总数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 逻辑集群任务总数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

