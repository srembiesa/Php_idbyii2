<?php
# * ********************************************************************* *
# *                                                                       *
# *   Yii2 Models and Modules                                             *
# *   This file is part of idbyii2. This project may be found at:         *
# *   https://github.com/IdentityBank/Php_idbyii2.                        *
# *                                                                       *
# *   Copyright (C) 2020 by Identity Bank. All Rights Reserved.           *
# *   https://www.identitybank.eu - You belong to you                     *
# *                                                                       *
# *   This program is free software: you can redistribute it and/or       *
# *   modify it under the terms of the GNU Affero General Public          *
# *   License as published by the Free Software Foundation, either        *
# *   version 3 of the License, or (at your option) any later version.    *
# *                                                                       *
# *   This program is distributed in the hope that it will be useful,     *
# *   but WITHOUT ANY WARRANTY; without even the implied warranty of      *
# *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the        *
# *   GNU Affero General Public License for more details.                 *
# *                                                                       *
# *   You should have received a copy of the GNU Affero General Public    *
# *   License along with this program. If not, see                        *
# *   https://www.gnu.org/licenses/.                                      *
# *                                                                       *
# * ********************************************************************* *

################################################################################
# Namespace                                                                    #
################################################################################

namespace idbyii2\models\db;

################################################################################
# Use(s)                                                                       #
################################################################################

use app\helpers\Translate;

################################################################################
# Class(es)                                                                    #
################################################################################

/**
 * This is the model class for table "{{%form_template}}".
 *
 * @property int $id
 * @property string $business_user
 * @property string $people_user
 * @property string $version_editor
 * @property string $data_json
 */

class FormTemplate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%form_template}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['business_user', 'people_user', 'version_editor', 'data_json'], 'required'],
            [['data_json'], 'string'],
            [['business_user', 'people_user', 'version_editor'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Translate::_('idbyii2', 'ID'),
            'business_user' => Translate::_('idbyii2', 'Business User'),
            'people_user' => Translate::_('idbyii2', 'People User'),
            'version_editor' => Translate::_('idbyii2', 'Version Editor'),
            'data_json' => Translate::_('idbyii2', 'Data Json'),
        ];
    }
}

################################################################################
#                                End of file                                   #
################################################################################