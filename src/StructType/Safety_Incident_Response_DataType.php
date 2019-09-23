<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Safety Incident Response Data
 * @subpackage Structs
 */
class Safety_Incident_Response_DataType extends AbstractStructBase
{
    /**
     * The Report_Safety_Incident
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Report_Safety_IncidentType[]
     */
    public $Report_Safety_Incident;
    /**
     * Constructor method for Safety_Incident_Response_DataType
     * @uses Safety_Incident_Response_DataType::setReport_Safety_Incident()
     * @param \StructType\Report_Safety_IncidentType[] $report_Safety_Incident
     */
    public function __construct(array $report_Safety_Incident = array())
    {
        $this
            ->setReport_Safety_Incident($report_Safety_Incident);
    }
    /**
     * Get Report_Safety_Incident value
     * @return \StructType\Report_Safety_IncidentType[]|null
     */
    public function getReport_Safety_Incident()
    {
        return $this->Report_Safety_Incident;
    }
    /**
     * This method is responsible for validating the values passed to the setReport_Safety_Incident method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReport_Safety_Incident method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReport_Safety_IncidentForArrayConstraintsFromSetReport_Safety_Incident(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $safety_Incident_Response_DataTypeReport_Safety_IncidentItem) {
            // validation for constraint: itemType
            if (!$safety_Incident_Response_DataTypeReport_Safety_IncidentItem instanceof \StructType\Report_Safety_IncidentType) {
                $invalidValues[] = is_object($safety_Incident_Response_DataTypeReport_Safety_IncidentItem) ? get_class($safety_Incident_Response_DataTypeReport_Safety_IncidentItem) : sprintf('%s(%s)', gettype($safety_Incident_Response_DataTypeReport_Safety_IncidentItem), var_export($safety_Incident_Response_DataTypeReport_Safety_IncidentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Report_Safety_Incident property can only contain items of type \StructType\Report_Safety_IncidentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Report_Safety_Incident value
     * @throws \InvalidArgumentException
     * @param \StructType\Report_Safety_IncidentType[] $report_Safety_Incident
     * @return \StructType\Safety_Incident_Response_DataType
     */
    public function setReport_Safety_Incident(array $report_Safety_Incident = array())
    {
        // validation for constraint: array
        if ('' !== ($report_Safety_IncidentArrayErrorMessage = self::validateReport_Safety_IncidentForArrayConstraintsFromSetReport_Safety_Incident($report_Safety_Incident))) {
            throw new \InvalidArgumentException($report_Safety_IncidentArrayErrorMessage, __LINE__);
        }
        $this->Report_Safety_Incident = $report_Safety_Incident;
        return $this;
    }
    /**
     * Add item to Report_Safety_Incident value
     * @throws \InvalidArgumentException
     * @param \StructType\Report_Safety_IncidentType $item
     * @return \StructType\Safety_Incident_Response_DataType
     */
    public function addToReport_Safety_Incident(\StructType\Report_Safety_IncidentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Report_Safety_IncidentType) {
            throw new \InvalidArgumentException(sprintf('The Report_Safety_Incident property can only contain items of type \StructType\Report_Safety_IncidentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Report_Safety_Incident[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Safety_Incident_Response_DataType
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
