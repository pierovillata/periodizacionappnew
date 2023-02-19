<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atleta".
 *
 * @property int $id
 * @property string $nombre
 * @property string $fechanac
 * @property int $edad
 * @property string $direccion
 * @property string $telefono
 * @property string $categoria
 * @property string $nivel
 * @property int $deporte_id
 * @property int $entrenador_id
 *
 * @property Deporte $deporte
 * @property Entrenador $entrenador
 */
class Atleta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atleta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'fechanac', 'edad', 'direccion', 'telefono', 'categoria', 'nivel', 'deporte_id', 'entrenador_id'], 'required'],
            [['fechanac'], 'safe'],
            [['edad', 'deporte_id', 'entrenador_id'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['direccion'], 'string', 'max' => 100],
            [['telefono'], 'string', 'max' => 20],
            [['categoria', 'nivel'], 'string', 'max' => 30],
            [['deporte_id'], 'exist', 'skipOnError' => true, 'targetClass' => Deporte::class, 'targetAttribute' => ['deporte_id' => 'id']],
            [['entrenador_id'], 'exist', 'skipOnError' => true, 'targetClass' => Entrenador::class, 'targetAttribute' => ['entrenador_id' => 'id']],
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
            'fechanac' => Yii::t('app', 'Fechanac'),
            'edad' => Yii::t('app', 'Edad'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'categoria' => Yii::t('app', 'Categoria'),
            'nivel' => Yii::t('app', 'Nivel'),
            'deporte_id' => Yii::t('app', 'Deporte ID'),
            'entrenador_id' => Yii::t('app', 'Entrenador ID'),
        ];
    }

    /**
     * Gets query for [[Deporte]].
     *
     * @return \yii\db\ActiveQuery|DeporteQuery
     */
    public function getDeporte()
    {
        return $this->hasOne(Deporte::class, ['id' => 'deporte_id']);
    }

    /**
     * Gets query for [[Entrenador]].
     *
     * @return \yii\db\ActiveQuery|EntrenadorQuery
     */
    public function getEntrenador()
    {
        return $this->hasOne(Entrenador::class, ['id' => 'entrenador_id']);
    }

    /**
     * {@inheritdoc}
     * @return AtletaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AtletaQuery(get_called_class());
    }
}
