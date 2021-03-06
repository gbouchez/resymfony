<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

require_once __DIR__.'/../vendor/autoload.php';

Debug::enable();

$kernel = new \AppKernel('app', 'dev', true, realpath(__DIR__.'/../app'));

$request = Request::createFromGlobals();

$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);