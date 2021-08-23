<?php

namespace App\Projects\Tms\Modules\Users;

use App\Projects\Tms\Features\Report\ModuleReportBuilder;

class UserList extends ModuleReportBuilder
{
    /**
     * @var string[]
     */
    public $fullTextFields = ['name', 'name_ext', 'email', 'first_name', 'last_name'];
}