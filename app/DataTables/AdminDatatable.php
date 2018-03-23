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
           ->addColumn('action', 'admin.admindatatable.action')
            ->rawColumns([
                'action'
            ]);
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
                    //->addAction(['width' => '80px','title' => 'التحكم'])
                    //->parameters($this->getBuilderParameters());
                    ->parameters([
                        'dom' => 'Blfrtip',

                        'buttons' => [

                           // ['extend'=>'csv','text'=>'test'],
                            [ 'extend'=>'excel','text'=>'<i class="fa fa-file-excel-o"></i>&nbsp;ملف اكسل'],
                          //  ['extend'=> 'pdf','text'=>'test'],
                            [ 'extend'=>'print','text'=>'<i class="fa fa-print"></i>&nbsp;طباعة ']
                         //   ,['extend'=> 'reset','text'=>'test'],
                           // [ 'extend'=>'reload','text'=>'test']


                        ],
                        'lengthMenu'=> [
                            [25, 50, 100, 200, -1],
                            [25, 50, 100, 200, "All"]
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

            [
                'name'=>'id',
                'data'=>'id',             //the name in the DB Table
                'title' => '#'

            ],
            [
                'name'=>'name',
                'data'=>'name',             //the name in the DB Table
                'title' => 'الاسم'

            ],
            [
                'name'=>'email',
                'data'=>'email',             //the name in the DB Table
                'title' => 'الاميل'

            ],
            [
                'name'=>'created_at',
                'data'=>'created_at',             //the name in the DB Table
                'title' => 'اضيف في'

            ],
            [
                'name'=>'action',
                'data'=>'action',             //the name in the DB Table
                'title' => 'التحكم',
                'exportable'=>false,
                'printable'=>false,
                'orderable'=>false,
                'searchable'=>false




            ]




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
