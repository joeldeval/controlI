<?php

class IncidentesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('admin','view','pdf','reportes', 'cerrar'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('view','index','admin','delete', 'update','pdf','cerrar','reportes'),
				'users'=>array('su'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}



public function actionCerrar($id)
	{
		$model=$this->loadModel($id);
		$fecha=date('Y-m-d H:i:s');
		
		if(isset($_POST['Incidentes']))
		{
			$model->attributes=$_POST['Incidentes'];
			$model->SolucionFechaHora = $fecha;
			$model->Estatus = 'Cerrado';

			if($model->save())
				$this->redirect(array('view','id'=>$model->idIncidente));
		}


		$this->render('cerrar',array(
			'model'=>$model,
		));

	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Incidentes;
		$fecha=date('Y-m-d h:m:s');
		$this->performAjaxValidation($model);
		$msg = '';

			if(isset($_POST['Incidentes']))
		{
			$model->attributes=$_POST['Incidentes'];
			$model->InicioFechaHora = $fecha;
			$model->Inmueble = CUploadedFile::getInstanceByName('Incidentes[Inmueble]');
			$model->Estatus = 'Nuevo';
			


			
			if ($model->validate()) {
				$msg = "<strong class='text-success'>Ha reportado con éxito</strong>";
				if($model->Inmueble != ''){
					//mkdir(__DIR__ .'SIHCi/sihci/users/'.$model->id_user.'/', 0777);
					$model->Inmueble->saveAs(YiiBase::getPathOfAlias("webroot").'/imagenes/fotos_reportes/'.$model->Categoria.'.png');
					$model->Inmueble ='/controlI/controlI/imagenes/fotos_reportes/'.$model->Categoria.'.png';
			   			
					if($model->save()){

			   			/*$this->redirect(array('create','id'=>$model->idIncidente));*/
			   			$msg = "<strong class='text-success'>Ha reportado con éxito</strong>";
			   			$model->Inmueble = '';							
						$model->Estatus = '';
						$model->Descripcion = '';
						$model->Categoria = '';
						$model->Equipo = '';
						$model->Urgencia = '';
						$model->Laboratorio = '';

			   		}

				}else{
					$msg = "<strong class='text-error'>Debe seleccionar una Foto</strong>";

				}


			}//end if validate
			

			}

		
	
		$this->render('create',array('model'=>$model, 'msg' => $msg));

	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$fecha=date('Y-m-d H:i:s');
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Incidentes']))
		{
			$model->attributes=$_POST['Incidentes'];
			$model->ModificacionFechaHora = $fecha;
			$model->Inmueble = CUploadedFile::getInstanceByName('Incidentes[Inmueble]');
			if ($model->validate()) {
				//if (!file_exists('/SIHCi/sihci/users/'.$model->id_user.'/cve-hc/')) {
   					//	 mkdir('/SIHCi/sihci/users/'.$model->id_user.'/cve-hc/', 0777);

   					//	$model->photo_url->saveAs(YiiBase::getPathOfAlias("webroot").'/users/'.$model->id_user.'/cve-hc/perfil.png');
					// 	$model->photo_url ='/SIHCi/sihci/users/'.$model->id_user.'/cve-hc/perfil.png';
					// }
				if($model->Inmueble != ''){
					$model->Inmueble->saveAs(YiiBase::getPathOfAlias("webroot").'/imagenes/fotos_reportes/'.$model->InicioFechaHora.'.png');
				//		$model->photo_url ='/SIHCi/sihci/users/'.$model->id_user.'.png';
					if($model->save()){
						$this->redirect(array('view','id'=>$model->idIncidente));
			   		}
						
					
				}else{
					$model->Inmueble = YiiBase::getPathOfAlias("webroot").'/imagenes/fotos_reportes/'.$model->InicioFechaHora.'.png';
					if($model->save()){
						$this->redirect(array('view','id'=>$model->idIncidente));
			   		}
				}
				
			}
			
		}


		/*if(isset($_POST['Incidentes']))
		{
			$model->attributes=$_POST['Incidentes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idIncidente));
		}*/

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Incidentes');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}


	public function actionPdf()
 	{
 		$this->render('pdf');
 	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Incidentes('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Incidentes']))
			$model->attributes=$_GET['Incidentes'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/*
	Creacion de Reportes.
	*/
	public function actionReportes()
	{
		$model=new Incidentes('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Incidentes']))
			$model->attributes=$_GET['Incidentes'];

		$this->render('reportes',array(
			'model'=>$model,
		));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Incidentes the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Incidentes::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Incidentes $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='incidentes-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
