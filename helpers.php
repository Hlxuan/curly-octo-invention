<?php

/**
 * 获取根路径
 * @param string $path
 * @return string
 */
function basePath($path = "")
{
    return __DIR__ . "/" . $path;
}

/**
 * 加载部分视图
 * @param string $name
 * @return void
 */
function loadPartial($name)
{
    require basePath("views/partials/{$name}.php");
}