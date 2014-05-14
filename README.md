Psr4Autoloader
==============

PSR-4 Autoloader implementation based on https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md

Changes to original:
- fixes tests
- remove "Class" suffix in class names
- change namespace: Example->Keradus
- create new instances always with brackets
- little documentation changes
- all variables now in camelCase
- add empty lines before return statements to fulfill php-cs-fixer guidelines
