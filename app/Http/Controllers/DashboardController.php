<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * @param  Request  $request
     *
     * @return Factory|View|Application
     */
    public function __invoke(Request $request): Factory|View|Application
    {
        return view('dashboard.index', [
            'title' => "Dashboard",
            'platform' => Platform::query()->first()
        ]);
    }
}
