<?php

$url = "/github/develovation-project/develovation/api/get/token/?temp_token=a08da69eadfc8ff38845aa2045ecbd35483a7f8c31fc1405691eb84f5dd32c365e9ba83f30f5f";

$parse_url = parse_url($url, PHP_URL_PATH);

print_r($parse_url);