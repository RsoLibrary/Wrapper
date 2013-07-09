<?php

namespace Rso\Component;

use
    Rso\StdObject\RsoArray,
    Rso\StdObject\RsoDictionary,
    Rso\StdObject\RsoMutableArray,
    Rso\StdObject\RsoMutableDictionary,
    Rso\StdObject\RsoNull,
    Rso\StdObject\RsoNumber,
    Rso\StdObject\RsoString;

class Wrapper
{
    /**
     * Creates new instance of RsoArray
     * 
     * @param Array initial array
     *
     * @return RsoArray
     */
    public function newArray($array = array())
    {
        return new RsoArray($array);
    }

    /**
     * Creates new instance of RsoDictionary
     * 
     * @param Array initial dictionary
     *
     * @return RsoDictionary
     */
    public function newDictionary($dictionary = array())
    {
        return new RsoDictionary($dictionary);
    }

    /**
     * Creates new instance of RsoMutableArray
     * 
     * @param Array initial array
     *
     * @return RsoMutableArray
     */
    public function newMutableArray($array = array())
    {
        return new RsoMutableArray($array);
    }

    /**
     * Creates new instance of RsoMutableDictionary
     * 
     * @param Array initial dictionary
     *
     * @return RsoMutableDictionary
     */
    public function newMutableDictionary($dictionary = array())
    {
        return new RsoMutableDictionary($dictionary);
    }

    /**
     * Creates new instance of RsoNull
     * 
     * @param Null null object
     *
     * @return RsoNull
     */
    public function newNull($null = null)
    {
        return new RsoNull($null);
    }

    /**
     * Creates new instance of RsoNumber
     * 
     * @param Int initil number
     *
     * @return RsoNumber
     */
    public function newNumber($number = 0)
    {
        return new RsoNumber($number);
    }

    /**
     * Creates new instance of RsoString
     * 
     * @param String initil String
     *
     * @return RsoString
     */
    public function newString($string = "")
    {
        return new RsoString($string);
    }
}