<?php
use App\User;

if ( ! function_exists('_profileFirstName'))
{
	function _profileFirstName(User $user){
		if($user->profile) return $user->profile->firstname;
	}
}

if ( ! function_exists('_profileLastName'))
{
	function _profileLastName(User $user){
		if($user->profile) return $user->profile->lastname;
	}
}