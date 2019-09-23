<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_User-Based_Security_Groups_Response_GroupType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Element wrapping the controls what information is returned in the Response Data content
 * @subpackage Structs
 */
class Assign_User_Based_Security_Groups_Response_GroupType extends AbstractStructBase
{
    /**
     * The Include_Reference
     * Meta information extracted from the WSDL
     * - documentation: Boolean flag to include Reference in response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Reference;
    /**
     * The Include_User_Based_Security_Group_Assignment_Data
     * Meta information extracted from the WSDL
     * - documentation: Boolean flag to indicate include or not the User-Based Security Groups assigned to the Workday Account
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_User_Based_Security_Group_Assignment_Data;
    /**
     * Constructor method for Assign_User-Based_Security_Groups_Response_GroupType
     * @uses Assign_User_Based_Security_Groups_Response_GroupType::setInclude_Reference()
     * @uses Assign_User_Based_Security_Groups_Response_GroupType::setInclude_User_Based_Security_Group_Assignment_Data()
     * @param bool $include_Reference
     * @param bool $include_User_Based_Security_Group_Assignment_Data
     */
    public function __construct($include_Reference = null, $include_User_Based_Security_Group_Assignment_Data = null)
    {
        $this
            ->setInclude_Reference($include_Reference)
            ->setInclude_User_Based_Security_Group_Assignment_Data($include_User_Based_Security_Group_Assignment_Data);
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
     * @return \StructType\Assign_User_Based_Security_Groups_Response_GroupType
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
     * Get Include_User_Based_Security_Group_Assignment_Data value
     * @return bool|null
     */
    public function getInclude_User_Based_Security_Group_Assignment_Data()
    {
        return $this->{'Include_User-Based_Security_Group_Assignment_Data'};
    }
    /**
     * Set Include_User_Based_Security_Group_Assignment_Data value
     * @param bool $include_User_Based_Security_Group_Assignment_Data
     * @return \StructType\Assign_User_Based_Security_Groups_Response_GroupType
     */
    public function setInclude_User_Based_Security_Group_Assignment_Data($include_User_Based_Security_Group_Assignment_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_User_Based_Security_Group_Assignment_Data) && !is_bool($include_User_Based_Security_Group_Assignment_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_User_Based_Security_Group_Assignment_Data, true), gettype($include_User_Based_Security_Group_Assignment_Data)), __LINE__);
        }
        $this->Include_User_Based_Security_Group_Assignment_Data = $this->{'Include_User-Based_Security_Group_Assignment_Data'} = $include_User_Based_Security_Group_Assignment_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Assign_User_Based_Security_Groups_Response_GroupType
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
