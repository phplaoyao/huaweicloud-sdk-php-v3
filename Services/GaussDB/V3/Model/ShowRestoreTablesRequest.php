<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRestoreTablesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRestoreTablesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * instanceId  实例ID，严格匹配UUID规则。
    * restoreTime  备份时间点，时间戳格式。  通过[查询可恢复时间段](https://support.huaweicloud.com/api-gaussdbformysql/ShowBackupRestoreTime.html)获取。
    * lastTableInfo  是否是最新库表。 - true：是最新库表。 - false：是恢复时间点库表。
    * databaseName  数据库名称，模糊匹配。
    * tableName  表名称，模糊匹配。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'restoreTime' => 'string',
            'lastTableInfo' => 'string',
            'databaseName' => 'string',
            'tableName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * instanceId  实例ID，严格匹配UUID规则。
    * restoreTime  备份时间点，时间戳格式。  通过[查询可恢复时间段](https://support.huaweicloud.com/api-gaussdbformysql/ShowBackupRestoreTime.html)获取。
    * lastTableInfo  是否是最新库表。 - true：是最新库表。 - false：是恢复时间点库表。
    * databaseName  数据库名称，模糊匹配。
    * tableName  表名称，模糊匹配。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'restoreTime' => null,
        'lastTableInfo' => null,
        'databaseName' => null,
        'tableName' => null
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
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * instanceId  实例ID，严格匹配UUID规则。
    * restoreTime  备份时间点，时间戳格式。  通过[查询可恢复时间段](https://support.huaweicloud.com/api-gaussdbformysql/ShowBackupRestoreTime.html)获取。
    * lastTableInfo  是否是最新库表。 - true：是最新库表。 - false：是恢复时间点库表。
    * databaseName  数据库名称，模糊匹配。
    * tableName  表名称，模糊匹配。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'restoreTime' => 'restore_time',
            'lastTableInfo' => 'last_table_info',
            'databaseName' => 'database_name',
            'tableName' => 'table_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * instanceId  实例ID，严格匹配UUID规则。
    * restoreTime  备份时间点，时间戳格式。  通过[查询可恢复时间段](https://support.huaweicloud.com/api-gaussdbformysql/ShowBackupRestoreTime.html)获取。
    * lastTableInfo  是否是最新库表。 - true：是最新库表。 - false：是恢复时间点库表。
    * databaseName  数据库名称，模糊匹配。
    * tableName  表名称，模糊匹配。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'restoreTime' => 'setRestoreTime',
            'lastTableInfo' => 'setLastTableInfo',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * instanceId  实例ID，严格匹配UUID规则。
    * restoreTime  备份时间点，时间戳格式。  通过[查询可恢复时间段](https://support.huaweicloud.com/api-gaussdbformysql/ShowBackupRestoreTime.html)获取。
    * lastTableInfo  是否是最新库表。 - true：是最新库表。 - false：是恢复时间点库表。
    * databaseName  数据库名称，模糊匹配。
    * tableName  表名称，模糊匹配。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'restoreTime' => 'getRestoreTime',
            'lastTableInfo' => 'getLastTableInfo',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['restoreTime'] = isset($data['restoreTime']) ? $data['restoreTime'] : null;
        $this->container['lastTableInfo'] = isset($data['lastTableInfo']) ? $data['lastTableInfo'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['restoreTime'] === null) {
            $invalidProperties[] = "'restoreTime' can't be null";
        }
        if ($this->container['lastTableInfo'] === null) {
            $invalidProperties[] = "'lastTableInfo' can't be null";
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
    * Gets xLanguage
    *  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID，严格匹配UUID规则。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID，严格匹配UUID规则。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets restoreTime
    *  备份时间点，时间戳格式。  通过[查询可恢复时间段](https://support.huaweicloud.com/api-gaussdbformysql/ShowBackupRestoreTime.html)获取。
    *
    * @return string
    */
    public function getRestoreTime()
    {
        return $this->container['restoreTime'];
    }

    /**
    * Sets restoreTime
    *
    * @param string $restoreTime 备份时间点，时间戳格式。  通过[查询可恢复时间段](https://support.huaweicloud.com/api-gaussdbformysql/ShowBackupRestoreTime.html)获取。
    *
    * @return $this
    */
    public function setRestoreTime($restoreTime)
    {
        $this->container['restoreTime'] = $restoreTime;
        return $this;
    }

    /**
    * Gets lastTableInfo
    *  是否是最新库表。 - true：是最新库表。 - false：是恢复时间点库表。
    *
    * @return string
    */
    public function getLastTableInfo()
    {
        return $this->container['lastTableInfo'];
    }

    /**
    * Sets lastTableInfo
    *
    * @param string $lastTableInfo 是否是最新库表。 - true：是最新库表。 - false：是恢复时间点库表。
    *
    * @return $this
    */
    public function setLastTableInfo($lastTableInfo)
    {
        $this->container['lastTableInfo'] = $lastTableInfo;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名称，模糊匹配。
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 数据库名称，模糊匹配。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets tableName
    *  表名称，模糊匹配。
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 表名称，模糊匹配。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
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

