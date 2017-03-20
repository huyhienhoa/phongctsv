<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tt_tintuc".
 *
 * @property integer $id
 * @property string $tieude
 * @property string $code
 * @property string $motangangon
 * @property string $motachitiet
 * @property string $anhminhhoa
 * @property string $ngaytao
 * @property string $ngaysua
 * @property integer $noibat
 * @property integer $luotxem
 * @property integer $loaitin_id
 *
 * @property Filedinhkem[] $ttFiledinhkems
 * @property Loaitin $loaitin
 */
class Tintuc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tt_tintuc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tieude', 'motangangon', 'motachitiet', 'anhminhhoa', 'noibat', 'loaitin_id'], 'required'],
            [['motachitiet'], 'string'],
            [['ngaytao', 'ngaysua'], 'safe'],
            [['noibat', 'luotxem', 'loaitin_id'], 'integer'],
            [['tieude', 'code', 'anhminhhoa'], 'string', 'max' => 200],
            [['motangangon'], 'string', 'max' => 500],
            [['loaitin_id'], 'exist', 'skipOnError' => true, 'targetClass' => Loaitin::className(), 'targetAttribute' => ['loaitin_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tieude' => 'Tieude',
            'code' => 'Code',
            'motangangon' => 'Motangangon',
            'motachitiet' => 'Motachitiet',
            'anhminhhoa' => 'Anhminhhoa',
            'ngaytao' => 'Ngaytao',
            'ngaysua' => 'Ngaysua',
            'noibat' => 'Noibat',
            'luotxem' => 'Luotxem',
            'loaitin_id' => 'Loaitin ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFiledinhkems()
    {
        return $this->hasMany(Filedinhkem::className(), ['tintuc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoaitin()
    {
        return $this->hasOne(Loaitin::className(), ['id' => 'loaitin_id']);
    }
}
