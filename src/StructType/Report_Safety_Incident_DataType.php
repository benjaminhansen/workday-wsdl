<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Report_Safety_Incident_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request element containing all necessary information to report a Safety Incident.
 * @subpackage Structs
 */
class Report_Safety_Incident_DataType extends AbstractStructBase
{
    /**
     * The Safety_Incident_Reference_ID
     * Meta information extracted from the WSDL
     * - documentation: The reference ID of the safety incident.
     * - minOccurs: 0
     * @var string
     */
    public $Safety_Incident_Reference_ID;
    /**
     * The Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: The status of the safety incident.
     * - minOccurs: 0
     * @var \StructType\Safety_Incident_StatusObjectType
     */
    public $Status_Reference;
    /**
     * The Incident_Date_and_Time
     * Meta information extracted from the WSDL
     * - documentation: The time that the incident occurred.
     * - maxOccurs: 1
     * @var string
     */
    public $Incident_Date_and_Time;
    /**
     * The Notification_Date_and_Time
     * Meta information extracted from the WSDL
     * - documentation: The time that the notification was made.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Notification_Date_and_Time;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: The location that the safety incident occurred.
     * @var \StructType\LocationObjectType
     */
    public $Location_Reference;
    /**
     * The Reported_By_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: The worker that reported the safety incident.
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType
     */
    public $Reported_By_Worker_Reference;
    /**
     * The Reported_To_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: The worker that the safety incident was reported to.
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType
     */
    public $Reported_To_Worker_Reference;
    /**
     * The Supervised_By_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: The worker that was the supervisor.
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType
     */
    public $Supervised_By_Worker_Reference;
    /**
     * The Safety_Incident_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The type of safety incident that occurred.
     * - minOccurs: 0
     * @var \StructType\Safety_Incident_TypeObjectType
     */
    public $Safety_Incident_Type_Reference;
    /**
     * The Safety_Incident_Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: The safety incident location where the incident occurred.
     * - minOccurs: 0
     * @var \StructType\Safety_Incident_LocationObjectType
     */
    public $Safety_Incident_Location_Reference;
    /**
     * The Incident_Summary
     * Meta information extracted from the WSDL
     * - documentation: The summary of the safety incident.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Incident_Summary;
    /**
     * The Note_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Safety_Incident_Note_DataType[]
     */
    public $Note_Data;
    /**
     * The File_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Safety_Incident_File_DataType[]
     */
    public $File_Data;
    /**
     * The Involved_Party_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Safety_Incident_Involved_Party_DataType[]
     */
    public $Involved_Party_Data;
    /**
     * Constructor method for Report_Safety_Incident_DataType
     * @uses Report_Safety_Incident_DataType::setSafety_Incident_Reference_ID()
     * @uses Report_Safety_Incident_DataType::setStatus_Reference()
     * @uses Report_Safety_Incident_DataType::setIncident_Date_and_Time()
     * @uses Report_Safety_Incident_DataType::setNotification_Date_and_Time()
     * @uses Report_Safety_Incident_DataType::setLocation_Reference()
     * @uses Report_Safety_Incident_DataType::setReported_By_Worker_Reference()
     * @uses Report_Safety_Incident_DataType::setReported_To_Worker_Reference()
     * @uses Report_Safety_Incident_DataType::setSupervised_By_Worker_Reference()
     * @uses Report_Safety_Incident_DataType::setSafety_Incident_Type_Reference()
     * @uses Report_Safety_Incident_DataType::setSafety_Incident_Location_Reference()
     * @uses Report_Safety_Incident_DataType::setIncident_Summary()
     * @uses Report_Safety_Incident_DataType::setNote_Data()
     * @uses Report_Safety_Incident_DataType::setFile_Data()
     * @uses Report_Safety_Incident_DataType::setInvolved_Party_Data()
     * @param string $safety_Incident_Reference_ID
     * @param \StructType\Safety_Incident_StatusObjectType $status_Reference
     * @param string $incident_Date_and_Time
     * @param string $notification_Date_and_Time
     * @param \StructType\LocationObjectType $location_Reference
     * @param \StructType\WorkerObjectType $reported_By_Worker_Reference
     * @param \StructType\WorkerObjectType $reported_To_Worker_Reference
     * @param \StructType\WorkerObjectType $supervised_By_Worker_Reference
     * @param \StructType\Safety_Incident_TypeObjectType $safety_Incident_Type_Reference
     * @param \StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference
     * @param string $incident_Summary
     * @param \StructType\Safety_Incident_Note_DataType[] $note_Data
     * @param \StructType\Safety_Incident_File_DataType[] $file_Data
     * @param \StructType\Safety_Incident_Involved_Party_DataType[] $involved_Party_Data
     */
    public function __construct($safety_Incident_Reference_ID = null, \StructType\Safety_Incident_StatusObjectType $status_Reference = null, $incident_Date_and_Time = null, $notification_Date_and_Time = null, \StructType\LocationObjectType $location_Reference = null, \StructType\WorkerObjectType $reported_By_Worker_Reference = null, \StructType\WorkerObjectType $reported_To_Worker_Reference = null, \StructType\WorkerObjectType $supervised_By_Worker_Reference = null, \StructType\Safety_Incident_TypeObjectType $safety_Incident_Type_Reference = null, \StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference = null, $incident_Summary = null, array $note_Data = array(), array $file_Data = array(), array $involved_Party_Data = array())
    {
        $this
            ->setSafety_Incident_Reference_ID($safety_Incident_Reference_ID)
            ->setStatus_Reference($status_Reference)
            ->setIncident_Date_and_Time($incident_Date_and_Time)
            ->setNotification_Date_and_Time($notification_Date_and_Time)
            ->setLocation_Reference($location_Reference)
            ->setReported_By_Worker_Reference($reported_By_Worker_Reference)
            ->setReported_To_Worker_Reference($reported_To_Worker_Reference)
            ->setSupervised_By_Worker_Reference($supervised_By_Worker_Reference)
            ->setSafety_Incident_Type_Reference($safety_Incident_Type_Reference)
            ->setSafety_Incident_Location_Reference($safety_Incident_Location_Reference)
            ->setIncident_Summary($incident_Summary)
            ->setNote_Data($note_Data)
            ->setFile_Data($file_Data)
            ->setInvolved_Party_Data($involved_Party_Data);
    }
    /**
     * Get Safety_Incident_Reference_ID value
     * @return string|null
     */
    public function getSafety_Incident_Reference_ID()
    {
        return $this->Safety_Incident_Reference_ID;
    }
    /**
     * Set Safety_Incident_Reference_ID value
     * @param string $safety_Incident_Reference_ID
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setSafety_Incident_Reference_ID($safety_Incident_Reference_ID = null)
    {
        // validation for constraint: string
        if (!is_null($safety_Incident_Reference_ID) && !is_string($safety_Incident_Reference_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($safety_Incident_Reference_ID, true), gettype($safety_Incident_Reference_ID)), __LINE__);
        }
        $this->Safety_Incident_Reference_ID = $safety_Incident_Reference_ID;
        return $this;
    }
    /**
     * Get Status_Reference value
     * @return \StructType\Safety_Incident_StatusObjectType|null
     */
    public function getStatus_Reference()
    {
        return $this->Status_Reference;
    }
    /**
     * Set Status_Reference value
     * @param \StructType\Safety_Incident_StatusObjectType $status_Reference
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setStatus_Reference(\StructType\Safety_Incident_StatusObjectType $status_Reference = null)
    {
        $this->Status_Reference = $status_Reference;
        return $this;
    }
    /**
     * Get Incident_Date_and_Time value
     * @return string|null
     */
    public function getIncident_Date_and_Time()
    {
        return $this->Incident_Date_and_Time;
    }
    /**
     * Set Incident_Date_and_Time value
     * @param string $incident_Date_and_Time
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setIncident_Date_and_Time($incident_Date_and_Time = null)
    {
        // validation for constraint: string
        if (!is_null($incident_Date_and_Time) && !is_string($incident_Date_and_Time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incident_Date_and_Time, true), gettype($incident_Date_and_Time)), __LINE__);
        }
        $this->Incident_Date_and_Time = $incident_Date_and_Time;
        return $this;
    }
    /**
     * Get Notification_Date_and_Time value
     * @return string|null
     */
    public function getNotification_Date_and_Time()
    {
        return $this->Notification_Date_and_Time;
    }
    /**
     * Set Notification_Date_and_Time value
     * @param string $notification_Date_and_Time
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setNotification_Date_and_Time($notification_Date_and_Time = null)
    {
        // validation for constraint: string
        if (!is_null($notification_Date_and_Time) && !is_string($notification_Date_and_Time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notification_Date_and_Time, true), gettype($notification_Date_and_Time)), __LINE__);
        }
        $this->Notification_Date_and_Time = $notification_Date_and_Time;
        return $this;
    }
    /**
     * Get Location_Reference value
     * @return \StructType\LocationObjectType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \StructType\LocationObjectType $location_Reference
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setLocation_Reference(\StructType\LocationObjectType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Get Reported_By_Worker_Reference value
     * @return \StructType\WorkerObjectType|null
     */
    public function getReported_By_Worker_Reference()
    {
        return $this->Reported_By_Worker_Reference;
    }
    /**
     * Set Reported_By_Worker_Reference value
     * @param \StructType\WorkerObjectType $reported_By_Worker_Reference
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setReported_By_Worker_Reference(\StructType\WorkerObjectType $reported_By_Worker_Reference = null)
    {
        $this->Reported_By_Worker_Reference = $reported_By_Worker_Reference;
        return $this;
    }
    /**
     * Get Reported_To_Worker_Reference value
     * @return \StructType\WorkerObjectType|null
     */
    public function getReported_To_Worker_Reference()
    {
        return $this->Reported_To_Worker_Reference;
    }
    /**
     * Set Reported_To_Worker_Reference value
     * @param \StructType\WorkerObjectType $reported_To_Worker_Reference
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setReported_To_Worker_Reference(\StructType\WorkerObjectType $reported_To_Worker_Reference = null)
    {
        $this->Reported_To_Worker_Reference = $reported_To_Worker_Reference;
        return $this;
    }
    /**
     * Get Supervised_By_Worker_Reference value
     * @return \StructType\WorkerObjectType|null
     */
    public function getSupervised_By_Worker_Reference()
    {
        return $this->Supervised_By_Worker_Reference;
    }
    /**
     * Set Supervised_By_Worker_Reference value
     * @param \StructType\WorkerObjectType $supervised_By_Worker_Reference
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setSupervised_By_Worker_Reference(\StructType\WorkerObjectType $supervised_By_Worker_Reference = null)
    {
        $this->Supervised_By_Worker_Reference = $supervised_By_Worker_Reference;
        return $this;
    }
    /**
     * Get Safety_Incident_Type_Reference value
     * @return \StructType\Safety_Incident_TypeObjectType|null
     */
    public function getSafety_Incident_Type_Reference()
    {
        return $this->Safety_Incident_Type_Reference;
    }
    /**
     * Set Safety_Incident_Type_Reference value
     * @param \StructType\Safety_Incident_TypeObjectType $safety_Incident_Type_Reference
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setSafety_Incident_Type_Reference(\StructType\Safety_Incident_TypeObjectType $safety_Incident_Type_Reference = null)
    {
        $this->Safety_Incident_Type_Reference = $safety_Incident_Type_Reference;
        return $this;
    }
    /**
     * Get Safety_Incident_Location_Reference value
     * @return \StructType\Safety_Incident_LocationObjectType|null
     */
    public function getSafety_Incident_Location_Reference()
    {
        return $this->Safety_Incident_Location_Reference;
    }
    /**
     * Set Safety_Incident_Location_Reference value
     * @param \StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setSafety_Incident_Location_Reference(\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference = null)
    {
        $this->Safety_Incident_Location_Reference = $safety_Incident_Location_Reference;
        return $this;
    }
    /**
     * Get Incident_Summary value
     * @return string|null
     */
    public function getIncident_Summary()
    {
        return $this->Incident_Summary;
    }
    /**
     * Set Incident_Summary value
     * @param string $incident_Summary
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setIncident_Summary($incident_Summary = null)
    {
        // validation for constraint: string
        if (!is_null($incident_Summary) && !is_string($incident_Summary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incident_Summary, true), gettype($incident_Summary)), __LINE__);
        }
        $this->Incident_Summary = $incident_Summary;
        return $this;
    }
    /**
     * Get Note_Data value
     * @return \StructType\Safety_Incident_Note_DataType[]|null
     */
    public function getNote_Data()
    {
        return $this->Note_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setNote_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNote_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNote_DataForArrayConstraintsFromSetNote_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $report_Safety_Incident_DataTypeNote_DataItem) {
            // validation for constraint: itemType
            if (!$report_Safety_Incident_DataTypeNote_DataItem instanceof \StructType\Safety_Incident_Note_DataType) {
                $invalidValues[] = is_object($report_Safety_Incident_DataTypeNote_DataItem) ? get_class($report_Safety_Incident_DataTypeNote_DataItem) : sprintf('%s(%s)', gettype($report_Safety_Incident_DataTypeNote_DataItem), var_export($report_Safety_Incident_DataTypeNote_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Note_Data property can only contain items of type \StructType\Safety_Incident_Note_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Note_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_Incident_Note_DataType[] $note_Data
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setNote_Data(array $note_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($note_DataArrayErrorMessage = self::validateNote_DataForArrayConstraintsFromSetNote_Data($note_Data))) {
            throw new \InvalidArgumentException($note_DataArrayErrorMessage, __LINE__);
        }
        $this->Note_Data = $note_Data;
        return $this;
    }
    /**
     * Add item to Note_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_Incident_Note_DataType $item
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function addToNote_Data(\StructType\Safety_Incident_Note_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Safety_Incident_Note_DataType) {
            throw new \InvalidArgumentException(sprintf('The Note_Data property can only contain items of type \StructType\Safety_Incident_Note_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Note_Data[] = $item;
        return $this;
    }
    /**
     * Get File_Data value
     * @return \StructType\Safety_Incident_File_DataType[]|null
     */
    public function getFile_Data()
    {
        return $this->File_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setFile_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFile_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFile_DataForArrayConstraintsFromSetFile_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $report_Safety_Incident_DataTypeFile_DataItem) {
            // validation for constraint: itemType
            if (!$report_Safety_Incident_DataTypeFile_DataItem instanceof \StructType\Safety_Incident_File_DataType) {
                $invalidValues[] = is_object($report_Safety_Incident_DataTypeFile_DataItem) ? get_class($report_Safety_Incident_DataTypeFile_DataItem) : sprintf('%s(%s)', gettype($report_Safety_Incident_DataTypeFile_DataItem), var_export($report_Safety_Incident_DataTypeFile_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The File_Data property can only contain items of type \StructType\Safety_Incident_File_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set File_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_Incident_File_DataType[] $file_Data
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setFile_Data(array $file_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($file_DataArrayErrorMessage = self::validateFile_DataForArrayConstraintsFromSetFile_Data($file_Data))) {
            throw new \InvalidArgumentException($file_DataArrayErrorMessage, __LINE__);
        }
        $this->File_Data = $file_Data;
        return $this;
    }
    /**
     * Add item to File_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_Incident_File_DataType $item
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function addToFile_Data(\StructType\Safety_Incident_File_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Safety_Incident_File_DataType) {
            throw new \InvalidArgumentException(sprintf('The File_Data property can only contain items of type \StructType\Safety_Incident_File_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->File_Data[] = $item;
        return $this;
    }
    /**
     * Get Involved_Party_Data value
     * @return \StructType\Safety_Incident_Involved_Party_DataType[]|null
     */
    public function getInvolved_Party_Data()
    {
        return $this->Involved_Party_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setInvolved_Party_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvolved_Party_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvolved_Party_DataForArrayConstraintsFromSetInvolved_Party_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $report_Safety_Incident_DataTypeInvolved_Party_DataItem) {
            // validation for constraint: itemType
            if (!$report_Safety_Incident_DataTypeInvolved_Party_DataItem instanceof \StructType\Safety_Incident_Involved_Party_DataType) {
                $invalidValues[] = is_object($report_Safety_Incident_DataTypeInvolved_Party_DataItem) ? get_class($report_Safety_Incident_DataTypeInvolved_Party_DataItem) : sprintf('%s(%s)', gettype($report_Safety_Incident_DataTypeInvolved_Party_DataItem), var_export($report_Safety_Incident_DataTypeInvolved_Party_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Involved_Party_Data property can only contain items of type \StructType\Safety_Incident_Involved_Party_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Involved_Party_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_Incident_Involved_Party_DataType[] $involved_Party_Data
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function setInvolved_Party_Data(array $involved_Party_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($involved_Party_DataArrayErrorMessage = self::validateInvolved_Party_DataForArrayConstraintsFromSetInvolved_Party_Data($involved_Party_Data))) {
            throw new \InvalidArgumentException($involved_Party_DataArrayErrorMessage, __LINE__);
        }
        $this->Involved_Party_Data = $involved_Party_Data;
        return $this;
    }
    /**
     * Add item to Involved_Party_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_Incident_Involved_Party_DataType $item
     * @return \StructType\Report_Safety_Incident_DataType
     */
    public function addToInvolved_Party_Data(\StructType\Safety_Incident_Involved_Party_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Safety_Incident_Involved_Party_DataType) {
            throw new \InvalidArgumentException(sprintf('The Involved_Party_Data property can only contain items of type \StructType\Safety_Incident_Involved_Party_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Involved_Party_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Report_Safety_Incident_DataType
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
