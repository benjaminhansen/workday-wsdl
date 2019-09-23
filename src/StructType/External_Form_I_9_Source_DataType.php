<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Form_I-9_Source_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: External Form I-9 Source Data
 * @subpackage Structs
 */
class External_Form_I_9_Source_DataType extends AbstractStructBase
{
    /**
     * The External_Form_I_9_Source_Name
     * Meta information extracted from the WSDL
     * - documentation: External Form I-9 Source Name
     * - maxOccurs: 1
     * @var string
     */
    public $External_Form_I_9_Source_Name;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Inactive
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The External_Form_I_9_Source_ID
     * Meta information extracted from the WSDL
     * - documentation: External Form I-9 Source ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $External_Form_I_9_Source_ID;
    /**
     * Constructor method for External_Form_I-9_Source_DataType
     * @uses External_Form_I_9_Source_DataType::setExternal_Form_I_9_Source_Name()
     * @uses External_Form_I_9_Source_DataType::setInactive()
     * @uses External_Form_I_9_Source_DataType::setExternal_Form_I_9_Source_ID()
     * @param string $external_Form_I_9_Source_Name
     * @param bool $inactive
     * @param string $external_Form_I_9_Source_ID
     */
    public function __construct($external_Form_I_9_Source_Name = null, $inactive = null, $external_Form_I_9_Source_ID = null)
    {
        $this
            ->setExternal_Form_I_9_Source_Name($external_Form_I_9_Source_Name)
            ->setInactive($inactive)
            ->setExternal_Form_I_9_Source_ID($external_Form_I_9_Source_ID);
    }
    /**
     * Get external_Form_I_Source_Name value
     * @return external_Form_I_Source_Name
     */
    public function getExternal_Form_I_9_Source_Name()
    {
        return $this->{'External_Form_I-9_Source_Name'};
    }
    /**
     * Set external_Form_I_Source_Name value
     * @param external_Form_I_Source_Name $external_Form_I_Source_Name
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType
     */
    public function setExternal_Form_I_9_Source_Name($external_Form_I_9_Source_Name = null)
    {
        // validation for constraint: string
        if (!is_null($external_Form_I_9_Source_Name) && !is_string($external_Form_I_9_Source_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($external_Form_I_9_Source_Name, true), gettype($external_Form_I_9_Source_Name)), __LINE__);
        }
        $this->External_Form_I_9_Source_Name = $this->{'External_Form_I-9_Source_Name'} = $external_Form_I_9_Source_Name;
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
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType
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
     * Get external_Form_I_Source_ID value
     * @return external_Form_I_Source_ID
     */
    public function getExternal_Form_I_9_Source_ID()
    {
        return $this->{'External_Form_I-9_Source_ID'};
    }
    /**
     * Set external_Form_I_Source_ID value
     * @param external_Form_I_Source_ID $external_Form_I_Source_ID
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType
     */
    public function setExternal_Form_I_9_Source_ID($external_Form_I_9_Source_ID = null)
    {
        // validation for constraint: string
        if (!is_null($external_Form_I_9_Source_ID) && !is_string($external_Form_I_9_Source_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($external_Form_I_9_Source_ID, true), gettype($external_Form_I_9_Source_ID)), __LINE__);
        }
        $this->External_Form_I_9_Source_ID = $this->{'External_Form_I-9_Source_ID'} = $external_Form_I_9_Source_ID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Source_DataType
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
