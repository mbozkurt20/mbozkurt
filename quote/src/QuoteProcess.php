<?php

namespace mbozkurt\Quote;

class QuoteProcess
{
    /**
     */
    public static function writer($page)
    {

        if (empty($page)) {
            throw new \Exception('Page name can not be empty.');
        }

        $keywords = config('quote.quotes.'.$page); //todo: sayfa ismine ait cümleleri listeler.
        $text = implode(' ', $keywords);
        echo '</br><strong>'.$text.'</strong>';
    }
}
