<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.UUqqAWA' shared service.

return $this->privates['.service_locator.UUqqAWA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'truckRepository' => ['privates', 'App\\Repository\\TruckRepository', 'getTruckRepositoryService.php', true],
]);
