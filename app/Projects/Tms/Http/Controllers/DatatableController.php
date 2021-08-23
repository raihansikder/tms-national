<?php

namespace App\Projects\Tms\Http\Controllers;

use App\Mainframe\Features\Datatable\Traits\DatatableControllerTrait;

class DatatableController extends BaseController
{
    use DatatableControllerTrait;

    /**
     * Directory where DataBlock classes are stored
     *
     * @var string
     */
    public $path = '\App\Projects\Tms\Datatables';

}