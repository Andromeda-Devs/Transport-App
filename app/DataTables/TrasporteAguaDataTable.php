<?php

namespace App\DataTables;

use App\Models\TrasporteAgua;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class TrasporteAguaDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'trasporte_aguas.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\TrasporteAgua $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(TrasporteAgua $model)
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
            'nro_guia' => new Column(['title' => __('models/trasporteAguas.fields.nro_guia'), 'data' => 'nro_guia','searchable' => false]),
            'fecha_inicio' => new Column(['title' => __('models/trasporteAguas.fields.fecha_inicio'), 'data' => 'fecha_inicio','searchable' => false]),
            'conductor' => new Column(['title' => __('models/trasporteAguas.fields.conductor'), 'data' => 'conductor','searchable' => false]),
            'auxiliar' => new Column(['title' => __('models/trasporteAguas.fields.auxiliar'), 'data' => 'auxiliar','searchable' => false]),
            'origen' => new Column(['title' => __('models/trasporteAguas.fields.origen'), 'data' => 'origen','searchable' => false]),
            'destino' => new Column(['title' => __('models/trasporteAguas.fields.destino'), 'data' => 'destino','searchable' => false]),
            'camion' => new Column(['title' => __('models/trasporteAguas.fields.camion'), 'data' => 'camion','searchable' => false]),
            'acoplado' => new Column(['title' => __('models/trasporteAguas.fields.acoplado'), 'data' => 'acoplado','searchable' => false]),
            'fecha_final' => new Column(['title' => __('models/trasporteAguas.fields.fecha_final'), 'data' => 'fecha_final','searchable' => false]),
            'created_at' => new Column(['title' => __('models/trasporteAguas.fields.created_at'), 'data' => 'created_at','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'trasporte_aguas_datatable_' . time();
    }
}
