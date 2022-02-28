<?php
define('REQUEST_URI', '/php-router/');

class Route {
    public $index;
    public $http404;

    private $routes = array();

    function __construct($index, $http404, $routes) {
        $this->index    = $index;
        $this->http404  = $http404;
        $this->routes   = $routes;
    }

    public function page() {
        $view           = null;
        $request_params = null;
        $request_uri    = isset($_REQUEST['uri']) && !empty($_REQUEST['uri']) ? explode('/', $_REQUEST['uri']) : null;
        
        if(is_array($request_uri)) {
            $request_params = $this->get_params(array_slice($request_uri, 1));
            foreach($this->routes as $route => $route_view) {
                if($route == $request_uri[0]) {
                    $view = $route_view;
                }
            }
        } else {
            $view = $this->index;
        }
        $this->get_view($view, $request_params, $request_uri);
    }

    private function get_view($view, $request_params = null, $request_uri = null) {
        $view_404 = isset($request_uri[0]) ? $request_uri[0] : 'Null';
        require file_exists($view) ? $view : $this->http404;
    }

    private function get_params($request_params = null) {
        $params = [];
        foreach($request_params as $request_param) {
            $param = explode(':', $request_param);
            if(count($param) == 2) {
                $params[$param[0]] = $param[1];
            }
        }
        return $params;
    }
} ?>