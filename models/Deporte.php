<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "deporte".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $tipo
 */
class Deporte extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deporte';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'tipo'], 'required'],
            [['tipo'], 'string'],
            [['nombre'], 'string', 'max' => 30],
            [['descripcion'], 'string', 'max' => 100],
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
            'descripcion' => Yii::t('app', 'Descripcion'),
            'tipo' => Yii::t('app', 'Tipo'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return DeporteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DeporteQuery(get_called_class());
    }
}
