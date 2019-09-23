<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Form_I-9_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The element containing all necessary information to put/get an External Form I-9 for a Worker.
 * @subpackage Structs
 */
class External_Form_I_9_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Worker for this business process.
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Form_I_9_Reference_ID
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference ID for Form I-9
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Form_I_9_Reference_ID;
    /**
     * The E_Verify_Case_Number
     * Meta information extracted from the WSDL
     * - documentation: The E-Verify Case Number assigned to the Worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $E_Verify_Case_Number;
    /**
     * The External_Form_I_9_Source_Reference
     * Meta information extracted from the WSDL
     * - documentation: The External Form I-9 Source assigned to the Worker.
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType
     */
    public $External_Form_I_9_Source_Reference;
    /**
     * The External_Form_I_9_Section_1_Data
     * Meta information extracted from the WSDL
     * - documentation: The request element containing all necessary information for Form I-9 Section 1 to assign to the worker.
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_Section_1_DataType
     */
    public $External_Form_I_9_Section_1_Data;
    /**
     * The External_Form_I_9_Section_2_Data
     * Meta information extracted from the WSDL
     * - documentation: The request element containing all necessary information for Form I-9 Section 2 to assign to the worker.
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_DataType
     */
    public $External_Form_I_9_Section_2_Data;
    /**
     * The External_Form_I_9_Attachment_Data
     * Meta information extracted from the WSDL
     * - documentation: The request element containing all necessary information for Form I-9 Attachment to assign to the Worker.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType[]
     */
    public $External_Form_I_9_Attachment_Data;
    /**
     * Constructor method for External_Form_I-9_DataType
     * @uses External_Form_I_9_DataType::setWorker_Reference()
     * @uses External_Form_I_9_DataType::setForm_I_9_Reference_ID()
     * @uses External_Form_I_9_DataType::setE_Verify_Case_Number()
     * @uses External_Form_I_9_DataType::setExternal_Form_I_9_Source_Reference()
     * @uses External_Form_I_9_DataType::setExternal_Form_I_9_Section_1_Data()
     * @uses External_Form_I_9_DataType::setExternal_Form_I_9_Section_2_Data()
     * @uses External_Form_I_9_DataType::setExternal_Form_I_9_Attachment_Data()
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @param string $form_I_9_Reference_ID
     * @param string $e_Verify_Case_Number
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Section_1_DataType $external_Form_I_9_Section_1_Data
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_DataType $external_Form_I_9_Section_2_Data
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType[] $external_Form_I_9_Attachment_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null, $form_I_9_Reference_ID = null, $e_Verify_Case_Number = null, \WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference = null, \WorkdayWsdl\\StructType\External_Form_I_9_Section_1_DataType $external_Form_I_9_Section_1_Data = null, \WorkdayWsdl\\StructType\External_Form_I_9_Section_2_DataType $external_Form_I_9_Section_2_Data = null, array $external_Form_I_9_Attachment_Data = array())
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setForm_I_9_Reference_ID($form_I_9_Reference_ID)
            ->setE_Verify_Case_Number($e_Verify_Case_Number)
            ->setExternal_Form_I_9_Source_Reference($external_Form_I_9_Source_Reference)
            ->setExternal_Form_I_9_Section_1_Data($external_Form_I_9_Section_1_Data)
            ->setExternal_Form_I_9_Section_2_Data($external_Form_I_9_Section_2_Data)
            ->setExternal_Form_I_9_Attachment_Data($external_Form_I_9_Attachment_Data);
    }
    /**
     * Get Worker_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_DataType
     */
    public function setWorker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get form_I_Reference_ID value
     * @return form_I_Reference_ID
     */
    public function getForm_I_9_Reference_ID()
    {
        return $this->{'Form_I-9_Reference_ID'};
    }
    /**
     * Set form_I_Reference_ID value
     * @param form_I_Reference_ID $form_I_Reference_ID
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_DataType
     */
    public function setForm_I_9_Reference_ID($form_I_9_Reference_ID = null)
    {
        // validation for constraint: string
        if (!is_null($form_I_9_Reference_ID) && !is_string($form_I_9_Reference_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($form_I_9_Reference_ID, true), gettype($form_I_9_Reference_ID)), __LINE__);
        }
        $this->Form_I_9_Reference_ID = $this->{'Form_I-9_Reference_ID'} = $form_I_9_Reference_ID;
        return $this;
    }
    /**
     * Get E_Verify_Case_Number value
     * @return string|null
     */
    public function getE_Verify_Case_Number()
    {
        return $this->{'E-Verify_Case_Number'};
    }
    /**
     * Set E_Verify_Case_Number value
     * @param string $e_Verify_Case_Number
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_DataType
     */
    public function setE_Verify_Case_Number($e_Verify_Case_Number = null)
    {
        // validation for constraint: string
        if (!is_null($e_Verify_Case_Number) && !is_string($e_Verify_Case_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($e_Verify_Case_Number, true), gettype($e_Verify_Case_Number)), __LINE__);
        }
        $this->E_Verify_Case_Number = $this->{'E-Verify_Case_Number'} = $e_Verify_Case_Number;
        return $this;
    }
    /**
     * Get external_Form_I_Source_Reference value
     * @return external_Form_I_Source_Reference
     */
    public function getExternal_Form_I_9_Source_Reference()
    {
        return $this->{'External_Form_I-9_Source_Reference'};
    }
    /**
     * Set external_Form_I_Source_Reference value
     * @param external_Form_I_Source_Reference $external_Form_I_Source_Reference
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_DataType
     */
    public function setExternal_Form_I_9_Source_Reference(\WorkdayWsdl\\StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference = null)
    {
        $this->External_Form_I_9_Source_Reference = $this->{'External_Form_I-9_Source_Reference'} = $external_Form_I_9_Source_Reference;
        return $this;
    }
    /**
     * Get external_Form_I_Section_Data value
     * @return external_Form_I_Section_Data
     */
    public function getExternal_Form_I_9_Section_1_Data()
    {
        return $this->{'External_Form_I-9_Section_1_Data'};
    }
    /**
     * Set external_Form_I_Section_Data value
     * @param external_Form_I_Section_Data $external_Form_I_Section_Data
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_DataType
     */
    public function setExternal_Form_I_9_Section_1_Data(\WorkdayWsdl\\StructType\External_Form_I_9_Section_1_DataType $external_Form_I_9_Section_1_Data = null)
    {
        $this->External_Form_I_9_Section_1_Data = $this->{'External_Form_I-9_Section_1_Data'} = $external_Form_I_9_Section_1_Data;
        return $this;
    }
    /**
     * Get external_Form_I_Section_Data value
     * @return external_Form_I_Section_Data
     */
    public function getExternal_Form_I_9_Section_2_Data()
    {
        return $this->{'External_Form_I-9_Section_2_Data'};
    }
    /**
     * Set external_Form_I_Section_Data value
     * @param external_Form_I_Section_Data $external_Form_I_Section_Data
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_DataType
     */
    public function setExternal_Form_I_9_Section_2_Data(\WorkdayWsdl\\StructType\External_Form_I_9_Section_2_DataType $external_Form_I_9_Section_2_Data = null)
    {
        $this->External_Form_I_9_Section_2_Data = $this->{'External_Form_I-9_Section_2_Data'} = $external_Form_I_9_Section_2_Data;
        return $this;
    }
    /**
     * Get external_Form_I_Attachment_Data value
     * @return external_Form_I_Attachment_Data
     */
    public function getExternal_Form_I_9_Attachment_Data()
    {
        return $this->{'External_Form_I-9_Attachment_Data'};
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_Form_I_9_Attachment_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_Form_I_9_Attachment_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_Form_I_9_Attachment_DataForArrayConstraintsFromSetExternal_Form_I_9_Attachment_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $external_Form_I_9_DataTypeExternal_Form_I_9_Attachment_DataItem) {
            // validation for constraint: itemType
            if (!$external_Form_I_9_DataTypeExternal_Form_I_9_Attachment_DataItem instanceof \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType) {
                $invalidValues[] = is_object($external_Form_I_9_DataTypeExternal_Form_I_9_Attachment_DataItem) ? get_class($external_Form_I_9_DataTypeExternal_Form_I_9_Attachment_DataItem) : sprintf('%s(%s)', gettype($external_Form_I_9_DataTypeExternal_Form_I_9_Attachment_DataItem), var_export($external_Form_I_9_DataTypeExternal_Form_I_9_Attachment_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_Form_I_9_Attachment_Data property can only contain items of type \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set external_Form_I_Attachment_Data value
     * @param external_Form_I_Attachment_Data $external_Form_I_Attachment_Data
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_DataType
     */
    public function setExternal_Form_I_9_Attachment_Data(array $external_Form_I_9_Attachment_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($external_Form_I_9_Attachment_DataArrayErrorMessage = self::validateExternal_Form_I_9_Attachment_DataForArrayConstraintsFromSetExternal_Form_I_9_Attachment_Data($external_Form_I_9_Attachment_Data))) {
            throw new \InvalidArgumentException($external_Form_I_9_Attachment_DataArrayErrorMessage, __LINE__);
        }
        $this->External_Form_I_9_Attachment_Data = $this->{'External_Form_I-9_Attachment_Data'} = $external_Form_I_9_Attachment_Data;
        return $this;
    }
    /**
     * Add item to External_Form_I_9_Attachment_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType $item
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_DataType
     */
    public function addToExternal_Form_I_9_Attachment_Data(\WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType) {
            throw new \InvalidArgumentException(sprintf('The External_Form_I_9_Attachment_Data property can only contain items of type \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_Form_I_9_Attachment_Data[] = $this->{'External_Form_I-9_Attachment_Data'}[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_DataType
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
