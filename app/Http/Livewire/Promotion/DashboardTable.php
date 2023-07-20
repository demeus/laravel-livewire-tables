<?php

namespace App\Http\Livewire\Promotion;

use App\Models\Promotion;
use Illuminate\Database\Eloquent\Builder;

class DashboardTable extends BaseTable
{

    public function configure(): void
    {
        parent::configure();
        $this->setPaginationStatus(false);
    }


    public function builder(): Builder
    {
        return Promotion::query()
            ->distinct()
            ->with($this->relations)
            ->join('promotion_shop', 'promotion_shop.promotion_id', 'promotions.id')
            ->join('shops AS s', function ($join) {
                $join->on('promotion_shop.shop_id',  's.id');
                $join->where('s.platform_id', $this->platform->id);
            })
            ->orderBy("promotions.id", 'desc')
            ->limit(5);
    }
}
