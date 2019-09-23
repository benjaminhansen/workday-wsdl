<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Shift_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing all Work Shift data.
 * @subpackage Structs
 */
class Work_Shift_DataType extends AbstractStructBase
{
    /**
     * The Work_Shift_ID
     * Meta information extracted from the WSDL
     * - documentation: Work Shift ID. This is the unique identifier for a Work Shift.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Work_Shift_ID;
    /**
     * The Work_Shift_Name
     * Meta information extracted from the WSDL
     * - documentation: Name for the Work Shift.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Work_Shift_Name;
    /**
     * The Work_Shift_Description
     * Meta information extracted from the WSDL
     * - documentation: Description of the Work Shift.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Work_Shift_Description;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Location Reference. Reference to a Country or Country Region.
     * - minOccurs: 0
     * @var \StructType\Location_ContextObjectType
     */
    public $Location_Reference;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Flag indicating whether the Work Shift is inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Work_Shift_DataType
     * @uses Work_Shift_DataType::setWork_Shift_ID()
     * @uses Work_Shift_DataType::setWork_Shift_Name()
     * @uses Work_Shift_DataType::setWork_Shift_Description()
     * @uses Work_Shift_DataType::setLocation_Reference()
     * @uses Work_Shift_DataType::setInactive()
     * @param string $work_Shift_ID
     * @param string $work_Shift_Name
     * @param string $work_Shift_Description
     * @param \StructType\Location_ContextObjectType $location_Reference
     * @param bool $inactive
     */
    public function __construct($work_Shift_ID = null, $work_Shift_Name = null, $work_Shift_Description = null, \StructType\Location_ContextObjectType $location_Reference = null, $inactive = null)
    {
        $this
            ->setWork_Shift_ID($work_Shift_ID)
            ->setWork_Shift_Name($work_Shift_Name)
            ->setWork_Shift_Description($work_Shift_Description)
            ->setLocation_Reference($location_Reference)
            ->setInactive($inactive);
    }
    /**
     * Get Work_Shift_ID value
     * @return string|null
     */
    public function getWork_Shift_ID()
    {
        return $this->Work_Shift_ID;
    }
    /**
     * Set Work_Shift_ID value
     * @param string $work_Shift_ID
     * @return \StructType\Work_Shift_DataType
     */
    public function setWork_Shift_ID($work_Shift_ID = null)
    {
        // validation for constraint: string
        if (!is_null($work_Shift_ID) && !is_string($work_Shift_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($work_Shift_ID, true), gettype($work_Shift_ID)), __LINE__);
        }
        $this->Work_Shift_ID = $work_Shift_ID;
        return $this;
    }
    /**
     * Get Work_Shift_Name value
     * @return string|null
     */
    public function getWork_Shift_Name()
    {
        return $this->Work_Shift_Name;
    }
    /**
     * Set Work_Shift_Name value
     * @param string $work_Shift_Name
     * @return \StructType\Work_Shift_DataType
     */
    public function setWork_Shift_Name($work_Shift_Name = null)
    {
        // validation for constraint: string
        if (!is_null($work_Shift_Name) && !is_string($work_Shift_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($work_Shift_Name, true), gettype($work_Shift_Name)), __LINE__);
        }
        $this->Work_Shift_Name = $work_Shift_Name;
        return $this;
    }
    /**
     * Get Work_Shift_Description value
     * @return string|null
     */
    public function getWork_Shift_Description()
    {
        return $this->Work_Shift_Description;
    }
    /**
     * Set Work_Shift_Description value
     * @param string $work_Shift_Description
     * @return \StructType\Work_Shift_DataType
     */
    public function setWork_Shift_Description($work_Shift_Description = null)
    {
        // validation for constraint: string
        if (!is_null($work_Shift_Description) && !is_string($work_Shift_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($work_Shift_Description, true), gettype($work_Shift_Description)), __LINE__);
        }
        $this->Work_Shift_Description = $work_Shift_Description;
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
     * @return \StructType\Work_Shift_DataType
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
     * @return \StructType\Work_Shift_DataType
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
     * @return \StructType\Work_Shift_DataType
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
