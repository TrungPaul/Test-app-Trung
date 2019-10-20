<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Interfaces\MemberServiceInterface;
use App\Repositories\MemberRepository;
use App\Interfaces\ProjectOfMemberServiceInterface;
use App\Repositories\MemberProjectRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MemberServiceInterface::class, MemberRepository::class);
        $this->app->singleton(ProjectOfMemberServiceInterface::class, MemberProjectRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
