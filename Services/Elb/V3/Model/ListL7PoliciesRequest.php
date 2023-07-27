<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListL7PoliciesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListL7PoliciesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * id  转发策略ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  转发策略名称。  支持多值查询，查询条件格式：**name=xxx&name=xxx**。
    * description  转发策略额描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  转发策略的管理状态，默认为true。  不支持该字段，请勿使用。
    * listenerId  转发策略所属的监听器ID。  支持多值查询，查询条件格式：*******listener_id=xxx&listener_id=xxx*******。
    * position  转发策略的优先级。  支持多值查询，查询条件格式：****position=xxx&position=xxx****。  不支持该字段，请勿使用。
    * action  转发策略的转发动作。  取值： - REDIRECT_TO_POOL：转发到后端云服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  支持多值查询，查询条件格式：*****action=xxx&action=xxx*****。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    * redirectUrl  转发到的url。必须满足格式: protocol://host:port/path?query。  支持多值查询，查询条件格式：****redirect_url=xxx&redirect_url=xxx****。  不支持该字段，请勿使用。
    * redirectPoolId  转发到pool的ID。  支持多值查询，查询条件格式：***redirect_pool_id=xxx&redirect_pool_id=xxx***。
    * redirectListenerId  转发到的listener的ID。  支持多值查询，查询条件格式：**redirect_listener_id=xxx&redirect_listener_id=xxx**。
    * provisioningStatus  转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 - ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    * displayAllRules  是否显示转发策略下的rule详细信息。  取值： - true：显示policy下面的rule的详细信息。 - false：只显示policy下面的rule的id信息
    * priority  转发策略的优先级。数值越小，优先级越高。  支持多值查询，查询条件格式：*priority=xxx&priority=xxx*。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'pageReverse' => 'bool',
            'enterpriseProjectId' => 'string[]',
            'id' => 'string[]',
            'name' => 'string[]',
            'description' => 'string[]',
            'adminStateUp' => 'bool',
            'listenerId' => 'string[]',
            'position' => 'int[]',
            'action' => 'string[]',
            'redirectUrl' => 'string[]',
            'redirectPoolId' => 'string[]',
            'redirectListenerId' => 'string[]',
            'provisioningStatus' => 'string[]',
            'displayAllRules' => 'bool',
            'priority' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * id  转发策略ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  转发策略名称。  支持多值查询，查询条件格式：**name=xxx&name=xxx**。
    * description  转发策略额描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  转发策略的管理状态，默认为true。  不支持该字段，请勿使用。
    * listenerId  转发策略所属的监听器ID。  支持多值查询，查询条件格式：*******listener_id=xxx&listener_id=xxx*******。
    * position  转发策略的优先级。  支持多值查询，查询条件格式：****position=xxx&position=xxx****。  不支持该字段，请勿使用。
    * action  转发策略的转发动作。  取值： - REDIRECT_TO_POOL：转发到后端云服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  支持多值查询，查询条件格式：*****action=xxx&action=xxx*****。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    * redirectUrl  转发到的url。必须满足格式: protocol://host:port/path?query。  支持多值查询，查询条件格式：****redirect_url=xxx&redirect_url=xxx****。  不支持该字段，请勿使用。
    * redirectPoolId  转发到pool的ID。  支持多值查询，查询条件格式：***redirect_pool_id=xxx&redirect_pool_id=xxx***。
    * redirectListenerId  转发到的listener的ID。  支持多值查询，查询条件格式：**redirect_listener_id=xxx&redirect_listener_id=xxx**。
    * provisioningStatus  转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 - ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    * displayAllRules  是否显示转发策略下的rule详细信息。  取值： - true：显示policy下面的rule的详细信息。 - false：只显示policy下面的rule的id信息
    * priority  转发策略的优先级。数值越小，优先级越高。  支持多值查询，查询条件格式：*priority=xxx&priority=xxx*。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'pageReverse' => null,
        'enterpriseProjectId' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'adminStateUp' => null,
        'listenerId' => null,
        'position' => 'int32',
        'action' => null,
        'redirectUrl' => null,
        'redirectPoolId' => null,
        'redirectListenerId' => null,
        'provisioningStatus' => null,
        'displayAllRules' => null,
        'priority' => 'int32'
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
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * id  转发策略ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  转发策略名称。  支持多值查询，查询条件格式：**name=xxx&name=xxx**。
    * description  转发策略额描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  转发策略的管理状态，默认为true。  不支持该字段，请勿使用。
    * listenerId  转发策略所属的监听器ID。  支持多值查询，查询条件格式：*******listener_id=xxx&listener_id=xxx*******。
    * position  转发策略的优先级。  支持多值查询，查询条件格式：****position=xxx&position=xxx****。  不支持该字段，请勿使用。
    * action  转发策略的转发动作。  取值： - REDIRECT_TO_POOL：转发到后端云服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  支持多值查询，查询条件格式：*****action=xxx&action=xxx*****。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    * redirectUrl  转发到的url。必须满足格式: protocol://host:port/path?query。  支持多值查询，查询条件格式：****redirect_url=xxx&redirect_url=xxx****。  不支持该字段，请勿使用。
    * redirectPoolId  转发到pool的ID。  支持多值查询，查询条件格式：***redirect_pool_id=xxx&redirect_pool_id=xxx***。
    * redirectListenerId  转发到的listener的ID。  支持多值查询，查询条件格式：**redirect_listener_id=xxx&redirect_listener_id=xxx**。
    * provisioningStatus  转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 - ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    * displayAllRules  是否显示转发策略下的rule详细信息。  取值： - true：显示policy下面的rule的详细信息。 - false：只显示policy下面的rule的id信息
    * priority  转发策略的优先级。数值越小，优先级越高。  支持多值查询，查询条件格式：*priority=xxx&priority=xxx*。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'pageReverse' => 'page_reverse',
            'enterpriseProjectId' => 'enterprise_project_id',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'adminStateUp' => 'admin_state_up',
            'listenerId' => 'listener_id',
            'position' => 'position',
            'action' => 'action',
            'redirectUrl' => 'redirect_url',
            'redirectPoolId' => 'redirect_pool_id',
            'redirectListenerId' => 'redirect_listener_id',
            'provisioningStatus' => 'provisioning_status',
            'displayAllRules' => 'display_all_rules',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * id  转发策略ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  转发策略名称。  支持多值查询，查询条件格式：**name=xxx&name=xxx**。
    * description  转发策略额描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  转发策略的管理状态，默认为true。  不支持该字段，请勿使用。
    * listenerId  转发策略所属的监听器ID。  支持多值查询，查询条件格式：*******listener_id=xxx&listener_id=xxx*******。
    * position  转发策略的优先级。  支持多值查询，查询条件格式：****position=xxx&position=xxx****。  不支持该字段，请勿使用。
    * action  转发策略的转发动作。  取值： - REDIRECT_TO_POOL：转发到后端云服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  支持多值查询，查询条件格式：*****action=xxx&action=xxx*****。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    * redirectUrl  转发到的url。必须满足格式: protocol://host:port/path?query。  支持多值查询，查询条件格式：****redirect_url=xxx&redirect_url=xxx****。  不支持该字段，请勿使用。
    * redirectPoolId  转发到pool的ID。  支持多值查询，查询条件格式：***redirect_pool_id=xxx&redirect_pool_id=xxx***。
    * redirectListenerId  转发到的listener的ID。  支持多值查询，查询条件格式：**redirect_listener_id=xxx&redirect_listener_id=xxx**。
    * provisioningStatus  转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 - ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    * displayAllRules  是否显示转发策略下的rule详细信息。  取值： - true：显示policy下面的rule的详细信息。 - false：只显示policy下面的rule的id信息
    * priority  转发策略的优先级。数值越小，优先级越高。  支持多值查询，查询条件格式：*priority=xxx&priority=xxx*。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'pageReverse' => 'setPageReverse',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'adminStateUp' => 'setAdminStateUp',
            'listenerId' => 'setListenerId',
            'position' => 'setPosition',
            'action' => 'setAction',
            'redirectUrl' => 'setRedirectUrl',
            'redirectPoolId' => 'setRedirectPoolId',
            'redirectListenerId' => 'setRedirectListenerId',
            'provisioningStatus' => 'setProvisioningStatus',
            'displayAllRules' => 'setDisplayAllRules',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  每页返回的个数。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * id  转发策略ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  转发策略名称。  支持多值查询，查询条件格式：**name=xxx&name=xxx**。
    * description  转发策略额描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  转发策略的管理状态，默认为true。  不支持该字段，请勿使用。
    * listenerId  转发策略所属的监听器ID。  支持多值查询，查询条件格式：*******listener_id=xxx&listener_id=xxx*******。
    * position  转发策略的优先级。  支持多值查询，查询条件格式：****position=xxx&position=xxx****。  不支持该字段，请勿使用。
    * action  转发策略的转发动作。  取值： - REDIRECT_TO_POOL：转发到后端云服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  支持多值查询，查询条件格式：*****action=xxx&action=xxx*****。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    * redirectUrl  转发到的url。必须满足格式: protocol://host:port/path?query。  支持多值查询，查询条件格式：****redirect_url=xxx&redirect_url=xxx****。  不支持该字段，请勿使用。
    * redirectPoolId  转发到pool的ID。  支持多值查询，查询条件格式：***redirect_pool_id=xxx&redirect_pool_id=xxx***。
    * redirectListenerId  转发到的listener的ID。  支持多值查询，查询条件格式：**redirect_listener_id=xxx&redirect_listener_id=xxx**。
    * provisioningStatus  转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 - ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    * displayAllRules  是否显示转发策略下的rule详细信息。  取值： - true：显示policy下面的rule的详细信息。 - false：只显示policy下面的rule的id信息
    * priority  转发策略的优先级。数值越小，优先级越高。  支持多值查询，查询条件格式：*priority=xxx&priority=xxx*。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'pageReverse' => 'getPageReverse',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'adminStateUp' => 'getAdminStateUp',
            'listenerId' => 'getListenerId',
            'position' => 'getPosition',
            'action' => 'getAction',
            'redirectUrl' => 'getRedirectUrl',
            'redirectPoolId' => 'getRedirectPoolId',
            'redirectListenerId' => 'getRedirectListenerId',
            'provisioningStatus' => 'getProvisioningStatus',
            'displayAllRules' => 'getDisplayAllRules',
            'priority' => 'getPriority'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 2000;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
        $this->container['redirectPoolId'] = isset($data['redirectPoolId']) ? $data['redirectPoolId'] : null;
        $this->container['redirectListenerId'] = isset($data['redirectListenerId']) ? $data['redirectListenerId'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['displayAllRules'] = isset($data['displayAllRules']) ? $data['displayAllRules'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
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
    * Gets marker
    *  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的个数。
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
    * @param int|null $limit 每页返回的个数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets pageReverse
    *  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId 企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets id
    *  转发策略ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 转发策略ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  转发策略名称。  支持多值查询，查询条件格式：**name=xxx&name=xxx**。
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name 转发策略名称。  支持多值查询，查询条件格式：**name=xxx&name=xxx**。
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
    *  转发策略额描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description 转发策略额描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  转发策略的管理状态，默认为true。  不支持该字段，请勿使用。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 转发策略的管理状态，默认为true。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets listenerId
    *  转发策略所属的监听器ID。  支持多值查询，查询条件格式：*******listener_id=xxx&listener_id=xxx*******。
    *
    * @return string[]|null
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string[]|null $listenerId 转发策略所属的监听器ID。  支持多值查询，查询条件格式：*******listener_id=xxx&listener_id=xxx*******。
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets position
    *  转发策略的优先级。  支持多值查询，查询条件格式：****position=xxx&position=xxx****。  不支持该字段，请勿使用。
    *
    * @return int[]|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param int[]|null $position 转发策略的优先级。  支持多值查询，查询条件格式：****position=xxx&position=xxx****。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets action
    *  转发策略的转发动作。  取值： - REDIRECT_TO_POOL：转发到后端云服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  支持多值查询，查询条件格式：*****action=xxx&action=xxx*****。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    *
    * @return string[]|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string[]|null $action 转发策略的转发动作。  取值： - REDIRECT_TO_POOL：转发到后端云服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  支持多值查询，查询条件格式：*****action=xxx&action=xxx*****。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets redirectUrl
    *  转发到的url。必须满足格式: protocol://host:port/path?query。  支持多值查询，查询条件格式：****redirect_url=xxx&redirect_url=xxx****。  不支持该字段，请勿使用。
    *
    * @return string[]|null
    */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
    * Sets redirectUrl
    *
    * @param string[]|null $redirectUrl 转发到的url。必须满足格式: protocol://host:port/path?query。  支持多值查询，查询条件格式：****redirect_url=xxx&redirect_url=xxx****。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;
        return $this;
    }

    /**
    * Gets redirectPoolId
    *  转发到pool的ID。  支持多值查询，查询条件格式：***redirect_pool_id=xxx&redirect_pool_id=xxx***。
    *
    * @return string[]|null
    */
    public function getRedirectPoolId()
    {
        return $this->container['redirectPoolId'];
    }

    /**
    * Sets redirectPoolId
    *
    * @param string[]|null $redirectPoolId 转发到pool的ID。  支持多值查询，查询条件格式：***redirect_pool_id=xxx&redirect_pool_id=xxx***。
    *
    * @return $this
    */
    public function setRedirectPoolId($redirectPoolId)
    {
        $this->container['redirectPoolId'] = $redirectPoolId;
        return $this;
    }

    /**
    * Gets redirectListenerId
    *  转发到的listener的ID。  支持多值查询，查询条件格式：**redirect_listener_id=xxx&redirect_listener_id=xxx**。
    *
    * @return string[]|null
    */
    public function getRedirectListenerId()
    {
        return $this->container['redirectListenerId'];
    }

    /**
    * Sets redirectListenerId
    *
    * @param string[]|null $redirectListenerId 转发到的listener的ID。  支持多值查询，查询条件格式：**redirect_listener_id=xxx&redirect_listener_id=xxx**。
    *
    * @return $this
    */
    public function setRedirectListenerId($redirectListenerId)
    {
        $this->container['redirectListenerId'] = $redirectListenerId;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 - ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    *
    * @return string[]|null
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string[]|null $provisioningStatus 转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 - ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets displayAllRules
    *  是否显示转发策略下的rule详细信息。  取值： - true：显示policy下面的rule的详细信息。 - false：只显示policy下面的rule的id信息
    *
    * @return bool|null
    */
    public function getDisplayAllRules()
    {
        return $this->container['displayAllRules'];
    }

    /**
    * Sets displayAllRules
    *
    * @param bool|null $displayAllRules 是否显示转发策略下的rule详细信息。  取值： - true：显示policy下面的rule的详细信息。 - false：只显示policy下面的rule的id信息
    *
    * @return $this
    */
    public function setDisplayAllRules($displayAllRules)
    {
        $this->container['displayAllRules'] = $displayAllRules;
        return $this;
    }

    /**
    * Gets priority
    *  转发策略的优先级。数值越小，优先级越高。  支持多值查询，查询条件格式：*priority=xxx&priority=xxx*。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return int[]|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int[]|null $priority 转发策略的优先级。数值越小，优先级越高。  支持多值查询，查询条件格式：*priority=xxx&priority=xxx*。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
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

