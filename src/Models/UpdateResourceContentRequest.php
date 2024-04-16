<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceContentRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'appId'      => 'AppId',
        'content'    => 'Content',
        'moduleId'   => 'ModuleId',
        'resourceId' => 'ResourceId',
        'source'     => 'Source',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
