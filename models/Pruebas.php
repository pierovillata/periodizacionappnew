<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pruebas".
 *
 * @property int $id
 * @property string $nombre
 * @property string $codigo
 * @property string $unidad_medicion
 * @property string $descripcion
 */
class Pruebas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pruebas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'codigo', 'unidad_medicion', 'descripcion'], 'required'],
            [['nombre'], 'string', 'max' => 50],
            [['codigo'], 'string', 'max' => 10],
            [['unidad_medicion'], 'string', 'max' => 30],
            [['descripcion'], 'string', 'max' => 255],
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
            'codigo' => Yii::t('app', 'Codigo'),
            'unidad_medicion' => Yii::t('app', 'Unidad Medicion'),
            'descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return PruebasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PruebasQuery(get_called_class());
    }
}
