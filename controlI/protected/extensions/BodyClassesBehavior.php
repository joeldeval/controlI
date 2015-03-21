<?php
/**
 * Author:  Yakir Sitbon.
 * Website: http://www.yakirs.net/
 */

class BodyClassesBehavior extends CBehavior {
	
	private $_classes = array();
	
	protected function _cleanClasses() {
		$this->_classes = array_unique( $this->_classes );
	}
	
	protected function _isFrontPage() {
		$stripped_uri = ( strpos( Yii::app()->request->requestUri, '?' ) )
			? substr( Yii::app()->request->requestUri, 0, strpos( Yii::app()->request->requestUri, '?' ) )
			: Yii::app()->request->requestUri;

		return Yii::app()->homeUrl === $stripped_uri;
	}

	public function addBodyClasses( $classes ) {
		if ( ! empty( $classes ) ) {
			if ( is_array( $classes ) ) {
				foreach ( $classes as $class ) {
					$this->addBodyClasses( $class );
				}
			} else {
				$this->_classes[] = $classes;
			}
		}
	}

	public function getBodyClasses( $classes = array() ) {
		$this->addBodyClasses( $classes );

		$this->addBodyClasses( 'controller-' . Yii::app()->controller->id );
		$this->addBodyClasses( 'action-' . Yii::app()->controller->action->id );
		
		if ( ! empty( Yii::app()->controller->layout ) ) {
			$layout = Yii::app()->controller->layout;
			$layout = ltrim( $layout, '/' );
			$layout = str_replace( '/', '-', $layout );
			$this->addBodyClasses( $layout );
		}
		
		if ( $this->_isFrontPage() )
			$this->addBodyClasses( 'front-page' );

		if ( Yii::app()->user->isGuest )
			$this->addBodyClasses( 'not-logged-in' );
		else
			$this->addBodyClasses( 'logged-in' );

		$actionParams = Yii::app()->controller->actionParams;
		if ( ! empty( $actionParams ) ) {
			foreach ( $actionParams as $key => $value ) {
				$this->addBodyClasses( $key . '-' . $value );
			}
		}

		$this->_cleanClasses();
		return CHtml::encode( implode( ' ', $this->_classes ) );
	}
	
}