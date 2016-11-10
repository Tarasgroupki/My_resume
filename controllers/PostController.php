<?php
namespace app\controllers;
use app\models\Post;
use Yii;
use yii\web\Controller;

class PostController extends AppController
{
	
	public function actionIndex(){
		$posts = Post::find()->select('id, name')->all();
		//$this->debug($posts);
		return $this->render('index',compact('posts'));
	}
	public function actionPlus($a = 4,$b = 6){
	    return $a + $b;	
	}
	public function actionMinus($a = 15,$b = 12){
		return $a - $b;
	}
	
	
	
	
	
}