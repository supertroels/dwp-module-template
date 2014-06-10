<?php

/*
*********************************
deployWP module template
*********************************
*/

class deploy_module_name extends deployWP_module {

	/**
	 * This method can be used to run tasks
	 * when the module is first set up. Method runs
	 * on alle environments, so you will need to filter
	 * with $this->env to apply stuff to only certain
	 * environments
	 *
	 * @return void
	 **/
	function setup(){
		/* Setup code goes here */
	}


	/**
	 * This is the collect method which will run in the
	 * given environments defined in the 'collect_in'-var of
	 * this module.
	 * 
	 * @return void
	 **/
	function collect(){
		/* Collect code goes here */
	}

	/**
	 * The after_collect method will allow you to run tasks
	 * after the collect() method has run.
	 * This method is optional.
	 *
	 * @return void
	 **/
	function after_collect(){
		/* After collect code goes here */
	}

	/**
	 * This is the deploy method which will run in the
	 * given environments defined in the 'deploy_in'-var of
	 * this module.
	 *
	 * @return void
	 **/
	function deploy(){
		/* Deploy code goes here */
	}

	/**
	 * The after_deploy method will allow you to run tasks
	 * after the deploy() method has run.
	 * This method is optional.
	 *
	 * @return void
	 **/
	function after_deploy(){
		/* After deploy code goes here */
	}

}


?>