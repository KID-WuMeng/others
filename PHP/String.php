<?php

    // 连接字符串
    $name = 'kid';
    'I am ' . $name;


    /*
     * 单引号：绝对字面量
     * 双引号：会先计算变量、转义字符
     */

    'I am $name';    // I am $name
    "I am $name";    // I am kid
    "I am ${name}";  // I am kid
    "I am {$name}";  // I am kid

    'hello \n world';  // hello \n world
    "hello \n world";  // hello world

    nl2br("hello \n world");         // hello <br /> world
    nl2br("hello \n world", false);  // hello <br> world


    urlencode('http://www.kid.me/index.php?name=kid&age=18');                  // url编码
    urldecode('http%3A%2F%2Fwww.kid.me%2Findex.php%3Fname%3Dkid%26age%3D18');  // url解码


    // 求字符串长度
    strlen('kid');  // 3


    // 定位第一次出现的位置
    strpos('kid.wumeng@gmail.com','gmail');  // 11
    strpos('kid.wumeng@gmail.com','163');  // false


    // 定位第一次出现的位置，提取其之前的子串
    strtok('kid.wumeng@gmail.com', '@');  // kid.wumeng


    // 定位第一次出现的位置，提取从其开始的子串
    strstr('kid.wumeng@gmail.com','gmail');  // 'gmail.com'


    // 提取子串
    substr('kid.wumeng@gmail.com', 4);  // 提取子串：wumeng@gmail.com


    // 字符串 -> 数组
    explode(',', 'Comic,Music,Sport');     // array('Comic','Music','Sport')
    explode(',', 'Comic,Music,Sport', 2);  // array('Comic','Music,Sport')


    // 数组 -> 字符串
    implode(',', array('Comic','Music','Sport'));  // 'Comic,Music,Sport'
    join(',', array('Comic','Music','Sport'));     // 'Comic,Music,Sport'


    // 替换子串（$count记录替换了多少，可选）
    str_replace('b', '*', 'abc abc abc', $count);   // a*c abc a*c（$count = 3）

?>