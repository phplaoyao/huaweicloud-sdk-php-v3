<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs) > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。   - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。   - 该参数不能单独为空，若该值为空，则开始时间也为空。系统分配一个默认结束时间06:00:00。
    * securityGroupId  安全组ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * enablePublicip  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：不开启
    * publicipId  RabbitMQ实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。  获取方法：登录弹性公网IP和带宽的控制台界面，在弹性公网IP的详情页面查的基本信息栏找ID。
    * enterpriseProjectId  企业项目。
    * enableAcl  ACL访问控制（仅AMQP版本支持此参数）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'securityGroupId' => 'string',
            'enablePublicip' => 'bool',
            'publicipId' => 'string',
            'enterpriseProjectId' => 'string',
            'enableAcl' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs) > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。   - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。   - 该参数不能单独为空，若该值为空，则开始时间也为空。系统分配一个默认结束时间06:00:00。
    * securityGroupId  安全组ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * enablePublicip  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：不开启
    * publicipId  RabbitMQ实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。  获取方法：登录弹性公网IP和带宽的控制台界面，在弹性公网IP的详情页面查的基本信息栏找ID。
    * enterpriseProjectId  企业项目。
    * enableAcl  ACL访问控制（仅AMQP版本支持此参数）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'maintainBegin' => null,
        'maintainEnd' => null,
        'securityGroupId' => null,
        'enablePublicip' => null,
        'publicipId' => null,
        'enterpriseProjectId' => null,
        'enableAcl' => null
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
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs) > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。   - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。   - 该参数不能单独为空，若该值为空，则开始时间也为空。系统分配一个默认结束时间06:00:00。
    * securityGroupId  安全组ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * enablePublicip  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：不开启
    * publicipId  RabbitMQ实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。  获取方法：登录弹性公网IP和带宽的控制台界面，在弹性公网IP的详情页面查的基本信息栏找ID。
    * enterpriseProjectId  企业项目。
    * enableAcl  ACL访问控制（仅AMQP版本支持此参数）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'securityGroupId' => 'security_group_id',
            'enablePublicip' => 'enable_publicip',
            'publicipId' => 'publicip_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enableAcl' => 'enable_acl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs) > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。   - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。   - 该参数不能单独为空，若该值为空，则开始时间也为空。系统分配一个默认结束时间06:00:00。
    * securityGroupId  安全组ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * enablePublicip  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：不开启
    * publicipId  RabbitMQ实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。  获取方法：登录弹性公网IP和带宽的控制台界面，在弹性公网IP的详情页面查的基本信息栏找ID。
    * enterpriseProjectId  企业项目。
    * enableAcl  ACL访问控制（仅AMQP版本支持此参数）。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'securityGroupId' => 'setSecurityGroupId',
            'enablePublicip' => 'setEnablePublicip',
            'publicipId' => 'setPublicipId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enableAcl' => 'setEnableAcl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs) > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。   - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。   - 该参数不能单独为空，若该值为空，则开始时间也为空。系统分配一个默认结束时间06:00:00。
    * securityGroupId  安全组ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * enablePublicip  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：不开启
    * publicipId  RabbitMQ实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。  获取方法：登录弹性公网IP和带宽的控制台界面，在弹性公网IP的详情页面查的基本信息栏找ID。
    * enterpriseProjectId  企业项目。
    * enableAcl  ACL访问控制（仅AMQP版本支持此参数）。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'securityGroupId' => 'getSecurityGroupId',
            'enablePublicip' => 'getEnablePublicip',
            'publicipId' => 'getPublicipId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enableAcl' => 'getEnableAcl'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enableAcl'] = isset($data['enableAcl']) ? $data['enableAcl'] : null;
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
    *  实例名称。  由英文字符开头，只能由英文字母、数字、中划线组成，长度为4~64的字符。
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
    * @param string|null $name 实例名称。  由英文字符开头，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs) > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs) > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets maintainBegin
    *  维护时间窗开始时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。   - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    *
    * @return string|null
    */
    public function getMaintainBegin()
    {
        return $this->container['maintainBegin'];
    }

    /**
    * Sets maintainBegin
    *
    * @param string|null $maintainBegin 维护时间窗开始时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。   - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00:00。
    *
    * @return $this
    */
    public function setMaintainBegin($maintainBegin)
    {
        $this->container['maintainBegin'] = $maintainBegin;
        return $this;
    }

    /**
    * Gets maintainEnd
    *  维护时间窗结束时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。   - 该参数不能单独为空，若该值为空，则开始时间也为空。系统分配一个默认结束时间06:00:00。
    *
    * @return string|null
    */
    public function getMaintainEnd()
    {
        return $this->container['maintainEnd'];
    }

    /**
    * Sets maintainEnd
    *
    * @param string|null $maintainEnd 维护时间窗结束时间，格式为HH:mm:ss。   - 维护时间窗开始和结束时间必须为指定的时间段。   - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。   - 该参数不能单独为空，若该值为空，则开始时间也为空。系统分配一个默认结束时间06:00:00。
    *
    * @return $this
    */
    public function setMaintainEnd($maintainEnd)
    {
        $this->container['maintainEnd'] = $maintainEnd;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 安全组ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets enablePublicip
    *  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：不开启
    *
    * @return bool|null
    */
    public function getEnablePublicip()
    {
        return $this->container['enablePublicip'];
    }

    /**
    * Sets enablePublicip
    *
    * @param bool|null $enablePublicip RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：不开启
    *
    * @return $this
    */
    public function setEnablePublicip($enablePublicip)
    {
        $this->container['enablePublicip'] = $enablePublicip;
        return $this;
    }

    /**
    * Gets publicipId
    *  RabbitMQ实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。  获取方法：登录弹性公网IP和带宽的控制台界面，在弹性公网IP的详情页面查的基本信息栏找ID。
    *
    * @return string|null
    */
    public function getPublicipId()
    {
        return $this->container['publicipId'];
    }

    /**
    * Sets publicipId
    *
    * @param string|null $publicipId RabbitMQ实例绑定的弹性IP地址的id。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。  获取方法：登录弹性公网IP和带宽的控制台界面，在弹性公网IP的详情页面查的基本信息栏找ID。
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enableAcl
    *  ACL访问控制（仅AMQP版本支持此参数）。
    *
    * @return bool|null
    */
    public function getEnableAcl()
    {
        return $this->container['enableAcl'];
    }

    /**
    * Sets enableAcl
    *
    * @param bool|null $enableAcl ACL访问控制（仅AMQP版本支持此参数）。
    *
    * @return $this
    */
    public function setEnableAcl($enableAcl)
    {
        $this->container['enableAcl'] = $enableAcl;
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

