# faq-demo

This is a demonstration of the GenjFaqBundle https://github.com/genj/GenjFaqBundle
within a standard Symfony 3.2.7 project created on April 19, 2017, 2:02 pm.
http://symfony.com/download

The difference:
* add GenjFaqBundle by following the README:
  https://github.com/genj/GenjFaqBundle/blob/master/README.md

All available actions and subactions will be linked in the projects
default app/Resources/views/default/index.html.twig


## Installation

Get source from github

```
$ git clone https://github.com/genj/faq-demo.git
```


Run ```composer install``` and follow instructions 
or ```composer update``` to get the versions matched with your environment.

```
$ composer install
```

setup your database
```
$ php bin/console doctrine:schema:update --dump-sql
```

add fixtures if wanted

```
$ php bin/console doctrine:fixtures:load --fixtures=vendor/genj/faq-bundle/src/Genj/FaqBundle/DataFixtures/
```


## ToDo

example integration for FaqAdmin