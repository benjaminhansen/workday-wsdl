<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Difficulty_to_Fill_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the difficulty to fill data.
 * @subpackage Structs
 */
class Difficulty_to_Fill_DataType extends AbstractStructBase
{
    /**
     * The Difficulty_to_Fill_Sort_Order
     * Meta information extracted from the WSDL
     * - documentation: Optional line order. If specified, lines will be sorted by this value when displayed and when invoice is printed.
     * - maxOccurs: 1
     * @var string
     */
    public $Difficulty_to_Fill_Sort_Order;
    /**
     * The Difficulty_to_Fill_Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the difficulty level.
     * - maxOccurs: 1
     * @var string
     */
    public $Difficulty_to_Fill_Name;
    /**
     * The Difficulty_to_Fill_Code
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the difficulty to fill.
     * - maxOccurs: 1
     * @var string
     */
    public $Difficulty_to_Fill_Code;
    /**
     * The Difficulty_to_Fill_Description
     * Meta information extracted from the WSDL
     * - documentation: Description of the difficulty level.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Difficulty_to_Fill_Description;
    /**
     * The Difficulty_to_Fill_Inactive
     * Meta information extracted from the WSDL
     * - documentation: Whether or not the difficulty is inactive or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Difficulty_to_Fill_Inactive;
    /**
     * Constructor method for Difficulty_to_Fill_DataType
     * @uses Difficulty_to_Fill_DataType::setDifficulty_to_Fill_Sort_Order()
     * @uses Difficulty_to_Fill_DataType::setDifficulty_to_Fill_Name()
     * @uses Difficulty_to_Fill_DataType::setDifficulty_to_Fill_Code()
     * @uses Difficulty_to_Fill_DataType::setDifficulty_to_Fill_Description()
     * @uses Difficulty_to_Fill_DataType::setDifficulty_to_Fill_Inactive()
     * @param string $difficulty_to_Fill_Sort_Order
     * @param string $difficulty_to_Fill_Name
     * @param string $difficulty_to_Fill_Code
     * @param string $difficulty_to_Fill_Description
     * @param bool $difficulty_to_Fill_Inactive
     */
    public function __construct($difficulty_to_Fill_Sort_Order = null, $difficulty_to_Fill_Name = null, $difficulty_to_Fill_Code = null, $difficulty_to_Fill_Description = null, $difficulty_to_Fill_Inactive = null)
    {
        $this
            ->setDifficulty_to_Fill_Sort_Order($difficulty_to_Fill_Sort_Order)
            ->setDifficulty_to_Fill_Name($difficulty_to_Fill_Name)
            ->setDifficulty_to_Fill_Code($difficulty_to_Fill_Code)
            ->setDifficulty_to_Fill_Description($difficulty_to_Fill_Description)
            ->setDifficulty_to_Fill_Inactive($difficulty_to_Fill_Inactive);
    }
    /**
     * Get Difficulty_to_Fill_Sort_Order value
     * @return string|null
     */
    public function getDifficulty_to_Fill_Sort_Order()
    {
        return $this->Difficulty_to_Fill_Sort_Order;
    }
    /**
     * Set Difficulty_to_Fill_Sort_Order value
     * @param string $difficulty_to_Fill_Sort_Order
     * @return \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType
     */
    public function setDifficulty_to_Fill_Sort_Order($difficulty_to_Fill_Sort_Order = null)
    {
        // validation for constraint: string
        if (!is_null($difficulty_to_Fill_Sort_Order) && !is_string($difficulty_to_Fill_Sort_Order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($difficulty_to_Fill_Sort_Order, true), gettype($difficulty_to_Fill_Sort_Order)), __LINE__);
        }
        $this->Difficulty_to_Fill_Sort_Order = $difficulty_to_Fill_Sort_Order;
        return $this;
    }
    /**
     * Get Difficulty_to_Fill_Name value
     * @return string|null
     */
    public function getDifficulty_to_Fill_Name()
    {
        return $this->Difficulty_to_Fill_Name;
    }
    /**
     * Set Difficulty_to_Fill_Name value
     * @param string $difficulty_to_Fill_Name
     * @return \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType
     */
    public function setDifficulty_to_Fill_Name($difficulty_to_Fill_Name = null)
    {
        // validation for constraint: string
        if (!is_null($difficulty_to_Fill_Name) && !is_string($difficulty_to_Fill_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($difficulty_to_Fill_Name, true), gettype($difficulty_to_Fill_Name)), __LINE__);
        }
        $this->Difficulty_to_Fill_Name = $difficulty_to_Fill_Name;
        return $this;
    }
    /**
     * Get Difficulty_to_Fill_Code value
     * @return string|null
     */
    public function getDifficulty_to_Fill_Code()
    {
        return $this->Difficulty_to_Fill_Code;
    }
    /**
     * Set Difficulty_to_Fill_Code value
     * @param string $difficulty_to_Fill_Code
     * @return \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType
     */
    public function setDifficulty_to_Fill_Code($difficulty_to_Fill_Code = null)
    {
        // validation for constraint: string
        if (!is_null($difficulty_to_Fill_Code) && !is_string($difficulty_to_Fill_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($difficulty_to_Fill_Code, true), gettype($difficulty_to_Fill_Code)), __LINE__);
        }
        $this->Difficulty_to_Fill_Code = $difficulty_to_Fill_Code;
        return $this;
    }
    /**
     * Get Difficulty_to_Fill_Description value
     * @return string|null
     */
    public function getDifficulty_to_Fill_Description()
    {
        return $this->Difficulty_to_Fill_Description;
    }
    /**
     * Set Difficulty_to_Fill_Description value
     * @param string $difficulty_to_Fill_Description
     * @return \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType
     */
    public function setDifficulty_to_Fill_Description($difficulty_to_Fill_Description = null)
    {
        // validation for constraint: string
        if (!is_null($difficulty_to_Fill_Description) && !is_string($difficulty_to_Fill_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($difficulty_to_Fill_Description, true), gettype($difficulty_to_Fill_Description)), __LINE__);
        }
        $this->Difficulty_to_Fill_Description = $difficulty_to_Fill_Description;
        return $this;
    }
    /**
     * Get Difficulty_to_Fill_Inactive value
     * @return bool|null
     */
    public function getDifficulty_to_Fill_Inactive()
    {
        return $this->Difficulty_to_Fill_Inactive;
    }
    /**
     * Set Difficulty_to_Fill_Inactive value
     * @param bool $difficulty_to_Fill_Inactive
     * @return \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType
     */
    public function setDifficulty_to_Fill_Inactive($difficulty_to_Fill_Inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($difficulty_to_Fill_Inactive) && !is_bool($difficulty_to_Fill_Inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($difficulty_to_Fill_Inactive, true), gettype($difficulty_to_Fill_Inactive)), __LINE__);
        }
        $this->Difficulty_to_Fill_Inactive = $difficulty_to_Fill_Inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Difficulty_to_Fill_DataType
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
