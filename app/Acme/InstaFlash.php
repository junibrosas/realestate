<?php 

namespace App\Acme;

class InstaFlash {

	public function create( $title, $message, $level )
	{
		return session()->flash('flashMessage',[
			'title' => $title,
			'message' => $message,
			'level' => $level		
		]);
	}

	public function info( $title, $message )
	{
		return $this->create( $title, $message, 'info');
	}

	
	public function success( $title, $message)
	{
		return $this->create( $title, $message, 'success');		
	}

	public function error( $title, $message)
	{
		return $this->create( $title, $message, 'error');		
	}
}