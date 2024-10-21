<?php

namespace App\Providers;

use App\Interfaces\IllnessRepositoryInterface;
use App\Interfaces\MedicineRepositoryInterface;
use App\Repositories\IllnessRepository;
use App\Repositories\MedicineRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IllnessRepositoryInterface::class,IllnessRepository::class);
        $this->app->bind(MedicineRepositoryInterface::class,MedicineRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
