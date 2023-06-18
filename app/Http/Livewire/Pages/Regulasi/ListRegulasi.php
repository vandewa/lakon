<?php

namespace App\Http\Livewire\Pages\Regulasi;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Regulasi;

class ListRegulasi extends DataTableComponent
{
    public $delete_id;
    protected $listeners = ['deleteConfirmed' => 'rowsDeleted'];
    protected $model = Regulasi::class;

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
        Regulasi::where('id', $this->delete_id)->first()->delete();
        $this->dispatchBrowserEvent('Delete');
    }


    public function columns(): array
    {
        return [
            Column::make("Perihal/Keterangan", "perihal")
                ->sortable(),
            Column::make("Urusan", "urusannya.nama")
                ->sortable(),
            Column::make("Link", "link")
                ->sortable(),
            Column::make('Action', 'id')
                ->format(
                    function ($value, $row, Column $column) {
                        if (auth()->user()->hasRole('admin')) {
                            return '
                            <div class="gap-3 table-actions d-flex align-items-center fs-6">
                            <a href="' . route('regulasi', $row->id) . '" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" type="button"><i class="bi bi-pencil-fill"></i>
                            </a>
                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" wire:click.prevent="hapus(' . $row->id . ')" type="button"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        ';
                        } else {
                            return '
                            <div class="gap-3 table-actions d-flex align-items-center fs-6">
                            <a href="' . $row->link . '" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" type="button" target="_blank"><i class="bi bi-pencil-fill"></i>
                            </a>
                            </div>
                        ';
                        }

                    }

                )
                ->html(),
        ];
    }
}