<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Services\Mailer' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Services\\Mailer.php';

return $this->privates['App\\Services\\Mailer'] = new \App\Services\Mailer(($this->services['swiftmailer.mailer.default'] ?? $this->load('getSwiftmailer_Mailer_DefaultService.php')), ($this->services['twig'] ?? $this->getTwigService()));
