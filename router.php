<?php

class Router
{
    protected $routes = [];

    /**
     * 注册路由
     * @param string $method
     * @param string $uri
     * @param string $controller
     */
    private function registerRoute($method, $uri, $controller)
    {
        $this->routes[] = [
            "method" => $method,
            "uri" => $uri,
            "controller" => $controller
        ];
    }

    /**
     * 添加一个 GET 路由
     * @param string $uri
     * @param string $controller
     */
    public function addGet($uri, $controller)
    {
        $this->registerRoute("GET", $uri, $controller);
    }

    /**
     * 添加一个 POST 路由
     * @param string $uri
     * @param string $controller
     */
    public function addPost($uri, $controller)
    {
        $this->registerRoute("POST", $uri, $controller);
    }

    /**
     * 添加一个 PUT 路由
     * @param string $uri
     * @param string $controller
     */
    public function addPut($uri, $controller)
    {
        $this->registerRoute("PUT", $uri, $controller);
    }

    /**
     * 添加一个 DELETE 路由
     * @param string $uri
     * @param string $controller
     */
    public function addDelete($uri, $controller)
    {
        $this->registerRoute("DELETE", $uri, $controller);
    }

    /**
     * 错误处理方法
     * @param int $httpCode
     * @return void
     */
    public function error($httpCode = 404)
    {
        http_response_code($httpCode);
        loadView("error/{$httpCode}");
        exit;
    }

    /**
     * 路由
     * @param string $uri
     * @param string $method
     * @return void
     */
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route["uri"] === $uri && $route["method"] === $method) {
                require basePath($route["controller"]);
                return;
            }
        }

        $this->error();
    }
}