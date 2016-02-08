<?php

namespace nagser\pages\widgets\CKEditorWidget;

use yii\web\AssetBundle;

class CKEditorWidgetAsset extends AssetBundle {

    public $sourcePath = '@nagser/pages/widgets/CKEditorWidget/assets/ckeditor';
    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

}