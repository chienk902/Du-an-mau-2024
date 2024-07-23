<?php
function get_all_theloai()
{
    $sql = "select * from theloai order by id desc";
    return pdo_query($sql);
}
