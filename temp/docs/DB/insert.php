<?php

function __set_pdo_prefix($__value)
{
    return 
        ":".
        (string)$__value
    ;
}

function __insert($__table,$__datas)
{
    // Get Column Names
    $__prefix_column_names = 
        "':".
        implode(
            "',':",
            array_keys(
                $__datas
            )
        ).
        "'"
    ;

    $__column_names = array_keys($__datas);

    $sql = "INSERT INTO ".$__table."
    (".implode(",",$__column_names).") 
    VALUES
    (".$__prefix_column_names.")";

    echo $sql;

    // execute時はprefixは無くてもおｋだから

    // $sql->execute($__datas);

}

$data = [
    'title' => 'My title',
    'name' => 'My Name',
    'date' => 'My date'
];

[
    [
        'title' => 'My title',
        'name' => 'My Name',
        'date' => 'My date'
    ],
    [
        'title' => 'My title',
        'name' => 'My Name',
        'date' => 'My date'
    ]
];

__insert('mytable', $data);

exit;

$__prefix_column_names = array_map(
    "__set_pdo_prefix",
    array_keys(
        $data
    )
);

echo "<pre>";
print_r($__prefix_column_names);
echo
    ":".implode(
        ",:",
        array_keys($data)
    )
;
echo "</pre>";
exit;


// Get Column Names
// $__column_names = array_keys($__datas);



$sql = $pdo->prepare(
    "INSERT INTO :table_name
    (".implode(",",$__column_names).") 
    VALUES
    ('".implode("','",$__datas)."')"
);

// 次を生成: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')





$sql = $pdo->prepare(
    "SELECT * FROM user 
    WHERE id=:idValue 
    AND password=:passWordValue"
);