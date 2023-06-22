<?php

namespace App\Http\Livewire\Pages\Irban;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Irban;

class ListIrban extends DataTableComponent
{
    public $delete_id;
    protected $listeners = ['deleteConfirmed' => 'rowsDeleted'];
    protected $model = Irban::class;
    protected $index = 0;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function hapus($var)
    {
        $this->delete_id = $var;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function rowsDeleted()
    {
        Irban::where('id', $this->delete_id)->first()->delete();
        $this->dispatchBrowserEvent('Delete');
    }

    public function columns(): array
    {
        return [
            Column::make("No", "id")->format(fn() => ++$this->index + ($this->page - 1) * $this->perPage),
            Column::make("Nama", "nama")
                ->sortable()
                ->searchable(),
            Column::make("Bidang", "bidang")
                ->searchable()
                ->sortable(),
            Column::make('Action', 'id')
                ->format(
                    function ($value, $row, Column $column) {
                        return '
                            <div class="gap-3 table-actions d-flex align-items-center fs-6">
                            <a href="' . route('irban', $row->id) . '" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" type="button"><i class="bi bi-pencil-fill"></i>
                            </a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" wire:click.prevent="hapus(' . $row->id . ')" type="button"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        ';
                    }

                )
                ->html(),
        ];
    }
}