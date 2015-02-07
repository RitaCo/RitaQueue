<?php
use Cake\Routing\Router;

Router::plugin('QueueJob', function ($routes) {
    $routes->fallbacks();
});
