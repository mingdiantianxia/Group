<?php
return [

    //模板主路径
    'path' => 'src',

    //系统错误时加载的页面，注意如果修改了模板主路径,此文件的路径也要做相应修改
    'error' => 'Web/Views/Error/500.html.twig',

    //false|true
    'cache' => true,

    //缓存的目录
    'cache_dir' => 'runtime/cache/views',

    //模板扩展，继承自Twig_Extension，详见twig文档
    'extensions' =>[
        //like
        //'src/Demo/DemoExtension',
    ],

];
