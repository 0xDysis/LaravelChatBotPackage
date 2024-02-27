<?php

namespace ChatbotPackage;

use Illuminate\Support\ServiceProvider;
use ChatbotPackage\Services\AssistantService;
use ChatbotPackage\Services\DatabaseExportService;
use ChatbotPackage\Services\FileDownloadService;
use ChatbotPackage\Services\MessageService;
use ChatbotPackage\Services\MyOpenAIService;
use ChatbotPackage\Services\RunService;
use ChatbotPackage\Services\ThreadService;

class LaravelChatbotServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load the routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        
       

        $this->publishes([
            __DIR__.'/../Models' => app_path('Models/ChatbotPackage'), // Adjusted the target path
            __DIR__.'/../config/laravelchatbot.php' => config_path('laravelchatbot.php'),
        ], 'laravelchatbot');
        
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/database/migrations/' => database_path('migrations'),
            ], 'laravelchatbot-migrations');
        }
    }
    
    public function register()
    {
        
        $this->app->singleton(AssistantService::class, function ($app) {
            return new AssistantService();
        });
        $this->app->singleton(DatabaseExportService::class, function ($app) {
            return new DatabaseExportService();
        });
        $this->app->singleton(FileDownloadService::class, function ($app) {
            return new FileDownloadService();
        });
        $this->app->singleton(MessageService::class, function ($app) {
            return new MessageService();
        });
        $this->app->singleton(MyOpenAIService::class, function ($app) {
            return new MyOpenAIService();
        });
        $this->app->singleton(RunService::class, function ($app) {
            return new RunService();
        });
        $this->app->singleton(ThreadService::class, function ($app) {
            return new ThreadService();
        });

       
    }
}