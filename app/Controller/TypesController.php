<?php
	class TypesController extends AppController{

		public function q1_result(){

			$this->set('typeChoice', $this->request->data);

		}
		
	}