<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "custom".
 *
 * @property integer $c_id
 * @property integer $f_id
 * @property integer $p_id
 * @property integer $c_type
 * @property string $c_name
 */
class Custom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'custom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_id', 'p_id', 'c_type'], 'integer'],
            [['c_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'C ID',
            'f_id' => 'F ID',
            'p_id' => 'P ID',
            'c_type' => 'C Type',
            'c_name' => 'C Name',
        ];
    }
}
