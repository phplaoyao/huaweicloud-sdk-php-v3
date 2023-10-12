<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AggregatePolicyComplianceSummaryResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AggregatePolicyComplianceSummaryResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceDetails  resourceDetails
    * assignmentDetails  assignmentDetails
    * groupName  分组名称
    * groupAccountName  账号名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceDetails' => '\HuaweiCloud\SDK\Config\V1\Model\PolicyComplianceSummaryUnit',
            'assignmentDetails' => '\HuaweiCloud\SDK\Config\V1\Model\PolicyComplianceSummaryUnit',
            'groupName' => 'string',
            'groupAccountName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceDetails  resourceDetails
    * assignmentDetails  assignmentDetails
    * groupName  分组名称
    * groupAccountName  账号名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceDetails' => null,
        'assignmentDetails' => null,
        'groupName' => null,
        'groupAccountName' => null
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
    * resourceDetails  resourceDetails
    * assignmentDetails  assignmentDetails
    * groupName  分组名称
    * groupAccountName  账号名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceDetails' => 'resource_details',
            'assignmentDetails' => 'assignment_details',
            'groupName' => 'group_name',
            'groupAccountName' => 'group_account_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceDetails  resourceDetails
    * assignmentDetails  assignmentDetails
    * groupName  分组名称
    * groupAccountName  账号名称
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceDetails' => 'setResourceDetails',
            'assignmentDetails' => 'setAssignmentDetails',
            'groupName' => 'setGroupName',
            'groupAccountName' => 'setGroupAccountName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceDetails  resourceDetails
    * assignmentDetails  assignmentDetails
    * groupName  分组名称
    * groupAccountName  账号名称
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceDetails' => 'getResourceDetails',
            'assignmentDetails' => 'getAssignmentDetails',
            'groupName' => 'getGroupName',
            'groupAccountName' => 'getGroupAccountName'
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
        $this->container['resourceDetails'] = isset($data['resourceDetails']) ? $data['resourceDetails'] : null;
        $this->container['assignmentDetails'] = isset($data['assignmentDetails']) ? $data['assignmentDetails'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupAccountName'] = isset($data['groupAccountName']) ? $data['groupAccountName'] : null;
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
    * Gets resourceDetails
    *  resourceDetails
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\PolicyComplianceSummaryUnit|null
    */
    public function getResourceDetails()
    {
        return $this->container['resourceDetails'];
    }

    /**
    * Sets resourceDetails
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\PolicyComplianceSummaryUnit|null $resourceDetails resourceDetails
    *
    * @return $this
    */
    public function setResourceDetails($resourceDetails)
    {
        $this->container['resourceDetails'] = $resourceDetails;
        return $this;
    }

    /**
    * Gets assignmentDetails
    *  assignmentDetails
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\PolicyComplianceSummaryUnit|null
    */
    public function getAssignmentDetails()
    {
        return $this->container['assignmentDetails'];
    }

    /**
    * Sets assignmentDetails
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\PolicyComplianceSummaryUnit|null $assignmentDetails assignmentDetails
    *
    * @return $this
    */
    public function setAssignmentDetails($assignmentDetails)
    {
        $this->container['assignmentDetails'] = $assignmentDetails;
        return $this;
    }

    /**
    * Gets groupName
    *  分组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 分组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupAccountName
    *  账号名称
    *
    * @return string|null
    */
    public function getGroupAccountName()
    {
        return $this->container['groupAccountName'];
    }

    /**
    * Sets groupAccountName
    *
    * @param string|null $groupAccountName 账号名称
    *
    * @return $this
    */
    public function setGroupAccountName($groupAccountName)
    {
        $this->container['groupAccountName'] = $groupAccountName;
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

