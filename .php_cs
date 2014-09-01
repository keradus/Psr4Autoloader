<?php

$config = new Symfony\CS\Config\Config();
$config->getFinder()->in(__DIR__);

return $config;
