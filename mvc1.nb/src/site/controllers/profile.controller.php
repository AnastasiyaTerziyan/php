<?php

/**
 * Show current user's profile
 * 
 * @return array Response data
 */
class profile {

    public function __construct() {
        
    }

    public function action_profile_show() {
        // Process request with using of models
        $user = get_authorized_user();
        // Make Response Data
        if ($user !== NULL) {
            $data = [
                'profile' => $user,
            ];
            return ['view' => 'user/show', 'data' => $data];
        } else {
            return error403();
        }
    }

}
