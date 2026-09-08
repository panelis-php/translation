<?php

namespace Panelis\Translation\Providers;

use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    private const string NAMESPACE = 'translation';

    public function boot(): void
    {
        $settingClass = 'Panelis\\Setting\\Models\\Setting';
        if (class_exists($settingClass) && config()->has('activitylog.enabled')) {
            config()->set('activitylog.enabled', $settingClass::get('activity.enabled', config('activitylog.enabled')));
        }

        $this->loadTranslationsFrom(__DIR__.'/../../lang', self::NAMESPACE);

        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    public function register(): void {}
}
