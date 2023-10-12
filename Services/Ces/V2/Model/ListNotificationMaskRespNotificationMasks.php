<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNotificationMaskRespNotificationMasks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNotificationMaskResp_notification_masks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * notificationMaskId  屏蔽规则ID
    * maskName  屏蔽规则名称，只能为字母、数字、汉字、-、_，最大长度为64
    * relationType  relationType
    * relationId  关联编号
    * resources  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    * maskStatus  maskStatus
    * maskType  maskType
    * startDate  屏蔽起始日期，yyyy-MM-dd。
    * startTime  屏蔽起始时间，HH:mm:ss。
    * endDate  屏蔽截止日期，yyyy-MM-dd。
    * endTime  屏蔽截止时间，HH:mm:ss。
    * policies  告警策略列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'notificationMaskId' => 'string',
            'maskName' => 'string',
            'relationType' => '\HuaweiCloud\SDK\Ces\V2\Model\RelationType',
            'relationId' => 'string',
            'resources' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourceCategory[]',
            'maskStatus' => '\HuaweiCloud\SDK\Ces\V2\Model\MaskStatus',
            'maskType' => '\HuaweiCloud\SDK\Ces\V2\Model\MaskType',
            'startDate' => '\DateTime',
            'startTime' => 'string',
            'endDate' => '\DateTime',
            'endTime' => 'string',
            'policies' => '\HuaweiCloud\SDK\Ces\V2\Model\PoliciesInListResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * notificationMaskId  屏蔽规则ID
    * maskName  屏蔽规则名称，只能为字母、数字、汉字、-、_，最大长度为64
    * relationType  relationType
    * relationId  关联编号
    * resources  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    * maskStatus  maskStatus
    * maskType  maskType
    * startDate  屏蔽起始日期，yyyy-MM-dd。
    * startTime  屏蔽起始时间，HH:mm:ss。
    * endDate  屏蔽截止日期，yyyy-MM-dd。
    * endTime  屏蔽截止时间，HH:mm:ss。
    * policies  告警策略列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'notificationMaskId' => null,
        'maskName' => null,
        'relationType' => null,
        'relationId' => null,
        'resources' => null,
        'maskStatus' => null,
        'maskType' => null,
        'startDate' => 'date',
        'startTime' => null,
        'endDate' => 'date',
        'endTime' => null,
        'policies' => null
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
    * notificationMaskId  屏蔽规则ID
    * maskName  屏蔽规则名称，只能为字母、数字、汉字、-、_，最大长度为64
    * relationType  relationType
    * relationId  关联编号
    * resources  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    * maskStatus  maskStatus
    * maskType  maskType
    * startDate  屏蔽起始日期，yyyy-MM-dd。
    * startTime  屏蔽起始时间，HH:mm:ss。
    * endDate  屏蔽截止日期，yyyy-MM-dd。
    * endTime  屏蔽截止时间，HH:mm:ss。
    * policies  告警策略列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'notificationMaskId' => 'notification_mask_id',
            'maskName' => 'mask_name',
            'relationType' => 'relation_type',
            'relationId' => 'relation_id',
            'resources' => 'resources',
            'maskStatus' => 'mask_status',
            'maskType' => 'mask_type',
            'startDate' => 'start_date',
            'startTime' => 'start_time',
            'endDate' => 'end_date',
            'endTime' => 'end_time',
            'policies' => 'policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * notificationMaskId  屏蔽规则ID
    * maskName  屏蔽规则名称，只能为字母、数字、汉字、-、_，最大长度为64
    * relationType  relationType
    * relationId  关联编号
    * resources  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    * maskStatus  maskStatus
    * maskType  maskType
    * startDate  屏蔽起始日期，yyyy-MM-dd。
    * startTime  屏蔽起始时间，HH:mm:ss。
    * endDate  屏蔽截止日期，yyyy-MM-dd。
    * endTime  屏蔽截止时间，HH:mm:ss。
    * policies  告警策略列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'notificationMaskId' => 'setNotificationMaskId',
            'maskName' => 'setMaskName',
            'relationType' => 'setRelationType',
            'relationId' => 'setRelationId',
            'resources' => 'setResources',
            'maskStatus' => 'setMaskStatus',
            'maskType' => 'setMaskType',
            'startDate' => 'setStartDate',
            'startTime' => 'setStartTime',
            'endDate' => 'setEndDate',
            'endTime' => 'setEndTime',
            'policies' => 'setPolicies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * notificationMaskId  屏蔽规则ID
    * maskName  屏蔽规则名称，只能为字母、数字、汉字、-、_，最大长度为64
    * relationType  relationType
    * relationId  关联编号
    * resources  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    * maskStatus  maskStatus
    * maskType  maskType
    * startDate  屏蔽起始日期，yyyy-MM-dd。
    * startTime  屏蔽起始时间，HH:mm:ss。
    * endDate  屏蔽截止日期，yyyy-MM-dd。
    * endTime  屏蔽截止时间，HH:mm:ss。
    * policies  告警策略列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'notificationMaskId' => 'getNotificationMaskId',
            'maskName' => 'getMaskName',
            'relationType' => 'getRelationType',
            'relationId' => 'getRelationId',
            'resources' => 'getResources',
            'maskStatus' => 'getMaskStatus',
            'maskType' => 'getMaskType',
            'startDate' => 'getStartDate',
            'startTime' => 'getStartTime',
            'endDate' => 'getEndDate',
            'endTime' => 'getEndTime',
            'policies' => 'getPolicies'
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
        $this->container['notificationMaskId'] = isset($data['notificationMaskId']) ? $data['notificationMaskId'] : null;
        $this->container['maskName'] = isset($data['maskName']) ? $data['maskName'] : null;
        $this->container['relationType'] = isset($data['relationType']) ? $data['relationType'] : null;
        $this->container['relationId'] = isset($data['relationId']) ? $data['relationId'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['maskStatus'] = isset($data['maskStatus']) ? $data['maskStatus'] : null;
        $this->container['maskType'] = isset($data['maskType']) ? $data['maskType'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['notificationMaskId'] === null) {
            $invalidProperties[] = "'notificationMaskId' can't be null";
        }
            if ((mb_strlen($this->container['notificationMaskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationMaskId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['notificationMaskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationMaskId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^nm([0-9A-Za-z]){0,62}$/", $this->container['notificationMaskId'])) {
                $invalidProperties[] = "invalid value for 'notificationMaskId', must be conform to the pattern /^nm([0-9A-Za-z]){0,62}$/.";
            }
            if (!is_null($this->container['maskName']) && (mb_strlen($this->container['maskName']) > 64)) {
                $invalidProperties[] = "invalid value for 'maskName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['maskName']) && (mb_strlen($this->container['maskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'maskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maskName']) && !preg_match("/^([一-鿿]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['maskName'])) {
                $invalidProperties[] = "invalid value for 'maskName', must be conform to the pattern /^([一-鿿]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
        if ($this->container['relationType'] === null) {
            $invalidProperties[] = "'relationType' can't be null";
        }
            if (!is_null($this->container['relationId']) && (mb_strlen($this->container['relationId']) > 64)) {
                $invalidProperties[] = "invalid value for 'relationId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['relationId']) && (mb_strlen($this->container['relationId']) < 1)) {
                $invalidProperties[] = "invalid value for 'relationId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['relationId']) && !preg_match("/^([a-z]|[A-Z]|[0-9]|-){1,64}$/", $this->container['relationId'])) {
                $invalidProperties[] = "invalid value for 'relationId', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]|-){1,64}$/.";
            }
        if ($this->container['maskStatus'] === null) {
            $invalidProperties[] = "'maskStatus' can't be null";
        }
        if ($this->container['maskType'] === null) {
            $invalidProperties[] = "'maskType' can't be null";
        }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 8)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 8)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 8)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 8)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 8.";
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
    * Gets notificationMaskId
    *  屏蔽规则ID
    *
    * @return string
    */
    public function getNotificationMaskId()
    {
        return $this->container['notificationMaskId'];
    }

    /**
    * Sets notificationMaskId
    *
    * @param string $notificationMaskId 屏蔽规则ID
    *
    * @return $this
    */
    public function setNotificationMaskId($notificationMaskId)
    {
        $this->container['notificationMaskId'] = $notificationMaskId;
        return $this;
    }

    /**
    * Gets maskName
    *  屏蔽规则名称，只能为字母、数字、汉字、-、_，最大长度为64
    *
    * @return string|null
    */
    public function getMaskName()
    {
        return $this->container['maskName'];
    }

    /**
    * Sets maskName
    *
    * @param string|null $maskName 屏蔽规则名称，只能为字母、数字、汉字、-、_，最大长度为64
    *
    * @return $this
    */
    public function setMaskName($maskName)
    {
        $this->container['maskName'] = $maskName;
        return $this;
    }

    /**
    * Gets relationType
    *  relationType
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\RelationType
    */
    public function getRelationType()
    {
        return $this->container['relationType'];
    }

    /**
    * Sets relationType
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\RelationType $relationType relationType
    *
    * @return $this
    */
    public function setRelationType($relationType)
    {
        $this->container['relationType'] = $relationType;
        return $this;
    }

    /**
    * Gets relationId
    *  关联编号
    *
    * @return string|null
    */
    public function getRelationId()
    {
        return $this->container['relationId'];
    }

    /**
    * Sets relationId
    *
    * @param string|null $relationId 关联编号
    *
    * @return $this
    */
    public function setRelationId($relationId)
    {
        $this->container['relationId'] = $relationId;
        return $this;
    }

    /**
    * Gets resources
    *  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourceCategory[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourceCategory[]|null $resources 关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets maskStatus
    *  maskStatus
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\MaskStatus
    */
    public function getMaskStatus()
    {
        return $this->container['maskStatus'];
    }

    /**
    * Sets maskStatus
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\MaskStatus $maskStatus maskStatus
    *
    * @return $this
    */
    public function setMaskStatus($maskStatus)
    {
        $this->container['maskStatus'] = $maskStatus;
        return $this;
    }

    /**
    * Gets maskType
    *  maskType
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\MaskType
    */
    public function getMaskType()
    {
        return $this->container['maskType'];
    }

    /**
    * Sets maskType
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\MaskType $maskType maskType
    *
    * @return $this
    */
    public function setMaskType($maskType)
    {
        $this->container['maskType'] = $maskType;
        return $this;
    }

    /**
    * Gets startDate
    *  屏蔽起始日期，yyyy-MM-dd。
    *
    * @return \DateTime|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param \DateTime|null $startDate 屏蔽起始日期，yyyy-MM-dd。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets startTime
    *  屏蔽起始时间，HH:mm:ss。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 屏蔽起始时间，HH:mm:ss。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endDate
    *  屏蔽截止日期，yyyy-MM-dd。
    *
    * @return \DateTime|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param \DateTime|null $endDate 屏蔽截止日期，yyyy-MM-dd。
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets endTime
    *  屏蔽截止时间，HH:mm:ss。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 屏蔽截止时间，HH:mm:ss。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets policies
    *  告警策略列表。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\PoliciesInListResp[]|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\PoliciesInListResp[]|null $policies 告警策略列表。
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
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

