<?php

namespace api\controllers;

use yii\rest\ActiveController;

class ApiBaseController extends ActiveController
{
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
}