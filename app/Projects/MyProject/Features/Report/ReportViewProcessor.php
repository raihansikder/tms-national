<?php

namespace App\Projects\Tms\Features\Report;

use App\Projects\Tms\Features\Core\ViewProcessor;

class ReportViewProcessor extends ViewProcessor
{

    /**
     * ReportViewProcessor constructor.
     *
     * @param $reportBuilder
     */
    public function __construct($reportBuilder)
    {
        parent::__construct();
        $this->report = $reportBuilder;
    }

}