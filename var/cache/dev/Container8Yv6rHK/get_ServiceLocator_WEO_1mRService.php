<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.wEO.1mR' shared service.

return $this->privates['.service_locator.wEO.1mR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'logboekRepository' => ['privates', 'App\\Repository\\LogboekRepository', 'getLogboekRepositoryService.php', true],
]);