<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudConnectionRoute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudConnectionRoute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云连接实例路由的ID。
    * cloudConnectionId  云连接实例的ID。
    * domainId  帐号ID。
    * projectId  网络实例的项目ID。
    * instanceId  路由条目下一跳指向的网络实例的ID。
    * type  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    * regionId  Region的ID。
    * destination  目的地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'cloudConnectionId' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'instanceId' => 'string',
            'type' => 'string',
            'regionId' => 'string',
            'destination' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云连接实例路由的ID。
    * cloudConnectionId  云连接实例的ID。
    * domainId  帐号ID。
    * projectId  网络实例的项目ID。
    * instanceId  路由条目下一跳指向的网络实例的ID。
    * type  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    * regionId  Region的ID。
    * destination  目的地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'cloudConnectionId' => null,
        'domainId' => null,
        'projectId' => null,
        'instanceId' => null,
        'type' => null,
        'regionId' => null,
        'destination' => null
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
    * id  云连接实例路由的ID。
    * cloudConnectionId  云连接实例的ID。
    * domainId  帐号ID。
    * projectId  网络实例的项目ID。
    * instanceId  路由条目下一跳指向的网络实例的ID。
    * type  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    * regionId  Region的ID。
    * destination  目的地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'cloudConnectionId' => 'cloud_connection_id',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'instanceId' => 'instance_id',
            'type' => 'type',
            'regionId' => 'region_id',
            'destination' => 'destination'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云连接实例路由的ID。
    * cloudConnectionId  云连接实例的ID。
    * domainId  帐号ID。
    * projectId  网络实例的项目ID。
    * instanceId  路由条目下一跳指向的网络实例的ID。
    * type  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    * regionId  Region的ID。
    * destination  目的地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'cloudConnectionId' => 'setCloudConnectionId',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'instanceId' => 'setInstanceId',
            'type' => 'setType',
            'regionId' => 'setRegionId',
            'destination' => 'setDestination'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云连接实例路由的ID。
    * cloudConnectionId  云连接实例的ID。
    * domainId  帐号ID。
    * projectId  网络实例的项目ID。
    * instanceId  路由条目下一跳指向的网络实例的ID。
    * type  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    * regionId  Region的ID。
    * destination  目的地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'cloudConnectionId' => 'getCloudConnectionId',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'instanceId' => 'getInstanceId',
            'type' => 'getType',
            'regionId' => 'getRegionId',
            'destination' => 'getDestination'
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
    const TYPE_VPC = 'vpc';
    const TYPE_VGW = 'vgw';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VPC,
            self::TYPE_VGW,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['cloudConnectionId'] = isset($data['cloudConnectionId']) ? $data['cloudConnectionId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudConnectionId']) && (mb_strlen($this->container['cloudConnectionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['cloudConnectionId']) && (mb_strlen($this->container['cloudConnectionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 3)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 2)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['destination']) && (mb_strlen($this->container['destination']) > 36)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['destination']) && (mb_strlen($this->container['destination']) < 0)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  云连接实例路由的ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 云连接实例路由的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets cloudConnectionId
    *  云连接实例的ID。
    *
    * @return string|null
    */
    public function getCloudConnectionId()
    {
        return $this->container['cloudConnectionId'];
    }

    /**
    * Sets cloudConnectionId
    *
    * @param string|null $cloudConnectionId 云连接实例的ID。
    *
    * @return $this
    */
    public function setCloudConnectionId($cloudConnectionId)
    {
        $this->container['cloudConnectionId'] = $cloudConnectionId;
        return $this;
    }

    /**
    * Gets domainId
    *  帐号ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 帐号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  网络实例的项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 网络实例的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceId
    *  路由条目下一跳指向的网络实例的ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 路由条目下一跳指向的网络实例的ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets type
    *  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets regionId
    *  Region的ID。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId Region的ID。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets destination
    *  目的地址。
    *
    * @return string|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string|null $destination 目的地址。
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
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

