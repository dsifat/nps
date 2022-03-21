<?php

namespace App\DataTables\Backend;

use Illuminate\Http\Request;
use App\Models\Backend\Topic;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class TopicDataTable extends DataTable
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
        $dataTable->addColumn('parent_id', function ($query) {
            if ($query->parent_id == null) {
                return 'Topic';
            } else {
                return 'Sub Topic';
            }
        });

        return $dataTable->addColumn('action', 'backend.topics.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Topic $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Topic $model, Request $request)
    {
        $query_builder = $model->newQuery();

        $columns = $request->columns;
        $search_keyword = isset($columns[1]['search']['value']) ? $columns[1]['search']['value'] : null;
        if ($search_keyword) {
            if (preg_match('/(?i)to/', $search_keyword) == 1) {
                $query_builder = $query_builder->where('parent_id', null);
            } elseif (preg_match('/(?i)s/', $search_keyword) == 1) {
                $query_builder = $query_builder->whereNotNull('parent_id');
            } else {
            }
        }

        return $query_builder;
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
                'order' => [[0, 'desc']],
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
                        .on('keyup change', function () {
                            column.search($(this).val(), false, false, true).draw();
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
            'name' => 'name',
            'parent_id' => [
                'title' => 'Topic Type',
//                'data' => 'topic.name'
            ],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'topics_datatable_' . time();
    }
}
