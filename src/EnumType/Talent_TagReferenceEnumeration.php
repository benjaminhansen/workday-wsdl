<?php

namespace EnumType;

/**
 * This class stands for Talent_TagReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Talent_TagReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Competency_ID'
     * @return string 'Competency_ID'
     */
    const VALUE_COMPETENCY_ID = 'Competency_ID';
    /**
     * Constant for value 'Development_Item_ID'
     * @return string 'Development_Item_ID'
     */
    const VALUE_DEVELOPMENT_ITEM_ID = 'Development_Item_ID';
    /**
     * Constant for value 'Gig_ID'
     * @return string 'Gig_ID'
     */
    const VALUE_GIG_ID = 'Gig_ID';
    /**
     * Constant for value 'Job_Profile_ID'
     * @return string 'Job_Profile_ID'
     */
    const VALUE_JOB_PROFILE_ID = 'Job_Profile_ID';
    /**
     * Constant for value 'Training_ID'
     * @return string 'Training_ID'
     */
    const VALUE_TRAINING_ID = 'Training_ID';
    /**
     * Constant for value 'Work_Experience_ID'
     * @return string 'Work_Experience_ID'
     */
    const VALUE_WORK_EXPERIENCE_ID = 'Work_Experience_ID';
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
     * @uses self::VALUE_COMPETENCY_ID
     * @uses self::VALUE_DEVELOPMENT_ITEM_ID
     * @uses self::VALUE_GIG_ID
     * @uses self::VALUE_JOB_PROFILE_ID
     * @uses self::VALUE_TRAINING_ID
     * @uses self::VALUE_WORK_EXPERIENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COMPETENCY_ID,
            self::VALUE_DEVELOPMENT_ITEM_ID,
            self::VALUE_GIG_ID,
            self::VALUE_JOB_PROFILE_ID,
            self::VALUE_TRAINING_ID,
            self::VALUE_WORK_EXPERIENCE_ID,
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
