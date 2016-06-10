<?php

namespace App\Helpers;

use Illuminate\Pagination\BootstrapThreePresenter;

class PaginationHelper extends BootstrapThreePresenter
{
    public function render()
    {
        if( ! $this->hasPages())
            return '';

        return sprintf(
            '<ul class="pagination no-margin pull-right">%s %s %s</ul>',
            $this->getPreviousButton(),
            $this->getLinks(),
            $this->getNextButton()
        );
    }
}