<?php

namespace App;

class SocialAccountGoogle
{
    public function createOrGetUser($providerUser=null)
    {
		if(isset($providerUser) && !empty($providerUser)){
			
			$account = new SocialAccount([
                'provider_user_id' => $providerUser['id'],
                'provider' => 'google'
            ]);
			$user = User::create([
					'email' => $providerUser['email'],
					'name' => $providerUser['givenName'],
				]);
				
			$account->user()->associate($user);
			$account->save();
			return $user;
		}
	}
			
			
		
		
		
		
    
}