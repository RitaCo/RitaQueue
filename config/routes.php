<?php
use Cake\Routing\Router;

Router::prefix('admin', function($routes){

    $routes->plugin('Rita/JobQueue',['path' => '/job'], function ($routes) {
         $routes->connect(
            '/', ['controller' => 'Dashboard','action' => 'index']
        );
        

         $routes->connect(
            '/CronTasks', ['controller' => 'CronTasks','action' => 'index']
          );
         $routes->connect(
            '/CronTasks/:action/*', ['controller' => 'CronTasks']
          );
        
               $routes->fallbacks();
    });

    


});