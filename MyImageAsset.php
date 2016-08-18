<?php

/**
 * @copyright Copyright (c) 2016 Sudarshan Sutar
 
 */

namespace sudnewimagecrop;

use yii\web\AssetBundle;

class MyImageAsset extends AssetBundle
{
public $sourcePath = '@vendor/sudkrishna/myimagecrop/assets';

	public $depends = [
		'yii\web\YiiAsset',
		'yii\web\JqueryAsset'
	];

	public function init()
	{
//		$this->css[] = YII_DEBUG ? 'css/jquery.Jcrop.css' : 'css/jquery.Jcrop.min.css';
//		$this->js[] = YII_DEBUG ? 'js/jquery.Jcrop.js' : 'js/jquery.Jcrop.min.js';
           $this->css[]="css/font-awesome.min.css";
	    $this->css[]="css/tether.min.css";
	    $this->css[]="css/bootstrap.min.css";
	    $this->css[]="dist/cropper.css";
	    $this->css[]="css/main.css";
	    
	    
	    $this->js[]="js/jquery.min.js";
	    $this->js[]="js/tether.min.js";
	    $this->js[]="js/bootstrap.min.js";
	    $this->js[]="dist/cropper.js";
	    $this->js[]="js/main.js";
	    
	    
	    
	    
	    
	    
	    
	    
            
        // $this->js[]="js/myjs.js";
          
	
	}
}
