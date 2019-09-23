<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Review_RatingReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Review_RatingReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Review_Rating_ID'
     * @return string 'Review_Rating_ID'
     */
    const VALUE_REVIEW_RATING_ID = 'Review_Rating_ID';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_WID
     * @uses self::VALUE_REVIEW_RATING_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_REVIEW_RATING_ID,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
