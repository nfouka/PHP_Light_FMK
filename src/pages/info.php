<?php



class LeapYearController
{
    public function index($request)
    {

        $test = $this->nnn();

        return new Response('Nope, this is not a leap year.');


    }

    public function is_leap_year($year = null)
    {
        if (null === $year) {
            $year = date('Y');
        }

        return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
    }

    private function nnn()
    {
    }

}


