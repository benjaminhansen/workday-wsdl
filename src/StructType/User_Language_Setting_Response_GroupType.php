<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for User_Language_Setting_Response_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: User Language Setting Response Group
 * @subpackage Structs
 */
class User_Language_Setting_Response_GroupType extends AbstractStructBase
{
    /**
     * The Include_Reference
     * Meta information extracted from the WSDL
     * - documentation: Include Reference
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Reference;
    /**
     * Constructor method for User_Language_Setting_Response_GroupType
     * @uses User_Language_Setting_Response_GroupType::setInclude_Reference()
     * @param bool $include_Reference
     */
    public function __construct($include_Reference = null)
    {
        $this
            ->setInclude_Reference($include_Reference);
    }
    /**
     * Get Include_Reference value
     * @return bool|null
     */
    public function getInclude_Reference()
    {
        return $this->Include_Reference;
    }
    /**
     * Set Include_Reference value
     * @param bool $include_Reference
     * @return \StructType\User_Language_Setting_Response_GroupType
     */
    public function setInclude_Reference($include_Reference = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Reference) && !is_bool($include_Reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Reference, true), gettype($include_Reference)), __LINE__);
        }
        $this->Include_Reference = $include_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\User_Language_Setting_Response_GroupType
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
