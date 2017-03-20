<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tt_hinhanhslider".
 *
 * @property integer $id
 * @property string $file
 * @property integer $slider_id
 *
 * @property Slider $slider
 */
class Hinhanhslider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tt_hinhanhslider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file', 'slider_id'], 'required'],
            [['slider_id'], 'integer'],
            [['file'], 'string', 'max' => 100],
            [['slider_id'], 'exist', 'skipOnError' => true, 'targetClass' => Slider::className(), 'targetAttribute' => ['slider_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'File',
            'slider_id' => 'Slider ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlider()
    {
        return $this->hasOne(Slider::className(), ['id' => 'slider_id']);
    }
}
