<?php 

namespace app\controllers;
use Yii;
use yii\web\Controller ; 


class MailController extends Controller {


	public function actionIndex () {


		$res = Yii::$app->mailer->compose()
			    ->setFrom('735416909@qq.com')
			    ->setTo('735416909@qq.com')
			    ->setSubject('Message subject')
			    ->setTextBody('Plain text content')
			    ->setHtmlBody('<b>HTML content</b>')
			    ->send();
			    var_dump($res);
	}


}