<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\SAAS\Models;

use AlibabaCloud\Tea\Model;

class PagequeryAbilityResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 当前页码
    /**
     * @var int
     */
    public $current;

    // 当前页大小
    /**
     * @var int
     */
    public $pageSize;

    // 总数
    /**
     * @var int
     */
    public $total;

    // 能力信息列表
    /**
     * @var AbilityInfo[]
     */
    public $abilityInfoList;
    protected $_name = [
        'reqMsgId'        => 'req_msg_id',
        'resultCode'      => 'result_code',
        'resultMsg'       => 'result_msg',
        'current'         => 'current',
        'pageSize'        => 'page_size',
        'total'           => 'total',
        'abilityInfoList' => 'ability_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        if (null !== $this->abilityInfoList) {
            $res['ability_info_list'] = [];
            if (null !== $this->abilityInfoList && \is_array($this->abilityInfoList)) {
                $n = 0;
                foreach ($this->abilityInfoList as $item) {
                    $res['ability_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PagequeryAbilityResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }
        if (isset($map['ability_info_list'])) {
            if (!empty($map['ability_info_list'])) {
                $model->abilityInfoList = [];
                $n                      = 0;
                foreach ($map['ability_info_list'] as $item) {
                    $model->abilityInfoList[$n++] = null !== $item ? AbilityInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
