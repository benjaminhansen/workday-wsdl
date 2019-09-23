<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pronoun_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The pronoun data for a worker.
 * @subpackage Structs
 */
class Pronoun_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: The pronoun ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Pronoun_Name
     * Meta information extracted from the WSDL
     * - documentation: The pronoun for a worker.
     * - maxOccurs: 1
     * @var string
     */
    public $Pronoun_Name;
    /**
     * The Pronoun_Code
     * Meta information extracted from the WSDL
     * - documentation: The pronoun code.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Pronoun_Code;
    /**
     * The Pronoun_Description
     * Meta information extracted from the WSDL
     * - documentation: The pronoun description.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Pronoun_Description;
    /**
     * The Pronoun_Inactive
     * Meta information extracted from the WSDL
     * - documentation: The inactive flag for pronoun.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Pronoun_Inactive;
    /**
     * Constructor method for Pronoun_DataType
     * @uses Pronoun_DataType::setID()
     * @uses Pronoun_DataType::setPronoun_Name()
     * @uses Pronoun_DataType::setPronoun_Code()
     * @uses Pronoun_DataType::setPronoun_Description()
     * @uses Pronoun_DataType::setPronoun_Inactive()
     * @param string $iD
     * @param string $pronoun_Name
     * @param string $pronoun_Code
     * @param string $pronoun_Description
     * @param bool $pronoun_Inactive
     */
    public function __construct($iD = null, $pronoun_Name = null, $pronoun_Code = null, $pronoun_Description = null, $pronoun_Inactive = null)
    {
        $this
            ->setID($iD)
            ->setPronoun_Name($pronoun_Name)
            ->setPronoun_Code($pronoun_Code)
            ->setPronoun_Description($pronoun_Description)
            ->setPronoun_Inactive($pronoun_Inactive);
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
     * @return \StructType\Pronoun_DataType
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
     * Get Pronoun_Name value
     * @return string|null
     */
    public function getPronoun_Name()
    {
        return $this->Pronoun_Name;
    }
    /**
     * Set Pronoun_Name value
     * @param string $pronoun_Name
     * @return \StructType\Pronoun_DataType
     */
    public function setPronoun_Name($pronoun_Name = null)
    {
        // validation for constraint: string
        if (!is_null($pronoun_Name) && !is_string($pronoun_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pronoun_Name, true), gettype($pronoun_Name)), __LINE__);
        }
        $this->Pronoun_Name = $pronoun_Name;
        return $this;
    }
    /**
     * Get Pronoun_Code value
     * @return string|null
     */
    public function getPronoun_Code()
    {
        return $this->Pronoun_Code;
    }
    /**
     * Set Pronoun_Code value
     * @param string $pronoun_Code
     * @return \StructType\Pronoun_DataType
     */
    public function setPronoun_Code($pronoun_Code = null)
    {
        // validation for constraint: string
        if (!is_null($pronoun_Code) && !is_string($pronoun_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pronoun_Code, true), gettype($pronoun_Code)), __LINE__);
        }
        $this->Pronoun_Code = $pronoun_Code;
        return $this;
    }
    /**
     * Get Pronoun_Description value
     * @return string|null
     */
    public function getPronoun_Description()
    {
        return $this->Pronoun_Description;
    }
    /**
     * Set Pronoun_Description value
     * @param string $pronoun_Description
     * @return \StructType\Pronoun_DataType
     */
    public function setPronoun_Description($pronoun_Description = null)
    {
        // validation for constraint: string
        if (!is_null($pronoun_Description) && !is_string($pronoun_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pronoun_Description, true), gettype($pronoun_Description)), __LINE__);
        }
        $this->Pronoun_Description = $pronoun_Description;
        return $this;
    }
    /**
     * Get Pronoun_Inactive value
     * @return bool|null
     */
    public function getPronoun_Inactive()
    {
        return $this->Pronoun_Inactive;
    }
    /**
     * Set Pronoun_Inactive value
     * @param bool $pronoun_Inactive
     * @return \StructType\Pronoun_DataType
     */
    public function setPronoun_Inactive($pronoun_Inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($pronoun_Inactive) && !is_bool($pronoun_Inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pronoun_Inactive, true), gettype($pronoun_Inactive)), __LINE__);
        }
        $this->Pronoun_Inactive = $pronoun_Inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Pronoun_DataType
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
