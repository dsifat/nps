<?php

namespace App\DataTables\Backend;

use App\Models\Backend\User;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'backend.users.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Role $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
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
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'responsive' => true,
                'fixedHeader' => true,
                'stateSave' => true,
                'dom' => "<'d-flex justify-content-between align-items-center mx-0 row'<'col-sm-4'l><'col-sm-4'B><'col-sm-4'f>>" . "<'row'<'col-sm-12'tr>>" . "<'d-flex justify-content-between mx-0 row'<'col-sm-4'i><'col-sm-4'><'col-sm-4 searchStyle'p>>",
                'order' => [[1, 'asc']],
                'buttons' => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
                'initComplete' => "function () {
                    $('thead').append( \"<tr id='searchHeader' role='row'></tr>\" );
                    this.api().columns().every(function (tmp) {
                        var column = this;
                        var title = column.header().title;

                        var th = document.createElement('th');
                        th.setAttribute('colspan', '1');
                        th.setAttribute('rowspan', '1');
                        $(th).appendTo('#searchHeader');

                        if(title == 'Action') {
                            return ;
                        }

                        var input = document.createElement( 'input');
                        input.setAttribute('type', 'text');
                        input.setAttribute('class', 'form-control form-control-sm');
                        input.setAttribute('placeholder', 'Search' + ' ' + title);

                        $(input).appendTo(th)
                        .on('keyup change', function (event) {
                            if (event.keyCode === 13) {
                                column.search($(this).val(), false, false, true).draw();
                            }
                        });
                    });
                }",
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
            ['data' => 'name', 'title' => 'Name', 'orderable' => 'false'],
            'email',
            'created_at',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'users_datatable_' . time();
    }
}
