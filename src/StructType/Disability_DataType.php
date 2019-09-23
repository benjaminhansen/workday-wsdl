<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Disability_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Disability data.
 * @subpackage Structs
 */
class Disability_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: The ID for the Disability (Disability_ID).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the Disability.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The code for the Disability.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The description for the Disability.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: The country the Disability is for.
     * - minOccurs: 0
     * @var \StructType\Location_ContextObjectType
     */
    public $Location_Reference;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: A boolean flag indicating whether the Disability is active or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Disability_DataType
     * @uses Disability_DataType::setID()
     * @uses Disability_DataType::setName()
     * @uses Disability_DataType::setCode()
     * @uses Disability_DataType::setDescription()
     * @uses Disability_DataType::setLocation_Reference()
     * @uses Disability_DataType::setInactive()
     * @param string $iD
     * @param string $name
     * @param string $code
     * @param string $description
     * @param \StructType\Location_ContextObjectType $location_Reference
     * @param bool $inactive
     */
    public function __construct($iD = null, $name = null, $code = null, $description = null, \StructType\Location_ContextObjectType $location_Reference = null, $inactive = null)
    {
        $this
            ->setID($iD)
            ->setName($name)
            ->setCode($code)
            ->setDescription($description)
            ->setLocation_Reference($location_Reference)
            ->setInactive($inactive);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\Disability_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\Disability_DataType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \StructType\Disability_DataType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\Disability_DataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Location_Reference value
     * @return \StructType\Location_ContextObjectType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \StructType\Location_ContextObjectType $location_Reference
     * @return \StructType\Disability_DataType
     */
    public function setLocation_Reference(\StructType\Location_ContextObjectType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \StructType\Disability_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Disability_DataType
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
