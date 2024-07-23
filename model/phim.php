<?php
function get_all_phim($limit)
{
    $sql = "select * from phim order by view desc limit 0," . $limit;
    return pdo_query($sql);
}
