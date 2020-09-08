<?php


namespace Controller ; 

use Symfony\Component\HttpFoundation\Response;
use Core\AbstractController ; 
use  Symfony\Component\HttpFoundation\Request; 

class LeapYearController extends AbstractController
{
    public function index($param1 , Request $request )
    {
        if ($this->is_leap_year($param1)) {
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

    public function is_leap_year($year = null) {
        if (null === $year) {
            $year = date('Y');
        }
        return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
    }
}