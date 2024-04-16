<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class CreateModelRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encodeType;

    /**
     * @var string
     */
    public $linkModelId;

    /**
     * @var string
     */
    public $linkModuleId;

    /**
     * @var bool
     */
    public $linked;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'appId'         => 'AppId',
        'clientToken'   => 'ClientToken',
        'content'       => 'Content',
        'description'   => 'Description',
        'encodeType'    => 'EncodeType',
        'linkModelId'   => 'LinkModelId',
        'linkModuleId'  => 'LinkModuleId',
        'linked'        => 'Linked',
        'modelId'       => 'ModelId',
        'modelName'     => 'ModelName',
        'modelType'     => 'ModelType',
        'moduleId'      => 'ModuleId',
        'schemaVersion' => 'SchemaVersion',
        'source'        => 'Source',
        'subType'       => 'SubType',
        'visibility'    => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encodeType) {
            $res['EncodeType'] = $this->encodeType;
        }
        if (null !== $this->linkModelId) {
            $res['LinkModelId'] = $this->linkModelId;
        }
        if (null !== $this->linkModuleId) {
            $res['LinkModuleId'] = $this->linkModuleId;
        }
        if (null !== $this->linked) {
            $res['Linked'] = $this->linked;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncodeType'])) {
            $model->encodeType = $map['EncodeType'];
        }
        if (isset($map['LinkModelId'])) {
            $model->linkModelId = $map['LinkModelId'];
        }
        if (isset($map['LinkModuleId'])) {
            $model->linkModuleId = $map['LinkModuleId'];
        }
        if (isset($map['Linked'])) {
            $model->linked = $map['Linked'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
