<?php

namespace App\Projects\Tms\Http\Controllers;

use App\Mainframe\Features\DataBlocks\DataBlockControllerTrait;

class DataBlockController extends BaseController
{

    use DataBlockControllerTrait;

    /**
     * Directory where DataBlock classes are stored
     *
     * @var string
     */
    public $path = '\App\Projects\Tms\DataBlocks';

}