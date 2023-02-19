<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pruebas]].
 *
 * @see Pruebas
 */
class PruebasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Pruebas[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Pruebas|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
