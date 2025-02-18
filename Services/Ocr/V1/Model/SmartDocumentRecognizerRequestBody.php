<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartDocumentRecognizerRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartDocumentRecognizerRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    * url  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * kv  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    * table  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    * layout  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    * returnExcel  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    * form  是否进行有线表单识别。有线表单指关键信息以有线单元格形式进行呈现，例如户口本、机动车发票等。若是，结果会以\"form_result\"这一关键字返回。
    * formula  是否进行公式识别，识别结果为latex序列。若是，结果会以“formula_result”这一关键字返回。 当前仅支持文档（例如论文）中的公式识别，不支持公式切片图像。
    * kvMap  需要传入字典的json序列化后字符串，用于对kv_result中的特定key值进行归一化映射。例如，kv_result中包含{\"名称\"：\"小明\"}的键值对，若传入{\"名称\"：\"姓名\"}的kv_map，则返回结果为{“姓名”：“小明”}。  > 参数传入示例： - \"kv_map\":\"{\\\"名称\\\":\\\"姓名\\\"}\"
    * pdfPageNumber  指定PDF页码识别。传入该参数时，则识别指定页码的内容。如果不传该参数，则默认识别第1页。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => 'string',
            'url' => 'string',
            'kv' => 'bool',
            'table' => 'bool',
            'layout' => 'bool',
            'returnExcel' => 'bool',
            'form' => 'bool',
            'formula' => 'bool',
            'kvMap' => 'string',
            'pdfPageNumber' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    * url  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * kv  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    * table  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    * layout  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    * returnExcel  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    * form  是否进行有线表单识别。有线表单指关键信息以有线单元格形式进行呈现，例如户口本、机动车发票等。若是，结果会以\"form_result\"这一关键字返回。
    * formula  是否进行公式识别，识别结果为latex序列。若是，结果会以“formula_result”这一关键字返回。 当前仅支持文档（例如论文）中的公式识别，不支持公式切片图像。
    * kvMap  需要传入字典的json序列化后字符串，用于对kv_result中的特定key值进行归一化映射。例如，kv_result中包含{\"名称\"：\"小明\"}的键值对，若传入{\"名称\"：\"姓名\"}的kv_map，则返回结果为{“姓名”：“小明”}。  > 参数传入示例： - \"kv_map\":\"{\\\"名称\\\":\\\"姓名\\\"}\"
    * pdfPageNumber  指定PDF页码识别。传入该参数时，则识别指定页码的内容。如果不传该参数，则默认识别第1页。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'url' => null,
        'kv' => null,
        'table' => null,
        'layout' => null,
        'returnExcel' => null,
        'form' => null,
        'formula' => null,
        'kvMap' => null,
        'pdfPageNumber' => 'int32'
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
    * data  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    * url  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * kv  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    * table  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    * layout  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    * returnExcel  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    * form  是否进行有线表单识别。有线表单指关键信息以有线单元格形式进行呈现，例如户口本、机动车发票等。若是，结果会以\"form_result\"这一关键字返回。
    * formula  是否进行公式识别，识别结果为latex序列。若是，结果会以“formula_result”这一关键字返回。 当前仅支持文档（例如论文）中的公式识别，不支持公式切片图像。
    * kvMap  需要传入字典的json序列化后字符串，用于对kv_result中的特定key值进行归一化映射。例如，kv_result中包含{\"名称\"：\"小明\"}的键值对，若传入{\"名称\"：\"姓名\"}的kv_map，则返回结果为{“姓名”：“小明”}。  > 参数传入示例： - \"kv_map\":\"{\\\"名称\\\":\\\"姓名\\\"}\"
    * pdfPageNumber  指定PDF页码识别。传入该参数时，则识别指定页码的内容。如果不传该参数，则默认识别第1页。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'url' => 'url',
            'kv' => 'kv',
            'table' => 'table',
            'layout' => 'layout',
            'returnExcel' => 'return_excel',
            'form' => 'form',
            'formula' => 'formula',
            'kvMap' => 'kv_map',
            'pdfPageNumber' => 'pdf_page_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    * url  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * kv  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    * table  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    * layout  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    * returnExcel  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    * form  是否进行有线表单识别。有线表单指关键信息以有线单元格形式进行呈现，例如户口本、机动车发票等。若是，结果会以\"form_result\"这一关键字返回。
    * formula  是否进行公式识别，识别结果为latex序列。若是，结果会以“formula_result”这一关键字返回。 当前仅支持文档（例如论文）中的公式识别，不支持公式切片图像。
    * kvMap  需要传入字典的json序列化后字符串，用于对kv_result中的特定key值进行归一化映射。例如，kv_result中包含{\"名称\"：\"小明\"}的键值对，若传入{\"名称\"：\"姓名\"}的kv_map，则返回结果为{“姓名”：“小明”}。  > 参数传入示例： - \"kv_map\":\"{\\\"名称\\\":\\\"姓名\\\"}\"
    * pdfPageNumber  指定PDF页码识别。传入该参数时，则识别指定页码的内容。如果不传该参数，则默认识别第1页。
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'url' => 'setUrl',
            'kv' => 'setKv',
            'table' => 'setTable',
            'layout' => 'setLayout',
            'returnExcel' => 'setReturnExcel',
            'form' => 'setForm',
            'formula' => 'setFormula',
            'kvMap' => 'setKvMap',
            'pdfPageNumber' => 'setPdfPageNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    * url  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * kv  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    * table  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    * layout  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    * returnExcel  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    * form  是否进行有线表单识别。有线表单指关键信息以有线单元格形式进行呈现，例如户口本、机动车发票等。若是，结果会以\"form_result\"这一关键字返回。
    * formula  是否进行公式识别，识别结果为latex序列。若是，结果会以“formula_result”这一关键字返回。 当前仅支持文档（例如论文）中的公式识别，不支持公式切片图像。
    * kvMap  需要传入字典的json序列化后字符串，用于对kv_result中的特定key值进行归一化映射。例如，kv_result中包含{\"名称\"：\"小明\"}的键值对，若传入{\"名称\"：\"姓名\"}的kv_map，则返回结果为{“姓名”：“小明”}。  > 参数传入示例： - \"kv_map\":\"{\\\"名称\\\":\\\"姓名\\\"}\"
    * pdfPageNumber  指定PDF页码识别。传入该参数时，则识别指定页码的内容。如果不传该参数，则默认识别第1页。
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'url' => 'getUrl',
            'kv' => 'getKv',
            'table' => 'getTable',
            'layout' => 'getLayout',
            'returnExcel' => 'getReturnExcel',
            'form' => 'getForm',
            'formula' => 'getFormula',
            'kvMap' => 'getKvMap',
            'pdfPageNumber' => 'getPdfPageNumber'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['kv'] = isset($data['kv']) ? $data['kv'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['returnExcel'] = isset($data['returnExcel']) ? $data['returnExcel'] : null;
        $this->container['form'] = isset($data['form']) ? $data['form'] : null;
        $this->container['formula'] = isset($data['formula']) ? $data['formula'] : null;
        $this->container['kvMap'] = isset($data['kvMap']) ? $data['kvMap'] : null;
        $this->container['pdfPageNumber'] = isset($data['pdfPageNumber']) ? $data['pdfPageNumber'] : null;
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
    * Gets data
    *  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    *
    * @return string|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param string|null $data 与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets url
    *  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets kv
    *  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    *
    * @return bool|null
    */
    public function getKv()
    {
        return $this->container['kv'];
    }

    /**
    * Sets kv
    *
    * @param bool|null $kv 是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    *
    * @return $this
    */
    public function setKv($kv)
    {
        $this->container['kv'] = $kv;
        return $this;
    }

    /**
    * Gets table
    *  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    *
    * @return bool|null
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param bool|null $table 是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets layout
    *  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    *
    * @return bool|null
    */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
    * Sets layout
    *
    * @param bool|null $layout 是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    *
    * @return $this
    */
    public function setLayout($layout)
    {
        $this->container['layout'] = $layout;
        return $this;
    }

    /**
    * Gets returnExcel
    *  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    *
    * @return bool|null
    */
    public function getReturnExcel()
    {
        return $this->container['returnExcel'];
    }

    /**
    * Sets returnExcel
    *
    * @param bool|null $returnExcel 仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    *
    * @return $this
    */
    public function setReturnExcel($returnExcel)
    {
        $this->container['returnExcel'] = $returnExcel;
        return $this;
    }

    /**
    * Gets form
    *  是否进行有线表单识别。有线表单指关键信息以有线单元格形式进行呈现，例如户口本、机动车发票等。若是，结果会以\"form_result\"这一关键字返回。
    *
    * @return bool|null
    */
    public function getForm()
    {
        return $this->container['form'];
    }

    /**
    * Sets form
    *
    * @param bool|null $form 是否进行有线表单识别。有线表单指关键信息以有线单元格形式进行呈现，例如户口本、机动车发票等。若是，结果会以\"form_result\"这一关键字返回。
    *
    * @return $this
    */
    public function setForm($form)
    {
        $this->container['form'] = $form;
        return $this;
    }

    /**
    * Gets formula
    *  是否进行公式识别，识别结果为latex序列。若是，结果会以“formula_result”这一关键字返回。 当前仅支持文档（例如论文）中的公式识别，不支持公式切片图像。
    *
    * @return bool|null
    */
    public function getFormula()
    {
        return $this->container['formula'];
    }

    /**
    * Sets formula
    *
    * @param bool|null $formula 是否进行公式识别，识别结果为latex序列。若是，结果会以“formula_result”这一关键字返回。 当前仅支持文档（例如论文）中的公式识别，不支持公式切片图像。
    *
    * @return $this
    */
    public function setFormula($formula)
    {
        $this->container['formula'] = $formula;
        return $this;
    }

    /**
    * Gets kvMap
    *  需要传入字典的json序列化后字符串，用于对kv_result中的特定key值进行归一化映射。例如，kv_result中包含{\"名称\"：\"小明\"}的键值对，若传入{\"名称\"：\"姓名\"}的kv_map，则返回结果为{“姓名”：“小明”}。  > 参数传入示例： - \"kv_map\":\"{\\\"名称\\\":\\\"姓名\\\"}\"
    *
    * @return string|null
    */
    public function getKvMap()
    {
        return $this->container['kvMap'];
    }

    /**
    * Sets kvMap
    *
    * @param string|null $kvMap 需要传入字典的json序列化后字符串，用于对kv_result中的特定key值进行归一化映射。例如，kv_result中包含{\"名称\"：\"小明\"}的键值对，若传入{\"名称\"：\"姓名\"}的kv_map，则返回结果为{“姓名”：“小明”}。  > 参数传入示例： - \"kv_map\":\"{\\\"名称\\\":\\\"姓名\\\"}\"
    *
    * @return $this
    */
    public function setKvMap($kvMap)
    {
        $this->container['kvMap'] = $kvMap;
        return $this;
    }

    /**
    * Gets pdfPageNumber
    *  指定PDF页码识别。传入该参数时，则识别指定页码的内容。如果不传该参数，则默认识别第1页。
    *
    * @return int|null
    */
    public function getPdfPageNumber()
    {
        return $this->container['pdfPageNumber'];
    }

    /**
    * Sets pdfPageNumber
    *
    * @param int|null $pdfPageNumber 指定PDF页码识别。传入该参数时，则识别指定页码的内容。如果不传该参数，则默认识别第1页。
    *
    * @return $this
    */
    public function setPdfPageNumber($pdfPageNumber)
    {
        $this->container['pdfPageNumber'] = $pdfPageNumber;
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

