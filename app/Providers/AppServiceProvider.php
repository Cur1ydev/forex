<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use function Symfony\Component\String\u;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $category = Category::where('parent_id', 0)->where('status', 1)->with('children')->get();
            $languages = Language::all();
            $user = Auth::user();
            $view->with(['category' => $category, 'languages' => $languages,'user' => $user]);
        });
    }
}
