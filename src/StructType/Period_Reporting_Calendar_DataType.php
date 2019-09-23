<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Period_Reporting_Calendar_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Form to put, update, and view a Period Reporting Calendar
 * @subpackage Structs
 */
class Period_Reporting_Calendar_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID of the Period Reporting Calendar
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Reporting_Calendar_Name
     * Meta information extracted from the WSDL
     * - documentation: Period Reporting Calendar Name
     * - maxOccurs: 1
     * @var string
     */
    public $Reporting_Calendar_Name;
    /**
     * The Academic_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Academic Units the Period Reporting Calendar is restricted to
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_UnitObjectType[]
     */
    public $Academic_Unit_Reference;
    /**
     * The Default_Calendar
     * Meta information extracted from the WSDL
     * - documentation: If true, the Period Reporting calendar is the default for the system or the academic unit
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Default_Calendar;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: if true, the Period Reporting Calendar is inactive
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Period_Reporting_Calendar_Row_Data
     * Meta information extracted from the WSDL
     * - documentation: Data per Period of the Period Reporting Calendar
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType[]
     */
    public $Period_Reporting_Calendar_Row_Data;
    /**
     * Constructor method for Period_Reporting_Calendar_DataType
     * @uses Period_Reporting_Calendar_DataType::setID()
     * @uses Period_Reporting_Calendar_DataType::setReporting_Calendar_Name()
     * @uses Period_Reporting_Calendar_DataType::setAcademic_Unit_Reference()
     * @uses Period_Reporting_Calendar_DataType::setDefault_Calendar()
     * @uses Period_Reporting_Calendar_DataType::setInactive()
     * @uses Period_Reporting_Calendar_DataType::setPeriod_Reporting_Calendar_Row_Data()
     * @param string $iD
     * @param string $reporting_Calendar_Name
     * @param \WorkdayWsdl\\StructType\Academic_UnitObjectType[] $academic_Unit_Reference
     * @param bool $default_Calendar
     * @param bool $inactive
     * @param \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType[] $period_Reporting_Calendar_Row_Data
     */
    public function __construct($iD = null, $reporting_Calendar_Name = null, array $academic_Unit_Reference = array(), $default_Calendar = null, $inactive = null, array $period_Reporting_Calendar_Row_Data = array())
    {
        $this
            ->setID($iD)
            ->setReporting_Calendar_Name($reporting_Calendar_Name)
            ->setAcademic_Unit_Reference($academic_Unit_Reference)
            ->setDefault_Calendar($default_Calendar)
            ->setInactive($inactive)
            ->setPeriod_Reporting_Calendar_Row_Data($period_Reporting_Calendar_Row_Data);
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
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType
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
     * Get Reporting_Calendar_Name value
     * @return string|null
     */
    public function getReporting_Calendar_Name()
    {
        return $this->Reporting_Calendar_Name;
    }
    /**
     * Set Reporting_Calendar_Name value
     * @param string $reporting_Calendar_Name
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType
     */
    public function setReporting_Calendar_Name($reporting_Calendar_Name = null)
    {
        // validation for constraint: string
        if (!is_null($reporting_Calendar_Name) && !is_string($reporting_Calendar_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reporting_Calendar_Name, true), gettype($reporting_Calendar_Name)), __LINE__);
        }
        $this->Reporting_Calendar_Name = $reporting_Calendar_Name;
        return $this;
    }
    /**
     * Get Academic_Unit_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_UnitObjectType[]|null
     */
    public function getAcademic_Unit_Reference()
    {
        return $this->Academic_Unit_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Unit_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Unit_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_Unit_ReferenceForArrayConstraintsFromSetAcademic_Unit_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $period_Reporting_Calendar_DataTypeAcademic_Unit_ReferenceItem) {
            // validation for constraint: itemType
            if (!$period_Reporting_Calendar_DataTypeAcademic_Unit_ReferenceItem instanceof \WorkdayWsdl\\StructType\Academic_UnitObjectType) {
                $invalidValues[] = is_object($period_Reporting_Calendar_DataTypeAcademic_Unit_ReferenceItem) ? get_class($period_Reporting_Calendar_DataTypeAcademic_Unit_ReferenceItem) : sprintf('%s(%s)', gettype($period_Reporting_Calendar_DataTypeAcademic_Unit_ReferenceItem), var_export($period_Reporting_Calendar_DataTypeAcademic_Unit_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Unit_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_UnitObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Unit_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_UnitObjectType[] $academic_Unit_Reference
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType
     */
    public function setAcademic_Unit_Reference(array $academic_Unit_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_Unit_ReferenceArrayErrorMessage = self::validateAcademic_Unit_ReferenceForArrayConstraintsFromSetAcademic_Unit_Reference($academic_Unit_Reference))) {
            throw new \InvalidArgumentException($academic_Unit_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Academic_Unit_Reference = $academic_Unit_Reference;
        return $this;
    }
    /**
     * Add item to Academic_Unit_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_UnitObjectType $item
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType
     */
    public function addToAcademic_Unit_Reference(\WorkdayWsdl\\StructType\Academic_UnitObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Academic_UnitObjectType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Unit_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_UnitObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Unit_Reference[] = $item;
        return $this;
    }
    /**
     * Get Default_Calendar value
     * @return bool|null
     */
    public function getDefault_Calendar()
    {
        return $this->Default_Calendar;
    }
    /**
     * Set Default_Calendar value
     * @param bool $default_Calendar
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType
     */
    public function setDefault_Calendar($default_Calendar = null)
    {
        // validation for constraint: boolean
        if (!is_null($default_Calendar) && !is_bool($default_Calendar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($default_Calendar, true), gettype($default_Calendar)), __LINE__);
        }
        $this->Default_Calendar = $default_Calendar;
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
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType
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
     * Get Period_Reporting_Calendar_Row_Data value
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType[]|null
     */
    public function getPeriod_Reporting_Calendar_Row_Data()
    {
        return $this->Period_Reporting_Calendar_Row_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPeriod_Reporting_Calendar_Row_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriod_Reporting_Calendar_Row_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriod_Reporting_Calendar_Row_DataForArrayConstraintsFromSetPeriod_Reporting_Calendar_Row_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $period_Reporting_Calendar_DataTypePeriod_Reporting_Calendar_Row_DataItem) {
            // validation for constraint: itemType
            if (!$period_Reporting_Calendar_DataTypePeriod_Reporting_Calendar_Row_DataItem instanceof \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType) {
                $invalidValues[] = is_object($period_Reporting_Calendar_DataTypePeriod_Reporting_Calendar_Row_DataItem) ? get_class($period_Reporting_Calendar_DataTypePeriod_Reporting_Calendar_Row_DataItem) : sprintf('%s(%s)', gettype($period_Reporting_Calendar_DataTypePeriod_Reporting_Calendar_Row_DataItem), var_export($period_Reporting_Calendar_DataTypePeriod_Reporting_Calendar_Row_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Period_Reporting_Calendar_Row_Data property can only contain items of type \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Period_Reporting_Calendar_Row_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType[] $period_Reporting_Calendar_Row_Data
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType
     */
    public function setPeriod_Reporting_Calendar_Row_Data(array $period_Reporting_Calendar_Row_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($period_Reporting_Calendar_Row_DataArrayErrorMessage = self::validatePeriod_Reporting_Calendar_Row_DataForArrayConstraintsFromSetPeriod_Reporting_Calendar_Row_Data($period_Reporting_Calendar_Row_Data))) {
            throw new \InvalidArgumentException($period_Reporting_Calendar_Row_DataArrayErrorMessage, __LINE__);
        }
        $this->Period_Reporting_Calendar_Row_Data = $period_Reporting_Calendar_Row_Data;
        return $this;
    }
    /**
     * Add item to Period_Reporting_Calendar_Row_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType $item
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType
     */
    public function addToPeriod_Reporting_Calendar_Row_Data(\WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType) {
            throw new \InvalidArgumentException(sprintf('The Period_Reporting_Calendar_Row_Data property can only contain items of type \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Row_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Period_Reporting_Calendar_Row_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType
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
