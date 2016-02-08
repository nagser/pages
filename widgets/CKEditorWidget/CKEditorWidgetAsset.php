<?php

namespace app\modules\pages\widgets\CKEditorWidget;

use yii\web\AssetBundle;

class CKEditorWidgetAsset extends AssetBundle {

    public $sourcePath = '@app/modules/pages/widgets/CKEditorWidget/assets/ckeditor';
    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

}