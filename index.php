<?php
// Lấy tham số từ URL
session_start();
include_once "model/config.php";
include_once "model/phim.php";
include_once "model/theloai.php";
if (!isset($_GET['page'])) {
    $dstheloai = get_all_theloai();
    $phimmoi = get_all_phim(3);
    // echo var_dump($dstheloai);
    include 'view/home.php';
} else {
    switch ($_GET['page']) {
        case 'home';
            include 'view/home.php';
            break;
        case 'phim';
            break;
        default:
            include 'view/home.php';
            break;
    }
}
// $page = isset($_GET['page']) ? $_GET['page'] : 'home';

// switch ($page) {
//     case 'home':
//         include 'view/home.php';
//         break;
//     case 'about':
//         include 'controller/about.php';
//         break;
//     case 'login':
//         include 'controller/LoginController.php';
//         break;
//     case 'register':
//         include 'controller/RegisterController.php';
//         break;
//     case 'contact':
//         include 'controller/contact.php';
//         break;
//     default:
//         include 'controller/404.php';
//         break;
// }
