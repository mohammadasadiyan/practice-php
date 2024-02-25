<?php 
$card = [
    [
        "name"=> "Mohammad",
        "family"=> "akbari",
        "field"=> "frontEnd Dev",
    ],
    [
        "name"=> "ali",
        "family"=> "moradi",
        "field"=> "backEnd Dev",
    ],
    [
        "name"=> "reza",
        "family"=> "ahmadi",
        "field"=> "fullStack Dev",
    ],
];
$filter = function($items, $key, $data) {
    $filteredData = [];
    foreach($items as $data) {
        if ($data[$key] == $data) {
            $filteredData[] = $data;
        }
    }
    return $filteredData;
};
$filteredData = $filter($card, "field", "fullStack Dev");
?>
<?php foreach($card as $data) : ?>
    <div class="card">
    <div class="card-details">
        <p class="text-title"><?= $data["name"] . " ". $data["family"]?></p>
        <p class="text-body"><?= $data["field"]?></p>
    </div>
    <button class="card-button">More info</button>
    </div>
<?php endforeach; ?>