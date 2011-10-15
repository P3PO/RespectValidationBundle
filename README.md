TODO
====
    1. Fix false validation on service

Installation
============


  1. Add reps to your deps file:

          [RespectValidationBundle]
              git=git://github.com/gpupo/RespectValidationBundle.git
              target=bundles/Respect/ValidationBundle  
          [RespectValidation]
                git=git://github.com/Respect/Validation.git
                target=Respect/Validation

  2. run `bin/vendors install`)

  3. Register the namespace `Respect` to your project's autoloader bootstrap script:

          //app/autoload.php
          $loader->registerNamespaces(array(
                // ...
                'Respect'    => __DIR__.'/../vendor/Respect/Validation/library',
                // ...
          ));

  4 Add this bundle to your application's kernel:

          //app/AppKernel.php
          public function registerBundles()
          {
              return array(
                  // ...
                  new Respect\ValidationBundle\RespectValidationBundle(),
                  // ...
              );
          }


##Usage

### Use as service respect.validator (`unstable`):
    
        //...
        class HomeController extends Controller
        {
            public function indexAction()
            {
                $number = 123;
                $x = $this->get('respect.validator')->numeric()->validate($number);//true
        //...


### Use as Alias:

    
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

        
## Documentation
        
See documentation on https://github.com/Respect/Validation


