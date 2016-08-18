<?php

namespace sudnewimagecrop;

use yii\base\Widget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

class UploadCropImage extends Widget
{
    public $message;
        	public $sourcePath = '@components';

    public function init()
    {

        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
                        
$this->sudloadasset();

    }

    public function run()
    {
        	

        		/*echo Html::img("", array("id"=>'uploadPreview',"style"=>'display:none;'));

        ActiveForm::begin(['action'=>'index.php?r=site/uploadimage','method'=>'POST','options'=>['enctype'=>'multipart/form-data']]);
            echo Html::fileInput("image", "", array("id"=>'uploadImage',"accept"=>'image/jpeg'));
        
        
                echo Html::textInput("x", "", array("id"=>'x'));
                echo Html::textInput("y", "", array("id"=>'y'));
                echo Html::textInput("w", "", array("id"=>'w'));
                echo Html::textInput("h", "", array("id"=>'h'));
        
        
        echo Html::input("submit", "photo", "Upload");*/
              
      

        return Html::encode($this->message);
    }
    
    
    public function  sudloadasset()
    {
        
        		$view = $this->getView();
        
                        MyImageAsset::register($view);

    }
}


?>
