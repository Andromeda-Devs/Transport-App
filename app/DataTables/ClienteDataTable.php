<?php

namespace App\DataTables;

use App\Models\Cliente;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ClienteDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'clientes.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Cliente $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Cliente $model)
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
            'id' => new Column(['title' => __('models/clientes.fields.id'), 'data' => 'id','searchable' => false]),
            'rut' => new Column(['title' => __('models/clientes.fields.rut'), 'data' => 'rut','searchable' => false]),
            'nombre' => new Column(['title' => __('models/clientes.fields.nombre'), 'data' => 'nombre','searchable' => false]),
            'giro' => new Column(['title' => __('models/clientes.fields.giro'), 'data' => 'giro','searchable' => false]),
            'ciudad_id' => new Column(['title' => __('models/clientes.fields.ciudad_id'), 'data' => 'ciudad_id','searchable' => false]),
            'direccion' => new Column(['title' => __('models/clientes.fields.direccion'), 'data' => 'direccion','searchable' => false]),
            'telefono' => new Column(['title' => __('models/clientes.fields.telefono'), 'data' => 'telefono','searchable' => false]),
            'email' => new Column(['title' => __('models/clientes.fields.email'), 'data' => 'email','searchable' => false]),
            'nombre_contacto' => new Column(['title' => __('models/clientes.fields.nombre_contacto'), 'data' => 'nombre_contacto','searchable' => false]),
            'telefono_contacto' => new Column(['title' => __('models/clientes.fields.telefono_contacto'), 'data' => 'telefono_contacto','searchable' => false]),
            'email_contacto' => new Column(['title' => __('models/clientes.fields.email_contacto'), 'data' => 'email_contacto','searchable' => false]),
            'activo' => new Column(['title' => __('models/clientes.fields.activo'), 'data' => 'activo','searchable' => false]),
            'created_at' => new Column(['title' => __('models/clientes.fields.created_at'), 'data' => 'created_at','searchable' => false])
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'clientes_datatable_' . time();
    }
}
