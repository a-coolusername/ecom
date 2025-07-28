<?php
namespace App\Services\ProductQuery;
use Illuminate\Http\Request;

class ProductQuery{
    protected $allowedFields = [
        'id' => ['eq']
        ,'name' => ['eq']
        ,'description' => ['eq']
        ,'price' => ['eq']
        , 'categoryId' => ['eq']
    ];

    protected $columnMap = [
        // what you expect from the user => what the column is named in the database
        'categoryId' => 'category_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];

    public function transform(Request $request){
        $eloQuery = [];
        foreach($this->allowedFields as $field => $operators){
            $query = $request->query($field);
            if (!isset($query)){
                continue;
            }
            $column = $this->columnMap[$field] ?? $field;
            foreach($operators as $operator) {
                if (isset ($query[$operator])) {
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }
        return $eloQuery;
    }
}
