<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Related_Person_RelationshipReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Related_Person_RelationshipReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Related_Person_Relationship_ID'
     * @return string 'Related_Person_Relationship_ID'
     */
    const VALUE_RELATED_PERSON_RELATIONSHIP_ID = 'Related_Person_Relationship_ID';
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
     * @uses self::VALUE_RELATED_PERSON_RELATIONSHIP_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_RELATED_PERSON_RELATIONSHIP_ID,
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
