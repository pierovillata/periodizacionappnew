<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perfilgeneral".
 *
 * @property int $id
 * @property int $id_atleta
 * @property float $peso
 * @property float $altura
 * @property int $fcmax
 * @property int $fcreposo
 * @property float $vo2max
 *
 * @property Atleta $atleta
 */
class Perfilgeneral extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perfilgeneral';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_atleta', 'peso', 'altura', 'fcmax', 'fcreposo', 'vo2max'], 'required'],
            [['id_atleta', 'fcmax', 'fcreposo'], 'integer'],
            [['peso', 'altura', 'vo2max'], 'number'],
            [['id_atleta'], 'exist', 'skipOnError' => true, 'targetClass' => Atleta::class, 'targetAttribute' => ['id_atleta' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_atleta' => Yii::t('app', 'Id Atleta'),
            'peso' => Yii::t('app', 'Peso'),
            'altura' => Yii::t('app', 'Altura'),
            'fcmax' => Yii::t('app', 'Fcmax'),
            'fcreposo' => Yii::t('app', 'Fcreposo'),
            'vo2max' => Yii::t('app', 'Vo2max'),
        ];
    }

    /**
     * Gets query for [[Atleta]].
     *
     * @return \yii\db\ActiveQuery|AtletaQuery
     */
    public function getAtleta()
    {
        return $this->hasOne(Atleta::class, ['id' => 'id_atleta']);
    }

    /**
     * {@inheritdoc}
     * @return PerfilgeneralQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PerfilgeneralQuery(get_called_class());
    }
}
