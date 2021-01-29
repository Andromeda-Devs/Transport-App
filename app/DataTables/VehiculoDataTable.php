<?php

namespace App\DataTables;

use App\Models\Vehiculo;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class VehiculoDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'vehiculos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Vehiculo $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Vehiculo $model)
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
            'patente' => new Column(['title' => __('models/vehiculos.fields.patente'), 'data' => 'patente','searchable' => false]),
            'TipoVehiculo_id' => new Column(['title' => __('models/vehiculos.fields.TipoVehiculo_id'), 'data' => 'TipoVehiculo_id','searchable' => false]),
            'marca' => new Column(['title' => __('models/vehiculos.fields.marca'), 'data' => 'marca','searchable' => false]),
            'modelo' => new Column(['title' => __('models/vehiculos.fields.modelo'), 'data' => 'modelo','searchable' => false]),
            'nro_chasis' => new Column(['title' => __('models/vehiculos.fields.nro_chasis'), 'data' => 'nro_chasis','searchable' => false]),
            'nro_motor' => new Column(['title' => __('models/vehiculos.fields.nro_motor'), 'data' => 'nro_motor','searchable' => false]),
            'activo' => new Column(['title' => __('models/vehiculos.fields.activo'), 'data' => 'activo','searchable' => false]),
            'created_at' => new Column(['title' => __('models/vehiculos.fields.created_at'), 'data' => 'created_at','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'vehiculos_datatable_' . time();
    }
}
