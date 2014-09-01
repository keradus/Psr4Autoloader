Psr4Autoloader
==============
[![Package version](http://img.shields.io/packagist/v/keradus/Psr4Autoloader.svg)](https://packagist.org/packages/keradus/Psr4Autoloader)
[![Build status](http://img.shields.io/travis/keradus/Psr4Autoloader/master.svg)](http://travis-ci.org/keradus/Psr4Autoloader)

PSR-4 Autoloader implementation based on https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md

Changes to original:
- fixes tests
- remove "Class" suffix in class names
- change namespace: Example->Keradus
- create new instances always with brackets
- little documentation changes
- all variables now in camelCase
- code cleanup for few useless statements
- follow php-cs-fixer guidelines and contain configuration file
