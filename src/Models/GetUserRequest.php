<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class GetUserRequest extends Model
{
    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'source' => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
