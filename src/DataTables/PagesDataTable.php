<?php 
namespace Level7up\CMS\DataTables;

use Level7up\CMS\Models\Page;
use Level7up\Dashboard\DataTables\DataTable;
use Level7up\Dashboard\Vendor\Yajra\DataTables\Html\Column;

Class PagesDataTable extends DataTable
{   
    protected $model = Page::class;
    public function dataTable($query)
    {
        $dt = parent::dataTable($query->withTrashed());
        $rawCols = array_merge($this->getRawColumns());
        return $dt->rawColumns($rawCols);
    }


    public function query(Page $model)
    {
        return $model->newQuery();
    }

    protected function getColumns()
    {
        return array_merge(
            [
                Column::make('id'),
                Column::make('slug'),
                Column::make('title_ar'),
                Column::make('title_en'),
            ],
            parent::getColumns()
        );
    }
}