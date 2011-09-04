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
                target=bundles/Respect/Validation-src
     
    fix path:
       
           $ pushd  vendor/bundles/Respect/;
           $ ln -sn Validation-src/library/Respect/Validation .
           $ popd;
        

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





Usage
============

Usa as service respect.validator:
    
        //...
        class HomeController extends Controller
        {
            
            public function indexAction()
            {
                
                $number = 123;
                $x = $this->get('respect.validator')->numeric()->validate($number);//true
                
        //...
        
Use as Alias:
    
        <?php
        
        namespace Acme\DemoBundle\Controller;
        
        use Symfony\Bundle\FrameworkBundle\Controller\Controller;
        use Respect\Validation\Validator as v;
        class HomeController extends Controller
        {
            
            public function indexAction()
            {
        
                $validUsername = v::alnum()
                ->noWhitespace()
                ->length(1,15);
                
                $x = $validUsername->validate('alganet'); //true
            
            
        //...

        
See documentation on https://github.com/Respect/Validation


