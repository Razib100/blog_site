<?php
namespace App\classes;
define('BASE_URL', 'http://myblogsitefinalwithimage.test');
class Database
{
    public static function db()
    {
        $link = mysqli_connect('localhost','root','root1234','blog_site');
        return $link;
    }
}