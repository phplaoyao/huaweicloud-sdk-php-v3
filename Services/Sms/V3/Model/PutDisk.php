<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PutDisk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PutDisk';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * needMigration  磁盘名称
    * id  磁盘ID
    * adjustSize  调整大小
    * physicalVolumes  修改的卷信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'needMigration' => 'bool',
            'id' => 'string',
            'adjustSize' => 'int',
            'physicalVolumes' => '\HuaweiCloud\SDK\Sms\V3\Model\PutVolume[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * needMigration  磁盘名称
    * id  磁盘ID
    * adjustSize  调整大小
    * physicalVolumes  修改的卷信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'needMigration' => null,
        'id' => null,
        'adjustSize' => 'int64',
        'physicalVolumes' => null
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
    * needMigration  磁盘名称
    * id  磁盘ID
    * adjustSize  调整大小
    * physicalVolumes  修改的卷信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'needMigration' => 'need_migration',
            'id' => 'id',
            'adjustSize' => 'adjust_size',
            'physicalVolumes' => 'physical_volumes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * needMigration  磁盘名称
    * id  磁盘ID
    * adjustSize  调整大小
    * physicalVolumes  修改的卷信息
    *
    * @var string[]
    */
    protected static $setters = [
            'needMigration' => 'setNeedMigration',
            'id' => 'setId',
            'adjustSize' => 'setAdjustSize',
            'physicalVolumes' => 'setPhysicalVolumes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * needMigration  磁盘名称
    * id  磁盘ID
    * adjustSize  调整大小
    * physicalVolumes  修改的卷信息
    *
    * @var string[]
    */
    protected static $getters = [
            'needMigration' => 'getNeedMigration',
            'id' => 'getId',
            'adjustSize' => 'getAdjustSize',
            'physicalVolumes' => 'getPhysicalVolumes'
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
        $this->container['needMigration'] = isset($data['needMigration']) ? $data['needMigration'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['adjustSize'] = isset($data['adjustSize']) ? $data['adjustSize'] : null;
        $this->container['physicalVolumes'] = isset($data['physicalVolumes']) ? $data['physicalVolumes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['adjustSize'] === null) {
            $invalidProperties[] = "'adjustSize' can't be null";
        }
            if (($this->container['adjustSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'adjustSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['adjustSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'adjustSize', must be bigger than or equal to 0.";
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
    * Gets needMigration
    *  磁盘名称
    *
    * @return bool|null
    */
    public function getNeedMigration()
    {
        return $this->container['needMigration'];
    }

    /**
    * Sets needMigration
    *
    * @param bool|null $needMigration 磁盘名称
    *
    * @return $this
    */
    public function setNeedMigration($needMigration)
    {
        $this->container['needMigration'] = $needMigration;
        return $this;
    }

    /**
    * Gets id
    *  磁盘ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 磁盘ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets adjustSize
    *  调整大小
    *
    * @return int
    */
    public function getAdjustSize()
    {
        return $this->container['adjustSize'];
    }

    /**
    * Sets adjustSize
    *
    * @param int $adjustSize 调整大小
    *
    * @return $this
    */
    public function setAdjustSize($adjustSize)
    {
        $this->container['adjustSize'] = $adjustSize;
        return $this;
    }

    /**
    * Gets physicalVolumes
    *  修改的卷信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\PutVolume[]|null
    */
    public function getPhysicalVolumes()
    {
        return $this->container['physicalVolumes'];
    }

    /**
    * Sets physicalVolumes
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\PutVolume[]|null $physicalVolumes 修改的卷信息
    *
    * @return $this
    */
    public function setPhysicalVolumes($physicalVolumes)
    {
        $this->container['physicalVolumes'] = $physicalVolumes;
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

