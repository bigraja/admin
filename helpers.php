<?php
echo 'dfdsf';
if (!function_exists('action_url_build')) {
    function action_url_build($value, $data)
    {
        $params = [];
        foreach ($value as $column) {
            $params[] = $data[$column];
        }
        return route($value['name'], $params);
    }
}