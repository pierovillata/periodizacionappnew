<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entrenador".
 *
 * @property int $id
 * @property string $nombre
 * @property int $nivel
 * @property string $lugar_trabajo
 *
 * @property Atleta[] $atletas
 */
class Entrenador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entrenador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'nivel', 'lugar_trabajo'], 'required'],
            [['nivel'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['lugar_trabajo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'nivel' => Yii::t('app', 'Nivel'),
            'lugar_trabajo' => Yii::t('app', 'Lugar Trabajo'),
        ];
    }

    /**
     * Gets query for [[Atletas]].
     *
     * @return \yii\db\ActiveQuery|AtletaQuery
     */
    public function getAtletas()
    {
        return $this->hasMany(Atleta::class, ['entrenador_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return EntrenadorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EntrenadorQuery(get_called_class());
    }
}
