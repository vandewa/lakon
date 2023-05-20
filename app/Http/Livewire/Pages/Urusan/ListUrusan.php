<?php

namespace App\Http\Livewire\Pages\Urusan;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Urusan;

class ListUrusan extends DataTableComponent
{
    public $delete_id;
    protected $listeners = ['deleteConfirmed' => 'rowsDeleted'];
    protected $model = Urusan::class;

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
        Urusan::where('id', $this->delete_id)->first()->delete();
        $this->dispatchBrowserEvent('Delete');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nama", "nama")
                ->sortable(),
            Column::make("Irban", "irbannya.nama")
                ->sortable(),
            Column::make('Action', 'id')
                ->format(
                    function ($value, $row, Column $column) {
                        return '
                            <div class="gap-3 table-actions d-flex align-items-center fs-6">
                            <a href="' . route('urusan', $row->id) . '" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" type="button"><i class="bi bi-pencil-fill"></i>
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