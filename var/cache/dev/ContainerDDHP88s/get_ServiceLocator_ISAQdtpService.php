<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ISAQdtp' shared service.

return $this->privates['.service_locator.ISAQdtp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'serviceRepo' => ['privates', 'App\\Repository\\ServicesRepository', 'getServicesRepositoryService.php', true],
], [
    'serviceRepo' => 'App\\Repository\\ServicesRepository',
]);
