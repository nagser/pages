<?php

namespace app\modules\pages\widgets\CKEditorWidget;

use yii\bootstrap\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class CKEditorWidget extends InputWidget {

    public $pluginOptions = [];

    public function run(){
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }
        $this->registerPlugin();
    }

    private function registerPlugin(){
        $view = $this->getView();
        CKEditorWidgetAsset::register($view);
        $id = $this->options['id'];
        if($this->pluginOptions){
            $options = Json::encode($this->pluginOptions);
        } else {
            $options = '{}';
        }
       $view->registerJs("CKEDITOR.replace('$id', $options);");
    }

}