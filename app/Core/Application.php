<?php

namespace App\Core;

use App\Controller\ErrorController;

class Application
{
    private $controller;

    private $parameters = array();

    private $controllerName;

    private $actionName;

    public function __construct()
    {
        $this->splitUrl();
        $this->createControllerAndActionNames();

        if (file_exists(Config::get('PATH_CONTROLLER') . $this->controllerName . '.php')) {
            require Config::get('PATH_CONTROLLER') . $this->controllerName . '.php';
            $controller = 'App\\Controller\\' . $this->controllerName;

            $this->controller = new $controller();

            if (is_callable(array($this->controller, $this->actionName))) {
                if (!empty($this->parameters)) {
                    call_user_func_array(array($this->controller, $this->actionName), $this->parameters);
                } else {
                    $this->controller->{$this->actionName}();
                }
            } else {
                // load 404 error page
                $this->controller = new ErrorController;
                $this->controller->error404();
            }
        } else {
            // load 404 error page
            $this->controller = new ErrorController;
            $this->controller->error404();
        }
    }

    /**
     * Cắt url
     */
    private function splitUrl()
    {
        if (Request::get('url')) {
            $url = trim(Request::get('url'), '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->controllerName = isset($url[0]) ? $url[0] : null;
            $this->actionName = isset($url[1]) ? $url[1] : null;

            unset($url[0], $url[1]);
            $this->parameters = array_values($url);
        }
    }

    /**
     * Kiểm tra nếu controller and action names được set hay không. Nếu không, thì set giá trị mặc định cho nó
     * Đồng thời chỉnh sửa lại tên controller để sử dụng sau này
     */
    private function createControllerAndActionNames()
    {
        // nếu không set controller name thì lấy mặc định từ config
        if (!$this->controllerName) {
            $this->controllerName = Config::get('DEFAULT_CONTROLLER');
        }

        if (!$this->actionName or (strlen($this->actionName) == 0)) {
            $this->actionName = Config::get('DEFAULT_ACTION');
        }

        // sửa tên controller lại thành tên controller class (tên file) ("auth" to "AuthController")
        $this->controllerName = ucwords($this->controllerName) . 'Controller';
    }
}
