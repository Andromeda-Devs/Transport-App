<?php

namespace App\DataTables;

use App\Models\Requerimiento;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class RequerimientoDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'requerimientos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Requerimiento $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Requerimiento $model)
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
            'fecha_programada' => new Column(['title' => __('models/requerimientos.fields.fecha_programada'), 'data' => 'fecha_programada','searchable' => false]),
            'codigo' => new Column(['title' => __('models/requerimientos.fields.codigo'), 'data' => 'codigo','searchable' => false]),
            'nombre_cliente' => new Column(['title' => __('models/requerimientos.fields.nombre_cliente'), 'data' => 'nombre_cliente','searchable' => false]),
            'cantidad_de_equipos' => new Column(['title' => __('models/requerimientos.fields.cantidad_de_equipos'), 'data' => 'cantidad_de_equipos','searchable' => false]),
            'ducto' => new Column(['title' => __('models/requerimientos.fields.ducto'), 'data' => 'ducto','searchable' => false]),
            'observaciones' => new Column(['title' => __('models/requerimientos.fields.observaciones'), 'data' => 'observaciones','searchable' => false]),
            'created_at' => new Column(['title' => __('models/requerimientos.fields.created_at'), 'data' => 'created_at','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'requerimientos_datatable_' . time();
    }
}
