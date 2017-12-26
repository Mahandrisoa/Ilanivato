<?php

namespace Modules\Member\Providers;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\ServiceProvider;
use Modules\Member\Entities\Post;
use Modules\Member\Http\Services\Avatar\AvatarService;
use Modules\Member\Http\Services\Post\PostService;
use Modules\Member\Http\Services\President\PresidentService;

class MemberServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Modules\Member\Http\Services\President\PresidentServiceInterface', function ($app) {
            return new PresidentService(new AvatarService());
        });
        $this->app->bind('Modules\Member\Http\Services\Post\PostServiceInterface', function ($app) {
            return new PostService(new Post());
        });
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('member.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'member'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/member');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/member';
        }, \Config::get('view.paths')), [$sourcePath]), 'member');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/member');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'member');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'member');
        }
    }

    /**
     * Register an additional directory of factories.
     * @source https://github.com/sebastiaanluca/laravel-resource-flow/blob/develop/src/Modules/ModuleServiceProvider.php#L66
     */
    public function registerFactories()
    {
        if (! app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
