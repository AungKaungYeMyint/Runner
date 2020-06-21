<?php
/**
 * Created by PhpStorm.
 * User: myathtut
 * Date: 7/16/18
 * Time: 10:45 PM
 */

namespace App\Utils;

class PhoneNumberConverter
{
    public static  function getRandomAlphaNumericString(int $length = 10){
        $stripped_string = preg_replace("/[^a-zA-Z0-9]+/", "", uniqid());
        $cut_off_letter = substr($stripped_string, strlen($stripped_string) - $length);
        $shuffle_string = str_shuffle($cut_off_letter);
        return $shuffle_string;
    }



    public static function phoneNo09To959($phoneNumber)
    {
        $phone = $phoneNumber;
            //959
        if  ( substr($phone,0,3)=='959'){
            return $phone;
        }
        else if (substr($phone, 0, 2) == '09') {
            //phone number starts with 09
            $phoneNumberWithoutInitialZero = substr($phone, 1);
            return '95' . $phoneNumberWithoutInitialZero;
        } else if ($phone[0] == '+') {
            //phone number starts with +959
            $phoneNumberWithoutInitialPlus = substr($phone, 1);
            return $phoneNumberWithoutInitialPlus;
        } else {
            return '959'.$phone;
        }

    }

    public static function convertSearchKeyword($keyword){

        if (is_numeric($keyword)) {
            $search = PhoneNumberConverter::phoneNo09To959($keyword);
        } else {
            $search = FontConverter::UniConverter($keyword);
        }

        return $search;
    }
}
