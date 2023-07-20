<?php

namespace App\Providers;

use App\Interface\Admin\BlogInterface;
use App\Interface\Admin\UserInterface;
use App\Models\Category;
use App\Models\Language;
use App\Repository\Admin\BlogRepository;
use App\Repository\Admin\UserRepository;
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
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(BlogInterface::class, BlogRepository::class);
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
            $view->with(['category' => $category, 'languages' => $languages, 'user' => $user]);
        });
    }
}
