<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sexual_Orientation_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The sexual orientation data for a worker.
 * @subpackage Structs
 */
class Sexual_Orientation_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: The sexual orientation ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Sexual_Orientation_Name
     * Meta information extracted from the WSDL
     * - documentation: The sexual orientation for workers.
     * - maxOccurs: 1
     * @var string
     */
    public $Sexual_Orientation_Name;
    /**
     * The Sexual_Orientation_Code
     * Meta information extracted from the WSDL
     * - documentation: The sexual orientation code.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sexual_Orientation_Code;
    /**
     * The Sexual_Orientation_Description
     * Meta information extracted from the WSDL
     * - documentation: The sexual orientation description.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sexual_Orientation_Description;
    /**
     * The Sexual_Orientation_Inactive
     * Meta information extracted from the WSDL
     * - documentation: The inactive flag for sexual orientation.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Sexual_Orientation_Inactive;
    /**
     * Constructor method for Sexual_Orientation_DataType
     * @uses Sexual_Orientation_DataType::setID()
     * @uses Sexual_Orientation_DataType::setSexual_Orientation_Name()
     * @uses Sexual_Orientation_DataType::setSexual_Orientation_Code()
     * @uses Sexual_Orientation_DataType::setSexual_Orientation_Description()
     * @uses Sexual_Orientation_DataType::setSexual_Orientation_Inactive()
     * @param string $iD
     * @param string $sexual_Orientation_Name
     * @param string $sexual_Orientation_Code
     * @param string $sexual_Orientation_Description
     * @param bool $sexual_Orientation_Inactive
     */
    public function __construct($iD = null, $sexual_Orientation_Name = null, $sexual_Orientation_Code = null, $sexual_Orientation_Description = null, $sexual_Orientation_Inactive = null)
    {
        $this
            ->setID($iD)
            ->setSexual_Orientation_Name($sexual_Orientation_Name)
            ->setSexual_Orientation_Code($sexual_Orientation_Code)
            ->setSexual_Orientation_Description($sexual_Orientation_Description)
            ->setSexual_Orientation_Inactive($sexual_Orientation_Inactive);
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
     * @return \StructType\Sexual_Orientation_DataType
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
     * Get Sexual_Orientation_Name value
     * @return string|null
     */
    public function getSexual_Orientation_Name()
    {
        return $this->Sexual_Orientation_Name;
    }
    /**
     * Set Sexual_Orientation_Name value
     * @param string $sexual_Orientation_Name
     * @return \StructType\Sexual_Orientation_DataType
     */
    public function setSexual_Orientation_Name($sexual_Orientation_Name = null)
    {
        // validation for constraint: string
        if (!is_null($sexual_Orientation_Name) && !is_string($sexual_Orientation_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sexual_Orientation_Name, true), gettype($sexual_Orientation_Name)), __LINE__);
        }
        $this->Sexual_Orientation_Name = $sexual_Orientation_Name;
        return $this;
    }
    /**
     * Get Sexual_Orientation_Code value
     * @return string|null
     */
    public function getSexual_Orientation_Code()
    {
        return $this->Sexual_Orientation_Code;
    }
    /**
     * Set Sexual_Orientation_Code value
     * @param string $sexual_Orientation_Code
     * @return \StructType\Sexual_Orientation_DataType
     */
    public function setSexual_Orientation_Code($sexual_Orientation_Code = null)
    {
        // validation for constraint: string
        if (!is_null($sexual_Orientation_Code) && !is_string($sexual_Orientation_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sexual_Orientation_Code, true), gettype($sexual_Orientation_Code)), __LINE__);
        }
        $this->Sexual_Orientation_Code = $sexual_Orientation_Code;
        return $this;
    }
    /**
     * Get Sexual_Orientation_Description value
     * @return string|null
     */
    public function getSexual_Orientation_Description()
    {
        return $this->Sexual_Orientation_Description;
    }
    /**
     * Set Sexual_Orientation_Description value
     * @param string $sexual_Orientation_Description
     * @return \StructType\Sexual_Orientation_DataType
     */
    public function setSexual_Orientation_Description($sexual_Orientation_Description = null)
    {
        // validation for constraint: string
        if (!is_null($sexual_Orientation_Description) && !is_string($sexual_Orientation_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sexual_Orientation_Description, true), gettype($sexual_Orientation_Description)), __LINE__);
        }
        $this->Sexual_Orientation_Description = $sexual_Orientation_Description;
        return $this;
    }
    /**
     * Get Sexual_Orientation_Inactive value
     * @return bool|null
     */
    public function getSexual_Orientation_Inactive()
    {
        return $this->Sexual_Orientation_Inactive;
    }
    /**
     * Set Sexual_Orientation_Inactive value
     * @param bool $sexual_Orientation_Inactive
     * @return \StructType\Sexual_Orientation_DataType
     */
    public function setSexual_Orientation_Inactive($sexual_Orientation_Inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($sexual_Orientation_Inactive) && !is_bool($sexual_Orientation_Inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sexual_Orientation_Inactive, true), gettype($sexual_Orientation_Inactive)), __LINE__);
        }
        $this->Sexual_Orientation_Inactive = $sexual_Orientation_Inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Sexual_Orientation_DataType
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
