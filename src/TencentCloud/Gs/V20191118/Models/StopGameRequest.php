<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopGame请求参数结构体
 *
 * @method string getUserId() 获取游戏用户ID
 * @method void setUserId(string $UserId) 设置游戏用户ID
 * @method string getHostUserId() 获取【多人游戏】游戏主机用户ID
 * @method void setHostUserId(string $HostUserId) 设置【多人游戏】游戏主机用户ID
 */
class StopGameRequest extends AbstractModel
{
    /**
     * @var string 游戏用户ID
     */
    public $UserId;

    /**
     * @var string 【多人游戏】游戏主机用户ID
     */
    public $HostUserId;

    /**
     * @param string $UserId 游戏用户ID
     * @param string $HostUserId 【多人游戏】游戏主机用户ID
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("HostUserId",$param) and $param["HostUserId"] !== null) {
            $this->HostUserId = $param["HostUserId"];
        }
    }
}
