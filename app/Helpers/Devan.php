<?php

if (!function_exists('get_code_group')) {
    function get_code_group($code)
    {
        return \App\Models\ComCode::where('code_group', $code)->pluck('code_nm', 'code_cd');
    }

    if (!function_exists('get_role_user')) {
        function get_role_user()
        {
            return \Spatie\Permission\Models\Role::pluck('name', 'name');
        }
    }
    
}
