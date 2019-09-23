<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Type_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Committee Type Request Criteria
 * @subpackage Structs
 */
class Committee_Type_Request_CriteriaType extends AbstractStructBase
{
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_Type_Request_CriteriaType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
