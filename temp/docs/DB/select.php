<?php

/*

$this->__query = 
    "INSERT INTO ".$this->__table.
    "(".$this->__prefix_cols.") 
    VALUES(".$this->__prefix_cols.")"
;

return 
    "':".
    implode(
        "',':",
        array_keys(
            $__datas
        )
    ).
    "'"
;

// PDO Query
'SELECT * FROM read_the_reward WHERE read_reward=:read_reward AND asp_name=:asp_name';

[
    "read_reward" => "unread",
    "asp_name" => "a8net"
]
*/

function __get_limit($__limit)
{
    return " LIMIT ".$__limit;
}

function __get_where($__wheres)
{
    $option = " WHERE ";

    $tmp_array = [];

    foreach(array_keys($__wheres) as $__where){
        $tmp_array[] = 
            $__where.
            "=:".
            $__where
        ;
    }

    return 
        $option.
        implode(" AND ",$tmp_array)
    ;
}

function __get_options($__options)
{
    $__option = "";
    
    (
        isset($__options["where"])
        AND
        !empty($__options["where"])
        AND
        $__option .= __get_where($__options["where"])
    );

    (
        isset($__options["limit"])
        AND
        $__option .= __get_limit($__options["limit"])
    );

    return $__option;
}

function __get_select_query($__table,$__cols,$options)
{
    echo $option;
    $__query = 
        "SELECT ".$__cols.
        " FROM ".$__table.
        $options
    ;

    echo $__query;
}


function __select(
    $__table,
    $__cols,
    $__options = ""
)
{
    is_array($__table) AND $__table = implode(",",$__table);

    is_array($__cols) AND $__cols = implode(",",$__cols);

    is_array($__options) AND $__options = __get_options($__options);

    __get_select_query($__table,$__cols,$__options);
}

$table = "read_the_reward";
$cols = "*";
$options = [
    "where" => [
        "read_reward" => "unread",
        "asp_name" => "a8net"
    ],
    "limit" => 10
];

__select($table,$cols,$options);

// PDO Query
'SELECT * FROM read_the_reward WHERE read_reward=:read_reward AND asp_name=:asp_name';

// SQL Query
'SELECT * FROM read_the_reward WHERE read_reward="unread" AND asp_name="a8net"';