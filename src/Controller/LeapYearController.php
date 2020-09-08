<?php


namespace Controller ; 

use Symfony\Component\HttpFoundation\Response;
use Core\AbstractController ; 
use Symfony\Component\HttpFoundation\Request; 
use Model\Yeap ; 

class LeapYearController extends AbstractController
{  
    public function index($param1 , Request $request )
    {

        $model = new Yeap()  ; 
        if (  $model->is_leap_year($param1)) {

            ob_start();
            $request->attributes->set('is_year', 'Yep, '.$param1.' This is a leap year! ');
            include sprintf(__DIR__.'/../pages/%s.php', 'leap_year' );
            return new Response(ob_get_clean());
        }else{
            ob_start();
            $request->attributes->set('is_year', 'Yep, '.$param1.' This is not a leap year. ');
            include sprintf(__DIR__.'/../pages/%s.php', 'leap_year' );
            return new Response(ob_get_clean());
        }

    }

    public function hello($name,Request $request){
        $request->attributes->set('name', $name );
        include sprintf(__DIR__.'/../pages/%s.php', 'hello' );
        return new Response(ob_get_clean());
    }

    public function bye(){
        include sprintf(__DIR__.'/../pages/%s.php', 'bye' );
        return new Response(ob_get_clean());
    }

    public function home(){
        include sprintf(__DIR__.'/../pages/%s.php', 'home' );
        return new Response(ob_get_clean());
    }

    public function is_leap_year($year = null) {
        if (null === $year) {
            $year = date('Y');
        }
        return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
    }
}