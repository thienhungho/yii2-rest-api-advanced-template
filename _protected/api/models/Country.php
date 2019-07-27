<?php

namespace api\models;

use \api\models\base\Country as BaseCountry;

/**
 * This is the model class for table "country".
 */
class Country extends BaseCountry
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['code', 'name', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['code'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 32],
            [['code'], 'unique'],
            [['name'], 'unique']
        ]);
    }
	
}
