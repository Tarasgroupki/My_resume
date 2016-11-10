<?php
namespace app\controllers;
use app\models\Skill;
use app\models\Post;
use Yii;
use yii\web\Controller;

class SkillController extends AppController
{
	public function actionIndex(){
		//\Yii::$app->cache->flush();
		$skills = Post::find()->select('')->all();
		return $this->render('index',compact('skills'));
	}
	public function actionAbout(){
		return $this->render('about');
	}
	public function actionPortfolio(){
		$sites = Skill::find()->select('')->all();
		return $this->render('portfolio',compact('sites'));
	}
	public function actionView(){
		$id = \Yii::$app->request->get('id');
		$skill = Post::findOne($id);
		if(empty($skill)) throw new \yii\web\HttpException(404,'Такої сторінки немає');
		return $this->render('view',compact('skill'));
	}
}