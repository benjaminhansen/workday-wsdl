<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_User-Based_Security_GroupsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for a Workday Account and the User-Based Security Group assignment data.
 * @subpackage Structs
 */
class Assign_User_Based_Security_GroupsType extends AbstractStructBase
{
    /**
     * The Workday_Account_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a System User reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\System_UserObjectType
     */
    public $Workday_Account_Reference;
    /**
     * The Assign_User_Based_Security_Groups_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_DataType
     */
    public $Assign_User_Based_Security_Groups_Data;
    /**
     * Constructor method for Assign_User-Based_Security_GroupsType
     * @uses Assign_User_Based_Security_GroupsType::setWorkday_Account_Reference()
     * @uses Assign_User_Based_Security_GroupsType::setAssign_User_Based_Security_Groups_Data()
     * @param \WorkdayWsdl\\StructType\System_UserObjectType $workday_Account_Reference
     * @param \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_DataType $assign_User_Based_Security_Groups_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\System_UserObjectType $workday_Account_Reference = null, \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_DataType $assign_User_Based_Security_Groups_Data = null)
    {
        $this
            ->setWorkday_Account_Reference($workday_Account_Reference)
            ->setAssign_User_Based_Security_Groups_Data($assign_User_Based_Security_Groups_Data);
    }
    /**
     * Get Workday_Account_Reference value
     * @return \WorkdayWsdl\\StructType\System_UserObjectType|null
     */
    public function getWorkday_Account_Reference()
    {
        return $this->Workday_Account_Reference;
    }
    /**
     * Set Workday_Account_Reference value
     * @param \WorkdayWsdl\\StructType\System_UserObjectType $workday_Account_Reference
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_GroupsType
     */
    public function setWorkday_Account_Reference(\WorkdayWsdl\\StructType\System_UserObjectType $workday_Account_Reference = null)
    {
        $this->Workday_Account_Reference = $workday_Account_Reference;
        return $this;
    }
    /**
     * Get Assign_User_Based_Security_Groups_Data value
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_DataType|null
     */
    public function getAssign_User_Based_Security_Groups_Data()
    {
        return $this->{'Assign_User-Based_Security_Groups_Data'};
    }
    /**
     * Set Assign_User_Based_Security_Groups_Data value
     * @param \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_DataType $assign_User_Based_Security_Groups_Data
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_GroupsType
     */
    public function setAssign_User_Based_Security_Groups_Data(\WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_DataType $assign_User_Based_Security_Groups_Data = null)
    {
        $this->Assign_User_Based_Security_Groups_Data = $this->{'Assign_User-Based_Security_Groups_Data'} = $assign_User_Based_Security_Groups_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_GroupsType
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
