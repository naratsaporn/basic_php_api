<?php

$request = json_decode(file_get_contents('php://input'));
echo json_encode([
    'message'   => 'POST Member',
    'post_data' => $request->message
]);