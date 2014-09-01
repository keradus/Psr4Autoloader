Psr4Autoloader
==============
[![Latest Stable Version](https://poser.pugx.org/keradus/psr4autoloader/v/stable.svg)](https://packagist.org/packages/keradus/psr4autoloader)
[![Latest Unstable Version](https://poser.pugx.org/keradus/psr4autoloader/v/unstable.svg)](https://packagist.org/packages/keradus/psr4autoloader)
[![Build status](http://img.shields.io/travis/keradus/Psr4Autoloader/master.svg)](https://travis-ci.org/keradus/Psr4Autoloader)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/f2d52fb4-2716-4db9-b90e-eb72d50850dc/mini.png)](https://insight.sensiolabs.com/projects/f2d52fb4-2716-4db9-b90e-eb72d50850dc)

PSR-4 Autoloader implementation based on [example from PHP-FIG](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md).

Changes to original:
- fixes tests
- remove "Class" suffix in class names
- change namespace: Example->Keradus
- create new instances always with brackets
- little documentation changes
- all variables now in camelCase
- code cleanup for few useless statements
- follow [https://github.com/fabpot/PHP-CS-Fixer](PHP CS Fixer) guidelines and contain configuration file
