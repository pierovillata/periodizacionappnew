<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Perfilgeneral]].
 *
 * @see Perfilgeneral
 */
class PerfilgeneralQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Perfilgeneral[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Perfilgeneral|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
