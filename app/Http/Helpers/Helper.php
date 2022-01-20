<?php
namespace App\Http\Helpers;

use App\Models\Role;

class Helper {
    public static function getManagerRoleId() {
        $manager_id = Role::firstWhere('name', '=', 'Manager')->id;
        return $manager_id;
    }

    public static function getCustomerRoleId() {
        $cust_id = Role::firstWhere('name', '=', 'Customer')->id;
        return $cust_id;
    }

}