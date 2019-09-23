<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Assign_User-Based_Security_Groups_ResponseType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Response for the Assign User-Based Security Groups to a Workday Account request.
 * @subpackage Structs
 */
class Put_Assign_User_Based_Security_Groups_ResponseType extends AbstractStructBase
{
    /**
     * The Workday_Account_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a System User reference
     * - minOccurs: 0
     * @var \StructType\System_UserObjectType
     */
    public $Workday_Account_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Assign_User-Based_Security_Groups_ResponseType
     * @uses Put_Assign_User_Based_Security_Groups_ResponseType::setWorkday_Account_Reference()
     * @uses Put_Assign_User_Based_Security_Groups_ResponseType::setVersion()
     * @param \StructType\System_UserObjectType $workday_Account_Reference
     * @param string $version
     */
    public function __construct(\StructType\System_UserObjectType $workday_Account_Reference = null, $version = null)
    {
        $this
            ->setWorkday_Account_Reference($workday_Account_Reference)
            ->setVersion($version);
    }
    /**
     * Get Workday_Account_Reference value
     * @return \StructType\System_UserObjectType|null
     */
    public function getWorkday_Account_Reference()
    {
        return $this->Workday_Account_Reference;
    }
    /**
     * Set Workday_Account_Reference value
     * @param \StructType\System_UserObjectType $workday_Account_Reference
     * @return \StructType\Put_Assign_User_Based_Security_Groups_ResponseType
     */
    public function setWorkday_Account_Reference(\StructType\System_UserObjectType $workday_Account_Reference = null)
    {
        $this->Workday_Account_Reference = $workday_Account_Reference;
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
     * @return \StructType\Put_Assign_User_Based_Security_Groups_ResponseType
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
     * @return \StructType\Put_Assign_User_Based_Security_Groups_ResponseType
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
