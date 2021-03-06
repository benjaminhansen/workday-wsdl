<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Assign_User-Based_Security_Group_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Request Element for assigning Workday Accounts to a User-Based Security Group
 * @subpackage Structs
 */
class Put_Assign_User_Based_Security_Group_RequestType extends AbstractStructBase
{
    /**
     * The Assign_User_Based_Security_Group_Data
     * Meta information extracted from the WSDL
     * - documentation: Element contains One User-Based Security Group and Zero or more System Users.
     * @var \WorkdayWsdl\\StructType\Assign_User_Based_Security_Group_DataType
     */
    public $Assign_User_Based_Security_Group_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Assign_User-Based_Security_Group_RequestType
     * @uses Put_Assign_User_Based_Security_Group_RequestType::setAssign_User_Based_Security_Group_Data()
     * @uses Put_Assign_User_Based_Security_Group_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Assign_User_Based_Security_Group_DataType $assign_User_Based_Security_Group_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Assign_User_Based_Security_Group_DataType $assign_User_Based_Security_Group_Data = null, $version = null)
    {
        $this
            ->setAssign_User_Based_Security_Group_Data($assign_User_Based_Security_Group_Data)
            ->setVersion($version);
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
     * @return \WorkdayWsdl\\StructType\Put_Assign_User_Based_Security_Group_RequestType
     */
    public function setAssign_User_Based_Security_Group_Data(\WorkdayWsdl\\StructType\Assign_User_Based_Security_Group_DataType $assign_User_Based_Security_Group_Data = null)
    {
        $this->Assign_User_Based_Security_Group_Data = $this->{'Assign_User-Based_Security_Group_Data'} = $assign_User_Based_Security_Group_Data;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Put_Assign_User_Based_Security_Group_RequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Put_Assign_User_Based_Security_Group_RequestType
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
