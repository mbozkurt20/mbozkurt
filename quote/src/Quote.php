<?php

namespace mbozkurt\Quote;

use Illuminate\Support\Facades\Facade;

class Quote extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return QuoteProcess::class;
    }
}
