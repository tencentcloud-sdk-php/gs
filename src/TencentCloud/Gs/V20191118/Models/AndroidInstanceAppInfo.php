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
 * 安卓实例应用信息
 *
 * @method string getAndroidAppId() 获取应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAndroidAppId(string $AndroidAppId) 设置应用id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAndroidAppVersion() 获取应用版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAndroidAppVersion(string $AndroidAppVersion) 设置应用版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageName() 获取应用包名
 * @method void setPackageName(string $PackageName) 设置应用包名
 * @method string getPackageVersion() 获取应用包版本
 * @method void setPackageVersion(string $PackageVersion) 设置应用包版本
 * @method string getPackageLabel() 获取应用包标签
 * @method void setPackageLabel(string $PackageLabel) 设置应用包标签
 */
class AndroidInstanceAppInfo extends AbstractModel
{
    /**
     * @var string 应用id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AndroidAppId;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 应用版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AndroidAppVersion;

    /**
     * @var string 应用包名
     */
    public $PackageName;

    /**
     * @var string 应用包版本
     */
    public $PackageVersion;

    /**
     * @var string 应用包标签
     */
    public $PackageLabel;

    /**
     * @param string $AndroidAppId 应用id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AndroidAppVersion 应用版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageName 应用包名
     * @param string $PackageVersion 应用包版本
     * @param string $PackageLabel 应用包标签
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
        if (array_key_exists("AndroidAppId",$param) and $param["AndroidAppId"] !== null) {
            $this->AndroidAppId = $param["AndroidAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AndroidAppVersion",$param) and $param["AndroidAppVersion"] !== null) {
            $this->AndroidAppVersion = $param["AndroidAppVersion"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("PackageLabel",$param) and $param["PackageLabel"] !== null) {
            $this->PackageLabel = $param["PackageLabel"];
        }
    }
}
