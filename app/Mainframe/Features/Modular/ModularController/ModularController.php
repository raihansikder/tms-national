<?php

namespace App\Mainframe\Features\Modular\ModularController;

use App\Mainframe\Features\Modular\ModularController\Traits\RequestProcessorTrait;
use App\Mainframe\Features\Modular\ModularController\Traits\ModularControllerTrait;
use App\Mainframe\Features\Modular\ModularController\Traits\RequestValidator;
use App\Mainframe\Features\Modular\ModularController\Traits\Resolvable;
use App\Mainframe\Http\Controllers\BaseController;
use App\Module;
use View;

/**
 * @group  Module Apis
 * @authenticated
 * APIs for managing different modules
 */
class ModularController extends BaseController
{
    use RequestValidator,
        RequestProcessorTrait,
        Resolvable,
        ModularControllerTrait;

    /**
     * Module name
     *
     * @var string
     */
    protected $moduleName;

    /**
     * @var Module
     */
    protected $module;

    /**
     * ModularController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        // Load
        $this->module = Module::byName($this->moduleName);
        $this->model = $this->module->modelInstance();
        // $this->view = $this->viewProcessor()->setModule($this->module)->setModel($this->model);
        $this->view = $this->model->viewProcessor();

        // Share these variables in  all views
        View::share([
            'module' => $this->module,
            'model' => $this->model,
            'view' => $this->view,
        ]);
    }

}
