<?php

namespace App\Providers;

use App\Svg;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Replaces the abandoned nothingworks/blade-svg package: inlines resources/assets/svg/{name}.svg.
        Blade::directive('svg', fn (string $expression) => '<?php echo '.Svg::class.'::render('.$expression.'); ?>');
    }
}
