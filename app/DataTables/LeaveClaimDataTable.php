<?php

namespace App\DataTables;

use App\Models\LeaveClaim;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class LeaveClaimDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'leave_claims.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(LeaveClaim $model)
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
            ->addAction(['width' => '80px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'buttons' => [
                    'create',
                    'export',
                    'print',
                    'reset',
                    'reload',
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
            'Reason' => ['name' => 'Reason', 'data' => 'Reason'],
            'AppliedDate' => ['name' => 'AppliedDate', 'data' => 'AppliedDate']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'leave_claimsdatatable_' . time();
    }
}