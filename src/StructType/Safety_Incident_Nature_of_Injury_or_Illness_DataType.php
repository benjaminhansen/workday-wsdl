<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_Nature_of_Injury_or_Illness_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: The nature of the injury illness of the involved party.
 * @subpackage Structs
 */
class Safety_Incident_Nature_of_Injury_or_Illness_DataType extends AbstractStructBase
{
    /**
     * The Time_Arrived_at_Work
     * Meta information extracted from the WSDL
     * - documentation: The time that the involved party arrive at work.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Time_Arrived_at_Work;
    /**
     * The Injury_Illness_Nature_Reference
     * Meta information extracted from the WSDL
     * - documentation: The nature of the injury illness of the involved party.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Injury_Illness_NatureObjectType
     */
    public $Injury_Illness_Nature_Reference;
    /**
     * The Injury_Illness_Body_Part_Reference
     * Meta information extracted from the WSDL
     * - documentation: The body part where the injury of the involved party occurred.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Injury_Illness_Body_PartObjectType[]
     */
    public $Injury_Illness_Body_Part_Reference;
    /**
     * The Injury_Illness_Source_Reference
     * Meta information extracted from the WSDL
     * - documentation: The source of the injury illness for the involved party.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Injury_Illness_SourceObjectType
     */
    public $Injury_Illness_Source_Reference;
    /**
     * The Object_or_Substance
     * Meta information extracted from the WSDL
     * - documentation: The object that was involved.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Object_or_Substance;
    /**
     * The Injury_Illness_Work_Related
     * Meta information extracted from the WSDL
     * - documentation: Whether the incident was work related or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Injury_Illness_Work_Related;
    /**
     * The Injury_Illness_Privacy_Case
     * Meta information extracted from the WSDL
     * - documentation: Whether the incident is a privacy case or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Injury_Illness_Privacy_Case;
    /**
     * The Injury_Illness_Sent_Home
     * Meta information extracted from the WSDL
     * - documentation: Wether the involved party was sent home or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Injury_Illness_Sent_Home;
    /**
     * The Injury_Illness_Severity_Reference
     * Meta information extracted from the WSDL
     * - documentation: The severity of the injury illness.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Injury_Illness_SeverityObjectType
     */
    public $Injury_Illness_Severity_Reference;
    /**
     * The Injury_Illness_Treatment_Required
     * Meta information extracted from the WSDL
     * - documentation: Whether treatment was required or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Injury_Illness_Treatment_Required;
    /**
     * The Treatment_Description
     * Meta information extracted from the WSDL
     * - documentation: A description of the treatment needed.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Treatment_Description;
    /**
     * The Injury_Illness_Affected_Party_Died
     * Meta information extracted from the WSDL
     * - documentation: Whether the involved party died or not.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Injury_Illness_Affected_Party_Died;
    /**
     * The Date_of_Death
     * Meta information extracted from the WSDL
     * - documentation: If the involved party died, the date of the death.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_of_Death;
    /**
     * The Treatment_Disposition_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType[]
     */
    public $Treatment_Disposition_Data;
    /**
     * Constructor method for Safety_Incident_Nature_of_Injury_or_Illness_DataType
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setTime_Arrived_at_Work()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setInjury_Illness_Nature_Reference()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setInjury_Illness_Body_Part_Reference()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setInjury_Illness_Source_Reference()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setObject_or_Substance()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setInjury_Illness_Work_Related()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setInjury_Illness_Privacy_Case()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setInjury_Illness_Sent_Home()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setInjury_Illness_Severity_Reference()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setInjury_Illness_Treatment_Required()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setTreatment_Description()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setInjury_Illness_Affected_Party_Died()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setDate_of_Death()
     * @uses Safety_Incident_Nature_of_Injury_or_Illness_DataType::setTreatment_Disposition_Data()
     * @param string $time_Arrived_at_Work
     * @param \WorkdayWsdl\\StructType\Injury_Illness_NatureObjectType $injury_Illness_Nature_Reference
     * @param \WorkdayWsdl\\StructType\Injury_Illness_Body_PartObjectType[] $injury_Illness_Body_Part_Reference
     * @param \WorkdayWsdl\\StructType\Injury_Illness_SourceObjectType $injury_Illness_Source_Reference
     * @param string $object_or_Substance
     * @param bool $injury_Illness_Work_Related
     * @param bool $injury_Illness_Privacy_Case
     * @param bool $injury_Illness_Sent_Home
     * @param \WorkdayWsdl\\StructType\Injury_Illness_SeverityObjectType $injury_Illness_Severity_Reference
     * @param bool $injury_Illness_Treatment_Required
     * @param string $treatment_Description
     * @param bool $injury_Illness_Affected_Party_Died
     * @param string $date_of_Death
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType[] $treatment_Disposition_Data
     */
    public function __construct($time_Arrived_at_Work = null, \WorkdayWsdl\\StructType\Injury_Illness_NatureObjectType $injury_Illness_Nature_Reference = null, array $injury_Illness_Body_Part_Reference = array(), \WorkdayWsdl\\StructType\Injury_Illness_SourceObjectType $injury_Illness_Source_Reference = null, $object_or_Substance = null, $injury_Illness_Work_Related = null, $injury_Illness_Privacy_Case = null, $injury_Illness_Sent_Home = null, \WorkdayWsdl\\StructType\Injury_Illness_SeverityObjectType $injury_Illness_Severity_Reference = null, $injury_Illness_Treatment_Required = null, $treatment_Description = null, $injury_Illness_Affected_Party_Died = null, $date_of_Death = null, array $treatment_Disposition_Data = array())
    {
        $this
            ->setTime_Arrived_at_Work($time_Arrived_at_Work)
            ->setInjury_Illness_Nature_Reference($injury_Illness_Nature_Reference)
            ->setInjury_Illness_Body_Part_Reference($injury_Illness_Body_Part_Reference)
            ->setInjury_Illness_Source_Reference($injury_Illness_Source_Reference)
            ->setObject_or_Substance($object_or_Substance)
            ->setInjury_Illness_Work_Related($injury_Illness_Work_Related)
            ->setInjury_Illness_Privacy_Case($injury_Illness_Privacy_Case)
            ->setInjury_Illness_Sent_Home($injury_Illness_Sent_Home)
            ->setInjury_Illness_Severity_Reference($injury_Illness_Severity_Reference)
            ->setInjury_Illness_Treatment_Required($injury_Illness_Treatment_Required)
            ->setTreatment_Description($treatment_Description)
            ->setInjury_Illness_Affected_Party_Died($injury_Illness_Affected_Party_Died)
            ->setDate_of_Death($date_of_Death)
            ->setTreatment_Disposition_Data($treatment_Disposition_Data);
    }
    /**
     * Get Time_Arrived_at_Work value
     * @return string|null
     */
    public function getTime_Arrived_at_Work()
    {
        return $this->Time_Arrived_at_Work;
    }
    /**
     * Set Time_Arrived_at_Work value
     * @param string $time_Arrived_at_Work
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setTime_Arrived_at_Work($time_Arrived_at_Work = null)
    {
        // validation for constraint: string
        if (!is_null($time_Arrived_at_Work) && !is_string($time_Arrived_at_Work)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_Arrived_at_Work, true), gettype($time_Arrived_at_Work)), __LINE__);
        }
        $this->Time_Arrived_at_Work = $time_Arrived_at_Work;
        return $this;
    }
    /**
     * Get Injury_Illness_Nature_Reference value
     * @return \WorkdayWsdl\\StructType\Injury_Illness_NatureObjectType|null
     */
    public function getInjury_Illness_Nature_Reference()
    {
        return $this->Injury_Illness_Nature_Reference;
    }
    /**
     * Set Injury_Illness_Nature_Reference value
     * @param \WorkdayWsdl\\StructType\Injury_Illness_NatureObjectType $injury_Illness_Nature_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setInjury_Illness_Nature_Reference(\WorkdayWsdl\\StructType\Injury_Illness_NatureObjectType $injury_Illness_Nature_Reference = null)
    {
        $this->Injury_Illness_Nature_Reference = $injury_Illness_Nature_Reference;
        return $this;
    }
    /**
     * Get Injury_Illness_Body_Part_Reference value
     * @return \WorkdayWsdl\\StructType\Injury_Illness_Body_PartObjectType[]|null
     */
    public function getInjury_Illness_Body_Part_Reference()
    {
        return $this->Injury_Illness_Body_Part_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setInjury_Illness_Body_Part_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInjury_Illness_Body_Part_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInjury_Illness_Body_Part_ReferenceForArrayConstraintsFromSetInjury_Illness_Body_Part_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $safety_Incident_Nature_of_Injury_or_Illness_DataTypeInjury_Illness_Body_Part_ReferenceItem) {
            // validation for constraint: itemType
            if (!$safety_Incident_Nature_of_Injury_or_Illness_DataTypeInjury_Illness_Body_Part_ReferenceItem instanceof \WorkdayWsdl\\StructType\Injury_Illness_Body_PartObjectType) {
                $invalidValues[] = is_object($safety_Incident_Nature_of_Injury_or_Illness_DataTypeInjury_Illness_Body_Part_ReferenceItem) ? get_class($safety_Incident_Nature_of_Injury_or_Illness_DataTypeInjury_Illness_Body_Part_ReferenceItem) : sprintf('%s(%s)', gettype($safety_Incident_Nature_of_Injury_or_Illness_DataTypeInjury_Illness_Body_Part_ReferenceItem), var_export($safety_Incident_Nature_of_Injury_or_Illness_DataTypeInjury_Illness_Body_Part_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Injury_Illness_Body_Part_Reference property can only contain items of type \WorkdayWsdl\\StructType\Injury_Illness_Body_PartObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Injury_Illness_Body_Part_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Injury_Illness_Body_PartObjectType[] $injury_Illness_Body_Part_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setInjury_Illness_Body_Part_Reference(array $injury_Illness_Body_Part_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($injury_Illness_Body_Part_ReferenceArrayErrorMessage = self::validateInjury_Illness_Body_Part_ReferenceForArrayConstraintsFromSetInjury_Illness_Body_Part_Reference($injury_Illness_Body_Part_Reference))) {
            throw new \InvalidArgumentException($injury_Illness_Body_Part_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Injury_Illness_Body_Part_Reference = $injury_Illness_Body_Part_Reference;
        return $this;
    }
    /**
     * Add item to Injury_Illness_Body_Part_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Injury_Illness_Body_PartObjectType $item
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function addToInjury_Illness_Body_Part_Reference(\WorkdayWsdl\\StructType\Injury_Illness_Body_PartObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Injury_Illness_Body_PartObjectType) {
            throw new \InvalidArgumentException(sprintf('The Injury_Illness_Body_Part_Reference property can only contain items of type \WorkdayWsdl\\StructType\Injury_Illness_Body_PartObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Injury_Illness_Body_Part_Reference[] = $item;
        return $this;
    }
    /**
     * Get Injury_Illness_Source_Reference value
     * @return \WorkdayWsdl\\StructType\Injury_Illness_SourceObjectType|null
     */
    public function getInjury_Illness_Source_Reference()
    {
        return $this->Injury_Illness_Source_Reference;
    }
    /**
     * Set Injury_Illness_Source_Reference value
     * @param \WorkdayWsdl\\StructType\Injury_Illness_SourceObjectType $injury_Illness_Source_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setInjury_Illness_Source_Reference(\WorkdayWsdl\\StructType\Injury_Illness_SourceObjectType $injury_Illness_Source_Reference = null)
    {
        $this->Injury_Illness_Source_Reference = $injury_Illness_Source_Reference;
        return $this;
    }
    /**
     * Get Object_or_Substance value
     * @return string|null
     */
    public function getObject_or_Substance()
    {
        return $this->Object_or_Substance;
    }
    /**
     * Set Object_or_Substance value
     * @param string $object_or_Substance
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setObject_or_Substance($object_or_Substance = null)
    {
        // validation for constraint: string
        if (!is_null($object_or_Substance) && !is_string($object_or_Substance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($object_or_Substance, true), gettype($object_or_Substance)), __LINE__);
        }
        $this->Object_or_Substance = $object_or_Substance;
        return $this;
    }
    /**
     * Get Injury_Illness_Work_Related value
     * @return bool|null
     */
    public function getInjury_Illness_Work_Related()
    {
        return $this->Injury_Illness_Work_Related;
    }
    /**
     * Set Injury_Illness_Work_Related value
     * @param bool $injury_Illness_Work_Related
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setInjury_Illness_Work_Related($injury_Illness_Work_Related = null)
    {
        // validation for constraint: boolean
        if (!is_null($injury_Illness_Work_Related) && !is_bool($injury_Illness_Work_Related)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($injury_Illness_Work_Related, true), gettype($injury_Illness_Work_Related)), __LINE__);
        }
        $this->Injury_Illness_Work_Related = $injury_Illness_Work_Related;
        return $this;
    }
    /**
     * Get Injury_Illness_Privacy_Case value
     * @return bool|null
     */
    public function getInjury_Illness_Privacy_Case()
    {
        return $this->Injury_Illness_Privacy_Case;
    }
    /**
     * Set Injury_Illness_Privacy_Case value
     * @param bool $injury_Illness_Privacy_Case
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setInjury_Illness_Privacy_Case($injury_Illness_Privacy_Case = null)
    {
        // validation for constraint: boolean
        if (!is_null($injury_Illness_Privacy_Case) && !is_bool($injury_Illness_Privacy_Case)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($injury_Illness_Privacy_Case, true), gettype($injury_Illness_Privacy_Case)), __LINE__);
        }
        $this->Injury_Illness_Privacy_Case = $injury_Illness_Privacy_Case;
        return $this;
    }
    /**
     * Get Injury_Illness_Sent_Home value
     * @return bool|null
     */
    public function getInjury_Illness_Sent_Home()
    {
        return $this->Injury_Illness_Sent_Home;
    }
    /**
     * Set Injury_Illness_Sent_Home value
     * @param bool $injury_Illness_Sent_Home
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setInjury_Illness_Sent_Home($injury_Illness_Sent_Home = null)
    {
        // validation for constraint: boolean
        if (!is_null($injury_Illness_Sent_Home) && !is_bool($injury_Illness_Sent_Home)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($injury_Illness_Sent_Home, true), gettype($injury_Illness_Sent_Home)), __LINE__);
        }
        $this->Injury_Illness_Sent_Home = $injury_Illness_Sent_Home;
        return $this;
    }
    /**
     * Get Injury_Illness_Severity_Reference value
     * @return \WorkdayWsdl\\StructType\Injury_Illness_SeverityObjectType|null
     */
    public function getInjury_Illness_Severity_Reference()
    {
        return $this->Injury_Illness_Severity_Reference;
    }
    /**
     * Set Injury_Illness_Severity_Reference value
     * @param \WorkdayWsdl\\StructType\Injury_Illness_SeverityObjectType $injury_Illness_Severity_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setInjury_Illness_Severity_Reference(\WorkdayWsdl\\StructType\Injury_Illness_SeverityObjectType $injury_Illness_Severity_Reference = null)
    {
        $this->Injury_Illness_Severity_Reference = $injury_Illness_Severity_Reference;
        return $this;
    }
    /**
     * Get Injury_Illness_Treatment_Required value
     * @return bool|null
     */
    public function getInjury_Illness_Treatment_Required()
    {
        return $this->Injury_Illness_Treatment_Required;
    }
    /**
     * Set Injury_Illness_Treatment_Required value
     * @param bool $injury_Illness_Treatment_Required
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setInjury_Illness_Treatment_Required($injury_Illness_Treatment_Required = null)
    {
        // validation for constraint: boolean
        if (!is_null($injury_Illness_Treatment_Required) && !is_bool($injury_Illness_Treatment_Required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($injury_Illness_Treatment_Required, true), gettype($injury_Illness_Treatment_Required)), __LINE__);
        }
        $this->Injury_Illness_Treatment_Required = $injury_Illness_Treatment_Required;
        return $this;
    }
    /**
     * Get Treatment_Description value
     * @return string|null
     */
    public function getTreatment_Description()
    {
        return $this->Treatment_Description;
    }
    /**
     * Set Treatment_Description value
     * @param string $treatment_Description
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setTreatment_Description($treatment_Description = null)
    {
        // validation for constraint: string
        if (!is_null($treatment_Description) && !is_string($treatment_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($treatment_Description, true), gettype($treatment_Description)), __LINE__);
        }
        $this->Treatment_Description = $treatment_Description;
        return $this;
    }
    /**
     * Get Injury_Illness_Affected_Party_Died value
     * @return bool|null
     */
    public function getInjury_Illness_Affected_Party_Died()
    {
        return $this->Injury_Illness_Affected_Party_Died;
    }
    /**
     * Set Injury_Illness_Affected_Party_Died value
     * @param bool $injury_Illness_Affected_Party_Died
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setInjury_Illness_Affected_Party_Died($injury_Illness_Affected_Party_Died = null)
    {
        // validation for constraint: boolean
        if (!is_null($injury_Illness_Affected_Party_Died) && !is_bool($injury_Illness_Affected_Party_Died)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($injury_Illness_Affected_Party_Died, true), gettype($injury_Illness_Affected_Party_Died)), __LINE__);
        }
        $this->Injury_Illness_Affected_Party_Died = $injury_Illness_Affected_Party_Died;
        return $this;
    }
    /**
     * Get Date_of_Death value
     * @return string|null
     */
    public function getDate_of_Death()
    {
        return $this->Date_of_Death;
    }
    /**
     * Set Date_of_Death value
     * @param string $date_of_Death
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setDate_of_Death($date_of_Death = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_Death) && !is_string($date_of_Death)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_of_Death, true), gettype($date_of_Death)), __LINE__);
        }
        $this->Date_of_Death = $date_of_Death;
        return $this;
    }
    /**
     * Get Treatment_Disposition_Data value
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType[]|null
     */
    public function getTreatment_Disposition_Data()
    {
        return $this->Treatment_Disposition_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setTreatment_Disposition_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTreatment_Disposition_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTreatment_Disposition_DataForArrayConstraintsFromSetTreatment_Disposition_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $safety_Incident_Nature_of_Injury_or_Illness_DataTypeTreatment_Disposition_DataItem) {
            // validation for constraint: itemType
            if (!$safety_Incident_Nature_of_Injury_or_Illness_DataTypeTreatment_Disposition_DataItem instanceof \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType) {
                $invalidValues[] = is_object($safety_Incident_Nature_of_Injury_or_Illness_DataTypeTreatment_Disposition_DataItem) ? get_class($safety_Incident_Nature_of_Injury_or_Illness_DataTypeTreatment_Disposition_DataItem) : sprintf('%s(%s)', gettype($safety_Incident_Nature_of_Injury_or_Illness_DataTypeTreatment_Disposition_DataItem), var_export($safety_Incident_Nature_of_Injury_or_Illness_DataTypeTreatment_Disposition_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Treatment_Disposition_Data property can only contain items of type \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Treatment_Disposition_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType[] $treatment_Disposition_Data
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function setTreatment_Disposition_Data(array $treatment_Disposition_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($treatment_Disposition_DataArrayErrorMessage = self::validateTreatment_Disposition_DataForArrayConstraintsFromSetTreatment_Disposition_Data($treatment_Disposition_Data))) {
            throw new \InvalidArgumentException($treatment_Disposition_DataArrayErrorMessage, __LINE__);
        }
        $this->Treatment_Disposition_Data = $treatment_Disposition_Data;
        return $this;
    }
    /**
     * Add item to Treatment_Disposition_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType $item
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
     */
    public function addToTreatment_Disposition_Data(\WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType) {
            throw new \InvalidArgumentException(sprintf('The Treatment_Disposition_Data property can only contain items of type \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Treatment_Disposition_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Nature_of_Injury_or_Illness_DataType
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
