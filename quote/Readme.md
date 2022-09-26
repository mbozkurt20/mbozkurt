composer require mbozkurt/quote
php artisan vendor:publish --provider="mbozkurt\quote\QuoteProvider.php"


Send your page name as a parameter by adding the following code block to the end of your page

{{mbozkurt/Quote::writer('about')}}