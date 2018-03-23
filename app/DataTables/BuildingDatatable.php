<?php

namespace App\DataTables;

use App\Building;
use Yajra\DataTables\Services\DataTable;

class BuildingDatatable extends DataTable
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
            ->addColumn('action', 'buildingdatatable.action')
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
        return Building::query();
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
                'name'=>'bu_name',
                'data'=>'bu_name',             //the name in the DB Table
                'title' => 'اسم العقار'

            ],
            [
                'name'=>'bu_price',
                'data'=>'bu_price',             //the name in the DB Table
                'title' => 'سعر العقار'

            ],
            [
                'name'=>'created_at',
                'data'=>'created_at',             //the name in the DB Table
                'title' => 'اضيف في'

            ],
            [
                'name'=>'bu_square',
                'data'=>'bu_square',             //the name in the DB Table
                'title' => 'مساحة العقار'

            ],
            [
                'name'=>'bu_type',
                'data'=>'bu_type',             //the name in the DB Table
                'title' => 'نوع العقار'

            ],
            [
                'name'=>'bu_small_des',
                'data'=>'bu_small_des',             //the name in the DB Table
                'title' => 'وصف بسيط'

            ],
            [
                'name'=>'bu_rent',
                'data'=>'bu_rent',             //the name in the DB Table
                'title' => 'مؤجر'

            ],
            [
                'name'=>'bu_meta',
                'data'=>'bu_meta',             //the name in the DB Table
                'title' => 'الكلامات الدلالية'

            ],
            [
                'name'=>'bu_longitude',
                'data'=>'bu_longitude',             //the name in the DB Table
                'title' => 'bu_longitude'

            ],
            [
                'name'=>'bu_latitude',
                'data'=>'bu_latitude',             //the name in the DB Table
                'title' => 'bu_latitude'

            ],
            [
                'name'=>'bu_large_des',
                'data'=>'bu_large_des',             //the name in the DB Table
                'title' => 'وصف مطول'

            ],
            [
                'name'=>'bu_status',
                'data'=>'bu_status',             //the name in the DB Table
                'title' => 'حالة العقار'

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
        return 'Building_' . date('YmdHis');
    }
}
