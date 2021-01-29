<?php

namespace App\DataTables;

use App\Models\Gtesh001;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class Gtesh001DataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'gtesh001s.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Gtesh001 $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Gtesh001 $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false, 'title' => __('crud.action')])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    [
                       'extend' => 'create',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-plus"></i> ' .__('auth.app.create').''
                    ],
                    [
                       'extend' => 'export',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-download"></i> ' .__('auth.app.export').''
                    ],
                    [
                       'extend' => 'print',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-print"></i> ' .__('auth.app.print').''
                    ],
                    [
                       'extend' => 'reset',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-undo"></i> ' .__('auth.app.reset').''
                    ],
                    [
                       'extend' => 'reload',
                       'className' => 'btn btn-default btn-sm no-corner',
                       'text' => '<i class="fa fa-refresh"></i> ' .__('auth.app.reload').''
                    ],
                ],
                 'language' => [
                   'url' => url('//cdn.datatables.net/plug-ins/1.10.12/i18n/English.json'),
                 ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'programacion_id' => new Column(['title' => __('models/gtesh001s.fields.programacion_id'), 'data' => 'programacion_id']),
            'nombre_responsable' => new Column(['title' => __('models/gtesh001s.fields.nombre_responsable'), 'data' => 'nombre_responsable','searchable' => false]),
            'fono_contacto' => new Column(['title' => __('models/gtesh001s.fields.fono_contacto'), 'data' => 'fono_contacto','searchable' => false]),
            'fecha' => new Column(['title' => __('models/gtesh001s.fields.fecha'), 'data' => 'fecha','searchable' => false]),
            'patente_camion' => new Column(['title' => __('models/gtesh001s.fields.patente_camion'), 'data' => 'patente_camion','searchable' => false]),
            'patente_estanque' => new Column(['title' => __('models/gtesh001s.fields.patente_estanque'), 'data' => 'patente_estanque','searchable' => false]),
            'odometro' => new Column(['title' => __('models/gtesh001s.fields.odometro'), 'data' => 'odometro','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'gtesh001s_datatable_' . time();
    }
}
