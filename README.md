TODO
====
    1. All :D

Installation
============


  1. Add this bundle and Respect library to your project as Git submodules:

          $ git submodule add git://github.com/gpupo/RespectValidationBundle.git vendor/bundles/Respect/ValidationBundle 
          $ git submodule add git://github.com/Respect/Validation.git vendor/Respect/Validation

     or via Vendor Libraries with bin/vendors and deps (add to deps file and run `bin/vendors install`):

          [RespectValidationBundle]
              git=git://github.com/gpupo/RespectValidationBundle.git
              target=bundles/Respect/ValidationBundle  
          [RespectValidation]
                git=git://github.com/Respect/Validation.git
                target=Respect/Validation
        

  2. Register the namespace `Respect` to your project's autoloader bootstrap script:

          //app/autoload.php
          $loader->registerNamespaces(array(
                // ...
                'Respect'    => __DIR__.'/../vendor/bundles',
                // ...
          ));

  3. Add this bundle to your application's kernel:

          //app/AppKernel.php
          public function registerBundles()
          {
              return array(
                  // ...
                  new Respect\ValidationBundle\RespectValidationBundle(),
                  // ...
              );
          }




