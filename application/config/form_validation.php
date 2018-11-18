<?php
    $config = [

        'admin_login_rules' => [
            [
                'field' => 'username',
                'label' => 'UserName',
                'rules' => 'required|max_length[25]|min_length[4]|trim'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|max_length[25]|min_length[3]|trim'
            ]
        ]




    ];

?>