<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Gender_Identity_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The gender identity data for workers.
 * @subpackage Structs
 */
class Gender_Identity_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: The gender identity ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Gender_Identity_Name
     * Meta information extracted from the WSDL
     * - documentation: The gender identity for workers.
     * - maxOccurs: 1
     * @var string
     */
    public $Gender_Identity_Name;
    /**
     * The Gender_Identity_Code
     * Meta information extracted from the WSDL
     * - documentation: The gender identity code.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Gender_Identity_Code;
    /**
     * The Gender_Identity_Description
     * Meta information extracted from the WSDL
     * - documentation: The gender identity description.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Gender_Identity_Description;
    /**
     * The Gender_Identity_Inactive
     * Meta information extracted from the WSDL
     * - documentation: The inactive flag for gender identity.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Gender_Identity_Inactive;
    /**
     * Constructor method for Gender_Identity_DataType
     * @uses Gender_Identity_DataType::setID()
     * @uses Gender_Identity_DataType::setGender_Identity_Name()
     * @uses Gender_Identity_DataType::setGender_Identity_Code()
     * @uses Gender_Identity_DataType::setGender_Identity_Description()
     * @uses Gender_Identity_DataType::setGender_Identity_Inactive()
     * @param string $iD
     * @param string $gender_Identity_Name
     * @param string $gender_Identity_Code
     * @param string $gender_Identity_Description
     * @param bool $gender_Identity_Inactive
     */
    public function __construct($iD = null, $gender_Identity_Name = null, $gender_Identity_Code = null, $gender_Identity_Description = null, $gender_Identity_Inactive = null)
    {
        $this
            ->setID($iD)
            ->setGender_Identity_Name($gender_Identity_Name)
            ->setGender_Identity_Code($gender_Identity_Code)
            ->setGender_Identity_Description($gender_Identity_Description)
            ->setGender_Identity_Inactive($gender_Identity_Inactive);
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
     * @return \WorkdayWsdl\\StructType\Gender_Identity_DataType
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
     * Get Gender_Identity_Name value
     * @return string|null
     */
    public function getGender_Identity_Name()
    {
        return $this->Gender_Identity_Name;
    }
    /**
     * Set Gender_Identity_Name value
     * @param string $gender_Identity_Name
     * @return \WorkdayWsdl\\StructType\Gender_Identity_DataType
     */
    public function setGender_Identity_Name($gender_Identity_Name = null)
    {
        // validation for constraint: string
        if (!is_null($gender_Identity_Name) && !is_string($gender_Identity_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gender_Identity_Name, true), gettype($gender_Identity_Name)), __LINE__);
        }
        $this->Gender_Identity_Name = $gender_Identity_Name;
        return $this;
    }
    /**
     * Get Gender_Identity_Code value
     * @return string|null
     */
    public function getGender_Identity_Code()
    {
        return $this->Gender_Identity_Code;
    }
    /**
     * Set Gender_Identity_Code value
     * @param string $gender_Identity_Code
     * @return \WorkdayWsdl\\StructType\Gender_Identity_DataType
     */
    public function setGender_Identity_Code($gender_Identity_Code = null)
    {
        // validation for constraint: string
        if (!is_null($gender_Identity_Code) && !is_string($gender_Identity_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gender_Identity_Code, true), gettype($gender_Identity_Code)), __LINE__);
        }
        $this->Gender_Identity_Code = $gender_Identity_Code;
        return $this;
    }
    /**
     * Get Gender_Identity_Description value
     * @return string|null
     */
    public function getGender_Identity_Description()
    {
        return $this->Gender_Identity_Description;
    }
    /**
     * Set Gender_Identity_Description value
     * @param string $gender_Identity_Description
     * @return \WorkdayWsdl\\StructType\Gender_Identity_DataType
     */
    public function setGender_Identity_Description($gender_Identity_Description = null)
    {
        // validation for constraint: string
        if (!is_null($gender_Identity_Description) && !is_string($gender_Identity_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gender_Identity_Description, true), gettype($gender_Identity_Description)), __LINE__);
        }
        $this->Gender_Identity_Description = $gender_Identity_Description;
        return $this;
    }
    /**
     * Get Gender_Identity_Inactive value
     * @return bool|null
     */
    public function getGender_Identity_Inactive()
    {
        return $this->Gender_Identity_Inactive;
    }
    /**
     * Set Gender_Identity_Inactive value
     * @param bool $gender_Identity_Inactive
     * @return \WorkdayWsdl\\StructType\Gender_Identity_DataType
     */
    public function setGender_Identity_Inactive($gender_Identity_Inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($gender_Identity_Inactive) && !is_bool($gender_Identity_Inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($gender_Identity_Inactive, true), gettype($gender_Identity_Inactive)), __LINE__);
        }
        $this->Gender_Identity_Inactive = $gender_Identity_Inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Gender_Identity_DataType
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
