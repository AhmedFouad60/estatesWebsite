<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;

class AdminDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
           ->addColumn('action', 'admindatatable.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return User::query();
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
                    ->addAction(['width' => '80px','title' => 'التحكم'])
                    //->parameters($this->getBuilderParameters());
                    ->parameters([
                        'dom' => 'Bfrtip',
                        'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],

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
            'id'=>[ 'title' => '#' ],
            'name'=>[ 'title' => 'الاسم' ],
            'email'=>[ 'title' => 'الاميل' ],
            'created_at'=>[ 'title' => 'اضيف في' ],


        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Admin_' . date('YmdHis');
    }
}
