<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScalingV2PoliciesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScalingV2PoliciesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  租户标识。
    * scalingResourceId  伸缩组ID。
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyType  策略类型：  - 告警策略：ALARM - 定时策略：SCHEDULED - 周期策略：RECURRENCE
    * scalingPolicyId  伸缩策略ID。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'scalingResourceId' => 'string',
            'scalingPolicyName' => 'string',
            'scalingPolicyType' => 'string',
            'scalingPolicyId' => 'string',
            'startNumber' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  租户标识。
    * scalingResourceId  伸缩组ID。
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyType  策略类型：  - 告警策略：ALARM - 定时策略：SCHEDULED - 周期策略：RECURRENCE
    * scalingPolicyId  伸缩策略ID。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'scalingResourceId' => null,
        'scalingPolicyName' => null,
        'scalingPolicyType' => null,
        'scalingPolicyId' => null,
        'startNumber' => 'int32',
        'limit' => null
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
    * projectId  租户标识。
    * scalingResourceId  伸缩组ID。
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyType  策略类型：  - 告警策略：ALARM - 定时策略：SCHEDULED - 周期策略：RECURRENCE
    * scalingPolicyId  伸缩策略ID。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'scalingResourceId' => 'scaling_resource_id',
            'scalingPolicyName' => 'scaling_policy_name',
            'scalingPolicyType' => 'scaling_policy_type',
            'scalingPolicyId' => 'scaling_policy_id',
            'startNumber' => 'start_number',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  租户标识。
    * scalingResourceId  伸缩组ID。
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyType  策略类型：  - 告警策略：ALARM - 定时策略：SCHEDULED - 周期策略：RECURRENCE
    * scalingPolicyId  伸缩策略ID。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'scalingResourceId' => 'setScalingResourceId',
            'scalingPolicyName' => 'setScalingPolicyName',
            'scalingPolicyType' => 'setScalingPolicyType',
            'scalingPolicyId' => 'setScalingPolicyId',
            'startNumber' => 'setStartNumber',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  租户标识。
    * scalingResourceId  伸缩组ID。
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyType  策略类型：  - 告警策略：ALARM - 定时策略：SCHEDULED - 周期策略：RECURRENCE
    * scalingPolicyId  伸缩策略ID。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'scalingResourceId' => 'getScalingResourceId',
            'scalingPolicyName' => 'getScalingPolicyName',
            'scalingPolicyType' => 'getScalingPolicyType',
            'scalingPolicyId' => 'getScalingPolicyId',
            'startNumber' => 'getStartNumber',
            'limit' => 'getLimit'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['scalingResourceId'] = isset($data['scalingResourceId']) ? $data['scalingResourceId'] : null;
        $this->container['scalingPolicyName'] = isset($data['scalingPolicyName']) ? $data['scalingPolicyName'] : null;
        $this->container['scalingPolicyType'] = isset($data['scalingPolicyType']) ? $data['scalingPolicyType'] : null;
        $this->container['scalingPolicyId'] = isset($data['scalingPolicyId']) ? $data['scalingPolicyId'] : null;
        $this->container['startNumber'] = isset($data['startNumber']) ? $data['startNumber'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['scalingResourceId'] === null) {
            $invalidProperties[] = "'scalingResourceId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingResourceId'])) {
                $invalidProperties[] = "invalid value for 'scalingResourceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['scalingPolicyName']) && (mb_strlen($this->container['scalingPolicyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'scalingPolicyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scalingPolicyName']) && (mb_strlen($this->container['scalingPolicyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scalingPolicyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scalingPolicyId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingPolicyId'])) {
                $invalidProperties[] = "invalid value for 'scalingPolicyId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets projectId
    *  租户标识。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 租户标识。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets scalingResourceId
    *  伸缩组ID。
    *
    * @return string
    */
    public function getScalingResourceId()
    {
        return $this->container['scalingResourceId'];
    }

    /**
    * Sets scalingResourceId
    *
    * @param string $scalingResourceId 伸缩组ID。
    *
    * @return $this
    */
    public function setScalingResourceId($scalingResourceId)
    {
        $this->container['scalingResourceId'] = $scalingResourceId;
        return $this;
    }

    /**
    * Gets scalingPolicyName
    *  伸缩策略名称。
    *
    * @return string|null
    */
    public function getScalingPolicyName()
    {
        return $this->container['scalingPolicyName'];
    }

    /**
    * Sets scalingPolicyName
    *
    * @param string|null $scalingPolicyName 伸缩策略名称。
    *
    * @return $this
    */
    public function setScalingPolicyName($scalingPolicyName)
    {
        $this->container['scalingPolicyName'] = $scalingPolicyName;
        return $this;
    }

    /**
    * Gets scalingPolicyType
    *  策略类型：  - 告警策略：ALARM - 定时策略：SCHEDULED - 周期策略：RECURRENCE
    *
    * @return string|null
    */
    public function getScalingPolicyType()
    {
        return $this->container['scalingPolicyType'];
    }

    /**
    * Sets scalingPolicyType
    *
    * @param string|null $scalingPolicyType 策略类型：  - 告警策略：ALARM - 定时策略：SCHEDULED - 周期策略：RECURRENCE
    *
    * @return $this
    */
    public function setScalingPolicyType($scalingPolicyType)
    {
        $this->container['scalingPolicyType'] = $scalingPolicyType;
        return $this;
    }

    /**
    * Gets scalingPolicyId
    *  伸缩策略ID。
    *
    * @return string|null
    */
    public function getScalingPolicyId()
    {
        return $this->container['scalingPolicyId'];
    }

    /**
    * Sets scalingPolicyId
    *
    * @param string|null $scalingPolicyId 伸缩策略ID。
    *
    * @return $this
    */
    public function setScalingPolicyId($scalingPolicyId)
    {
        $this->container['scalingPolicyId'] = $scalingPolicyId;
        return $this;
    }

    /**
    * Gets startNumber
    *  查询的起始行号，默认为0。
    *
    * @return int|null
    */
    public function getStartNumber()
    {
        return $this->container['startNumber'];
    }

    /**
    * Sets startNumber
    *
    * @param int|null $startNumber 查询的起始行号，默认为0。
    *
    * @return $this
    */
    public function setStartNumber($startNumber)
    {
        $this->container['startNumber'] = $startNumber;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数，默认20，最大100。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询记录数，默认20，最大100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

