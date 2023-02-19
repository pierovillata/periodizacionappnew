<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Entrenador]].
 *
 * @see Entrenador
 */
class EntrenadorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Entrenador[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Entrenador|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
