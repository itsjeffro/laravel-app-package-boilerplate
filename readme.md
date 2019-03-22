# Laravel App Package Boilerplate

Included as a starting point are:
 
* Routies
* Controllers
* Views
* Configuration

## Development
### Getting started
The simplest way I go about developing a package in a new or existing Laravel installation is to create a symlink from the composer vendor folder to where I've cloned my package, but you may do whatever way suits you.

#### Clone boilerplate
In the main Laravel application, you may clone the package into the app/ directory.

#### Rename
Throughout the project there are a few placeholder names that will need to be updated to reflect what the package does.

Folders:
* laravel-app-package-boilerplate > package

Files:
* ExampleServiceProvider.php > PackageServiceProvider.php

Contents:
* composer.json: Update name, for example "vendor/package"

#### Composer
To treat this like any other vendor package, we want to create a symlink inside the composer vendor directory and reference the package we cloned into the app/ directory.

```json
{
    
...

  "repositories": [ 
     {
       "type": "path",
       "url": "app/package",
       "options": {
         "symlink": true
       }
     } 
   ],
   
...

}
```

Once the portion above has been added to the composer.json file in our Laravel installation, you may run composer require.

```bash
composer require vendor/package
```

#### Service provider
TBA

### Features
TBA

## Production
There are a couple of options to include a finished package in your project.

### Packagist
TBA

### Git reference
TBA
