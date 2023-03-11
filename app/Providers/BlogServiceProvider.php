<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Post;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->latestPost = Post::latest()->paginate(2);

        view()->composer('layouts.front', function($view) {
            $view->with(['latestPost' => $this->latestPost]);
        });
    }
}
