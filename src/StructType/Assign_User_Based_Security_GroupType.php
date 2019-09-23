<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_User-Based_Security_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element to include Optional User-Based Security Group Reference and the Element with User-Based Security Group and its member Workday Accounts
 * @subpackage Structs
 */
class Assign_User_Based_Security_GroupType extends AbstractStructBase
{
    /**
     * The User_Based_Security_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: User-Based Security Group Reference Id and Workday ID
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType
     */
    public $User_Based_Security_Group_Reference;
    /**
     * The Assign_User_Based_Security_Group_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Assign_User_Based_Security_Group_DataType
     */
    public $Assign_User_Based_Security_Group_Data;
    /**
     * Constructor method for Assign_User-Based_Security_GroupType
     * @uses Assign_User_Based_Security_GroupType::setUser_Based_Security_Group_Reference()
     * @uses Assign_User_Based_Security_GroupType::setAssign_User_Based_Security_Group_Data()
     * @param \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType $user_Based_Security_Group_Reference
     * @param \WorkdayWsdl\\StructType\Assign_User_Based_Security_Group_DataType $assign_User_Based_Security_Group_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType $user_Based_Security_Group_Reference = null, \WorkdayWsdl\\StructType\Assign_User_Based_Security_Group_DataType $assign_User_Based_Security_Group_Data = null)
    {
        $this
            ->setUser_Based_Security_Group_Reference($user_Based_Security_Group_Reference)
            ->setAssign_User_Based_Security_Group_Data($assign_User_Based_Security_Group_Data);
    }
    /**
     * Get User_Based_Security_Group_Reference value
     * @return \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType|null
     */
    public function getUser_Based_Security_Group_Reference()
    {
        return $this->{'User-Based_Security_Group_Reference'};
    }
    /**
     * Set User_Based_Security_Group_Reference value
     * @param \WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType $user_Based_Security_Group_Reference
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_GroupType
     */
    public function setUser_Based_Security_Group_Reference(\WorkdayWsdl\\StructType\User_Based_Security_GroupObjectType $user_Based_Security_Group_Reference = null)
    {
        $this->User_Based_Security_Group_Reference = $this->{'User-Based_Security_Group_Reference'} = $user_Based_Security_Group_Reference;
        return $this;
    }
    /**
     * Get Assign_User_Based_Security_Group_Data value
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_Group_DataType|null
     */
    public function getAssign_User_Based_Security_Group_Data()
    {
        return $this->{'Assign_User-Based_Security_Group_Data'};
    }
    /**
     * Set Assign_User_Based_Security_Group_Data value
     * @param \WorkdayWsdl\\StructType\Assign_User_Based_Security_Group_DataType $assign_User_Based_Security_Group_Data
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_GroupType
     */
    public function setAssign_User_Based_Security_Group_Data(\WorkdayWsdl\\StructType\Assign_User_Based_Security_Group_DataType $assign_User_Based_Security_Group_Data = null)
    {
        $this->Assign_User_Based_Security_Group_Data = $this->{'Assign_User-Based_Security_Group_Data'} = $assign_User_Based_Security_Group_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_GroupType
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
