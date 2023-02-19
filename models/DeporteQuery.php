<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Deporte]].
 *
 * @see Deporte
 */
class DeporteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Deporte[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Deporte|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
