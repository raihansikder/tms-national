<?php

namespace App\Projects\Tms\Http\Controllers;

use App\Mainframe\Features\Report\Traits\ReportControllerTrait;

class ReportController extends BaseController
{
    use ReportControllerTrait;

    /**
     * Directory where DataBlock classes are stored
     *
     * @var string
     */
    public $path = '\App\Projects\Tms\Reports';
}