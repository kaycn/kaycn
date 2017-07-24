<?php
/**
 * Created by PhpStorm.
 * User: kaycn
 * Date: 17-7-23
 * Time: 上午8:08
 */
// php 异常和引用
$dsn = 'mysql:dbname=KaycnCom;host:127.0.0.1';

$user = 'root';

$password = 'root19960521';

$dsn = new PDO($dsn,$user,$password);
//$dsn->query("SET NAMES utf8");

$stmt = $dsn->prepare("INSERT INTO stu_info (stu_id,stu_name,stu_sex,stu_adress) VALUES (9,'你好合格不合格不错包含GV吧','2222','3rrr4f')");
/*$stmt->bindParam(2, $stu_id);
$stmt->bindParam('2223243', $stu_name);
$stmt->bindParam('2233444445', $stu_sex);
$stmt->bindParam('24tgewrh', $stu_adress);
*/
/*
// 用不同的值插入另一行
$name = 'two';
$value = 2;*/

if($stmt->execute()){
    echo "成功写入数据库";
}
else{
    var_dump($stmt->errorInfo());
}
