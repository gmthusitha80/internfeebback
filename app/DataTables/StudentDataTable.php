<?php

namespace App\DataTables;

use App\Models\Students;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class StudentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'students.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Student $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Students $model)
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
                    ->setTableId('students-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
					->dom('Bfrtip')
					->orderBy(1)
					->parameters([
                        'dom'          => 'Bfrtip',
                        'buttons'      => ['excel','csv', 'print', 'reset', 'reload'],
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
        'scno',
        'name',
		'op1',
		'op2',
		'op3',
		'op4',
		'op5',
		'op6',
		'op7',
		'op8',
		'op9',
		'op10',
		'op11',
		'feedback'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Students_' . date('YmdHis');
    }
}
