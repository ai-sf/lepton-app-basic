<?php

return (object) [
  "name" => "YOUR APP NAME",
  "description" => "App description",
  "base_url" => "",
  "static_files_dir" => "/resources",
  "static_files_extensions" => ["png","jpg","jpeg","gif","css","js","pdf"],
  "middlewares" => [
    //\Lepton\Middleware\RBACMiddleware::class => [ "rbac_class" => App\RBAC::class ],
    //\Lepton\Middleware\ACFMiddleware::class => ["level_field" => "level"],
    \Lepton\Middleware\BaseAccessControlMiddleware::class => []
  ],
];
