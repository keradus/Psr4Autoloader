Psr4Autoloader
==============
[![Build Status](https://travis-ci.org/keradus/Psr4Autoloader.svg?branch=master)](https://travis-ci.org/keradus/Psr4Autoloader)

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
