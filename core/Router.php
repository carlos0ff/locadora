<?php
namespace core;

use \core\RouterBase;

class Router extends RouterBase {
    public $routes = [];

    public function get($endpoint, $trigger) {
        $this->addRoute('get', $endpoint, $trigger);
    }

    public function post($endpoint, $trigger) {
        $this->addRoute('post', $endpoint, $trigger);
    }

    public function put($endpoint, $trigger) {
        $this->addRoute('put', $endpoint, $trigger);
    }

    public function delete($endpoint, $trigger) {
        $this->addRoute('delete', $endpoint, $trigger);
    }

    private function addRoute($method, $endpoint, $trigger) {
        $this->routes[$method][$endpoint] = $trigger;
    }
}
