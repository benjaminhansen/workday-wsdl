<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Report_Safety_IncidentType StructType
 * Meta information extracted from the WSDL
 * - documentation: All of the information about the Safety Incident being returned.
 * @subpackage Structs
 */
class Report_Safety_IncidentType extends AbstractStructBase
{
    /**
     * The Safety_Incident_Reference
     * Meta information extracted from the WSDL
     * - documentation: The instance of the Safety Incident being returned.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Safety_IncidentObjectType
     */
    public $Safety_Incident_Reference;
    /**
     * The Report_Safety_Incident_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Report_Safety_Incident_DataType[]
     */
    public $Report_Safety_Incident_Data;
    /**
     * Constructor method for Report_Safety_IncidentType
     * @uses Report_Safety_IncidentType::setSafety_Incident_Reference()
     * @uses Report_Safety_IncidentType::setReport_Safety_Incident_Data()
     * @param \WorkdayWsdl\\StructType\Safety_IncidentObjectType $safety_Incident_Reference
     * @param \WorkdayWsdl\\StructType\Report_Safety_Incident_DataType[] $report_Safety_Incident_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Safety_IncidentObjectType $safety_Incident_Reference = null, array $report_Safety_Incident_Data = array())
    {
        $this
            ->setSafety_Incident_Reference($safety_Incident_Reference)
            ->setReport_Safety_Incident_Data($report_Safety_Incident_Data);
    }
    /**
     * Get Safety_Incident_Reference value
     * @return \WorkdayWsdl\\StructType\Safety_IncidentObjectType|null
     */
    public function getSafety_Incident_Reference()
    {
        return $this->Safety_Incident_Reference;
    }
    /**
     * Set Safety_Incident_Reference value
     * @param \WorkdayWsdl\\StructType\Safety_IncidentObjectType $safety_Incident_Reference
     * @return \WorkdayWsdl\\StructType\Report_Safety_IncidentType
     */
    public function setSafety_Incident_Reference(\WorkdayWsdl\\StructType\Safety_IncidentObjectType $safety_Incident_Reference = null)
    {
        $this->Safety_Incident_Reference = $safety_Incident_Reference;
        return $this;
    }
    /**
     * Get Report_Safety_Incident_Data value
     * @return \WorkdayWsdl\\StructType\Report_Safety_Incident_DataType[]|null
     */
    public function getReport_Safety_Incident_Data()
    {
        return $this->Report_Safety_Incident_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setReport_Safety_Incident_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReport_Safety_Incident_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReport_Safety_Incident_DataForArrayConstraintsFromSetReport_Safety_Incident_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $report_Safety_IncidentTypeReport_Safety_Incident_DataItem) {
            // validation for constraint: itemType
            if (!$report_Safety_IncidentTypeReport_Safety_Incident_DataItem instanceof \WorkdayWsdl\\StructType\Report_Safety_Incident_DataType) {
                $invalidValues[] = is_object($report_Safety_IncidentTypeReport_Safety_Incident_DataItem) ? get_class($report_Safety_IncidentTypeReport_Safety_Incident_DataItem) : sprintf('%s(%s)', gettype($report_Safety_IncidentTypeReport_Safety_Incident_DataItem), var_export($report_Safety_IncidentTypeReport_Safety_Incident_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Report_Safety_Incident_Data property can only contain items of type \WorkdayWsdl\\StructType\Report_Safety_Incident_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Report_Safety_Incident_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Report_Safety_Incident_DataType[] $report_Safety_Incident_Data
     * @return \WorkdayWsdl\\StructType\Report_Safety_IncidentType
     */
    public function setReport_Safety_Incident_Data(array $report_Safety_Incident_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($report_Safety_Incident_DataArrayErrorMessage = self::validateReport_Safety_Incident_DataForArrayConstraintsFromSetReport_Safety_Incident_Data($report_Safety_Incident_Data))) {
            throw new \InvalidArgumentException($report_Safety_Incident_DataArrayErrorMessage, __LINE__);
        }
        $this->Report_Safety_Incident_Data = $report_Safety_Incident_Data;
        return $this;
    }
    /**
     * Add item to Report_Safety_Incident_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Report_Safety_Incident_DataType $item
     * @return \WorkdayWsdl\\StructType\Report_Safety_IncidentType
     */
    public function addToReport_Safety_Incident_Data(\WorkdayWsdl\\StructType\Report_Safety_Incident_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Report_Safety_Incident_DataType) {
            throw new \InvalidArgumentException(sprintf('The Report_Safety_Incident_Data property can only contain items of type \WorkdayWsdl\\StructType\Report_Safety_Incident_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Report_Safety_Incident_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Report_Safety_IncidentType
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
