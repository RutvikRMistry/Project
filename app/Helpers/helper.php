<?php

if (!function_exists('editEnv')) {
    function editEnv($list)
    {
        $path = base_path('.env');
        $env = file($path);

        if ($env) {
            foreach ($list as $key => $value) {
                $env = str_replace($key.'='.env($key), $key.'='.$value, $env);
            }
        }

        file_put_contents($path, $env);
    }
}

if ( ! function_exists('get_formated_currency') )
{
    /**
     * Get the formated currency tring.
     *
     * @param  integer $value amount
     *
     * @return str        currency tring
     */
    function get_formated_currency($value = 0, $decimal = null)
    {
        $value =  get_formated_decimal($value, $decimal ? false : true, $decimal);

        if (\App\Model\Setting::getItem('currency_position') == 'left')
            return get_formated_currency_symbol() . $value;

        return $value . get_formated_currency_symbol();
    }
}

if ( ! function_exists('get_formated_superadmin_currency') )
{
    /**
     * Get the formated currency tring.
     *
     * @param  integer $value amount
     *
     * @return str        currency tring
     */
    function get_formated_superadmin_currency($value = 0, $decimal = null)
    {
        $value =  get_formated_decimal($value, $decimal ? false : true, $decimal);

        if (\App\Model\Setting::getItem('currency_position') == 'left')
            return get_formated_currency_symbol() . $value;

        return $value . get_formated_currency_symbol();
    }
}

if ( ! function_exists('get_formated_decimal') )
{
    /**
     * Get the formated decimal value.
     *
     * @param  decimal $value
     * @param  boolean $trim  remove un wanted zeros after decimal point
     *
     * @return decimal
     */
    function get_formated_decimal($value = 0, $trim = true, $decimal = 0)
    {
        if (!$decimal) {
            if ($decimal === 0)
                $decimal = 0;
            else
                $decimal = 2;
        }

        $decimal_mark = ".";

        $value = number_format( $value, $decimal, $decimal_mark, "," );

        if ($trim) {
            $arr = explode($decimal_mark, $value);
            if(count($arr) == 2) {
                $temp = rtrim($arr[1], '0');
                $value = $temp ? $arr[0] . $decimal_mark . $temp : $arr[0];
            }
        }

        return $value;
    }
}

if ( ! function_exists('get_formated_currency_symbol') )
{
    function get_formated_currency_symbol()
    {
        $currency = \App\Model\Currency::where('id',\App\Model\Setting::getItem('currency'))->first();
        if($currency) {
            return $currency->symbol;
        }
        return '';
    }
}

if ( ! function_exists('get_superadmin_formated_currency_symbol') )
{
    function get_superadmin_formated_currency_symbol()
    {
        $currency = \App\Model\Currency::where('id',\App\Model\Setting::getSuperAdminItem('currency'))->first();
        if($currency) {
            return $currency->symbol;
        }
        return '';
    }
}

if (! function_exists('optional')) {
    /**
     * Provide access to optional objects.
     *
     * @param  mixed  $value
     * @param  callable|null  $callback
     * @return mixed
     */
    function optional($value = null, callable $callback = null)
    {
        if (is_null($callback)) {
            return new \Illuminate\Support\Optional($value);
        } elseif (! is_null($value)) {
            return $callback($value);
        }
    }
}

if ( ! function_exists('get_formated_date') )
{
    function get_formated_date($date)
    {
        $date_formate = \App\Model\Setting::getItem('date_format');
        $date_formate = date($date_formate,strtotime($date));
        return $date_formate;
    }
}

if ( ! function_exists('get_formated_time') )
{
    function get_formated_time($time,$format = "H:i A")
    {
        $create_time_object = date_create_from_format($format,$time);
        $time_formate = \App\Model\Setting::getItem('time_format');
        $time_formate = $create_time_object->format($time_formate);
        return $time_formate;
    }
}

if ( ! function_exists('langOption') ) {
    function langOption() {
        $path = base_path().'/resources/lang/';
        $lang = scandir($path);

        $t = array();
        foreach($lang as $value) {
            if($value === '.' || $value === '..') {continue;}
            if(is_dir($path . $value))
            {
                $fp = file_get_contents($path . $value.'/info.json');
                $fp = json_decode($fp,true);
                $t[] =  $fp ;
            }

        }
        return $t;
    }
}