<h1>KoolReport inside CakePHP</h1>
<?php
\koolreport\widgets\google\PieChart::create([
    "dataSource"=>[
        ["category"=>"Computers","amount"=>50],
        ["category"=>"Laptops","amount"=>30],
        ["category"=>"Tablets","amount"=>100],
        ["category"=>"Phones","amount"=>150],
    ]
]);
?>