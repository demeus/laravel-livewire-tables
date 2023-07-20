<?php

namespace App\Http\Livewire\Promotion;

use App\Models\Platform;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Promotion;
use Rappasoft\LaravelLivewireTables\Views\Columns\ComponentColumn;
use Illuminate\Support\Facades\Route;

class BaseTable extends DataTableComponent
{
    protected $model = Promotion::class;

    public Platform $platform;

    public array $selectedColumns = [
        'promotions.custom_promo as custom_promo',
    ];

    public array $relations = [
        'shops:id,title'
    ];

    public ?string $routeName;


    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setAdditionalSelects($this->selectedColumns)
            ->setColumnSelectDisabled()
            ->setSearchDebounce(1000)
            ->setTableAttributes([
                'class' => 'table table-hover',
            ])
        ;
    }

    public function mount(Platform $platform): void
    {
        $this->platform  = $platform;
        $this->routeName = Route::currentRouteName();
    }
    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),

            ComponentColumn::make('Image')
                ->component('promotion.table.image')
                ->attributes(fn($value, $row, Column $column) => [
                    'row' => $row,
                ]),

            ComponentColumn::make('Title')
                ->deselected()
                ->component('promotion.table.title')
                ->attributes(fn($value, $row, Column $column) => [
                    'row'         => $row,

                ]),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
