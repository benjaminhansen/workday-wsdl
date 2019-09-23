<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Form_I-9_Section_3_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The element containing all necessary information to put/get an External Form I-9 Section 3 for a Worker.
 * @subpackage Structs
 */
class External_Form_I_9_Section_3_DataType extends AbstractStructBase
{
    /**
     * The External_Form_I_9_Reference
     * Meta information extracted from the WSDL
     * - documentation: The External Form I-9 Reference assigned to the Worker.
     * @var \WorkdayWsdl\\StructType\Form_I_9ObjectType
     */
    public $External_Form_I_9_Reference;
    /**
     * The Last_Name
     * Meta information extracted from the WSDL
     * - documentation: The Last Name to be assigned to the Worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Name;
    /**
     * The First_Name
     * Meta information extracted from the WSDL
     * - documentation: The First Name to be assigned to the Worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Name;
    /**
     * The Middle_Initial
     * Meta information extracted from the WSDL
     * - documentation: The Middle Name to be assigned to the Worker.
     * - base: xsd:string
     * - maxLength: 3
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Middle_Initial;
    /**
     * The Document_Title_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Document Title to be assigned to the Form I-9 Section 3. Must be one of any of the Form I-9 documents that Workday currently supports, from Section 2 List A, B, or C or from Section 3.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType
     */
    public $Document_Title_Reference;
    /**
     * The DHS_Document_Title
     * Meta information extracted from the WSDL
     * - documentation: DHS Document Title for Employment authorization document issued by DHS to be assigned to the Form I-9 Section 3.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DHS_Document_Title;
    /**
     * The Expiration_Date
     * Meta information extracted from the WSDL
     * - documentation: The Expiration Date to be assigned to the Form I-9 Section 3.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expiration_Date;
    /**
     * The Date_of_Rehire
     * Meta information extracted from the WSDL
     * - documentation: The Rehire Date for the Worker to be assigned to the Form I-9 Section 3.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_of_Rehire;
    /**
     * The Date_of_Employer_Signature
     * Meta information extracted from the WSDL
     * - documentation: The Employer Signature Date to be assigned to the Form I-9 Section 3.
     * - maxOccurs: 1
     * @var string
     */
    public $Date_of_Employer_Signature;
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
     * Constructor method for External_Form_I-9_Section_3_DataType
     * @uses External_Form_I_9_Section_3_DataType::setExternal_Form_I_9_Reference()
     * @uses External_Form_I_9_Section_3_DataType::setLast_Name()
     * @uses External_Form_I_9_Section_3_DataType::setFirst_Name()
     * @uses External_Form_I_9_Section_3_DataType::setMiddle_Initial()
     * @uses External_Form_I_9_Section_3_DataType::setDocument_Title_Reference()
     * @uses External_Form_I_9_Section_3_DataType::setDHS_Document_Title()
     * @uses External_Form_I_9_Section_3_DataType::setExpiration_Date()
     * @uses External_Form_I_9_Section_3_DataType::setDate_of_Rehire()
     * @uses External_Form_I_9_Section_3_DataType::setDate_of_Employer_Signature()
     * @uses External_Form_I_9_Section_3_DataType::setExternal_Form_I_9_Attachment_Data()
     * @param \WorkdayWsdl\\StructType\Form_I_9ObjectType $external_Form_I_9_Reference
     * @param string $last_Name
     * @param string $first_Name
     * @param string $middle_Initial
     * @param \WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType $document_Title_Reference
     * @param string $dHS_Document_Title
     * @param string $expiration_Date
     * @param string $date_of_Rehire
     * @param string $date_of_Employer_Signature
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType[] $external_Form_I_9_Attachment_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Form_I_9ObjectType $external_Form_I_9_Reference = null, $last_Name = null, $first_Name = null, $middle_Initial = null, \WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType $document_Title_Reference = null, $dHS_Document_Title = null, $expiration_Date = null, $date_of_Rehire = null, $date_of_Employer_Signature = null, array $external_Form_I_9_Attachment_Data = array())
    {
        $this
            ->setExternal_Form_I_9_Reference($external_Form_I_9_Reference)
            ->setLast_Name($last_Name)
            ->setFirst_Name($first_Name)
            ->setMiddle_Initial($middle_Initial)
            ->setDocument_Title_Reference($document_Title_Reference)
            ->setDHS_Document_Title($dHS_Document_Title)
            ->setExpiration_Date($expiration_Date)
            ->setDate_of_Rehire($date_of_Rehire)
            ->setDate_of_Employer_Signature($date_of_Employer_Signature)
            ->setExternal_Form_I_9_Attachment_Data($external_Form_I_9_Attachment_Data);
    }
    /**
     * Get external_Form_I_Reference value
     * @return external_Form_I_Reference
     */
    public function getExternal_Form_I_9_Reference()
    {
        return $this->{'External_Form_I-9_Reference'};
    }
    /**
     * Set external_Form_I_Reference value
     * @param external_Form_I_Reference $external_Form_I_Reference
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
     */
    public function setExternal_Form_I_9_Reference(\WorkdayWsdl\\StructType\Form_I_9ObjectType $external_Form_I_9_Reference = null)
    {
        $this->External_Form_I_9_Reference = $this->{'External_Form_I-9_Reference'} = $external_Form_I_9_Reference;
        return $this;
    }
    /**
     * Get Last_Name value
     * @return string|null
     */
    public function getLast_Name()
    {
        return $this->Last_Name;
    }
    /**
     * Set Last_Name value
     * @param string $last_Name
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
     */
    public function setLast_Name($last_Name = null)
    {
        // validation for constraint: string
        if (!is_null($last_Name) && !is_string($last_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Name, true), gettype($last_Name)), __LINE__);
        }
        $this->Last_Name = $last_Name;
        return $this;
    }
    /**
     * Get First_Name value
     * @return string|null
     */
    public function getFirst_Name()
    {
        return $this->First_Name;
    }
    /**
     * Set First_Name value
     * @param string $first_Name
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
     */
    public function setFirst_Name($first_Name = null)
    {
        // validation for constraint: string
        if (!is_null($first_Name) && !is_string($first_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_Name, true), gettype($first_Name)), __LINE__);
        }
        $this->First_Name = $first_Name;
        return $this;
    }
    /**
     * Get Middle_Initial value
     * @return string|null
     */
    public function getMiddle_Initial()
    {
        return $this->Middle_Initial;
    }
    /**
     * Set Middle_Initial value
     * @param string $middle_Initial
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
     */
    public function setMiddle_Initial($middle_Initial = null)
    {
        // validation for constraint: string
        if (!is_null($middle_Initial) && !is_string($middle_Initial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middle_Initial, true), gettype($middle_Initial)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($middle_Initial) && mb_strlen($middle_Initial) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($middle_Initial)), __LINE__);
        }
        $this->Middle_Initial = $middle_Initial;
        return $this;
    }
    /**
     * Get Document_Title_Reference value
     * @return \WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType|null
     */
    public function getDocument_Title_Reference()
    {
        return $this->Document_Title_Reference;
    }
    /**
     * Set Document_Title_Reference value
     * @param \WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType $document_Title_Reference
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
     */
    public function setDocument_Title_Reference(\WorkdayWsdl\\StructType\Form_I_9_Identifier_Type__Workday_Owned_ObjectType $document_Title_Reference = null)
    {
        $this->Document_Title_Reference = $document_Title_Reference;
        return $this;
    }
    /**
     * Get DHS_Document_Title value
     * @return string|null
     */
    public function getDHS_Document_Title()
    {
        return $this->DHS_Document_Title;
    }
    /**
     * Set DHS_Document_Title value
     * @param string $dHS_Document_Title
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
     */
    public function setDHS_Document_Title($dHS_Document_Title = null)
    {
        // validation for constraint: string
        if (!is_null($dHS_Document_Title) && !is_string($dHS_Document_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dHS_Document_Title, true), gettype($dHS_Document_Title)), __LINE__);
        }
        $this->DHS_Document_Title = $dHS_Document_Title;
        return $this;
    }
    /**
     * Get Expiration_Date value
     * @return string|null
     */
    public function getExpiration_Date()
    {
        return $this->Expiration_Date;
    }
    /**
     * Set Expiration_Date value
     * @param string $expiration_Date
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
     */
    public function setExpiration_Date($expiration_Date = null)
    {
        // validation for constraint: string
        if (!is_null($expiration_Date) && !is_string($expiration_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiration_Date, true), gettype($expiration_Date)), __LINE__);
        }
        $this->Expiration_Date = $expiration_Date;
        return $this;
    }
    /**
     * Get Date_of_Rehire value
     * @return string|null
     */
    public function getDate_of_Rehire()
    {
        return $this->Date_of_Rehire;
    }
    /**
     * Set Date_of_Rehire value
     * @param string $date_of_Rehire
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
     */
    public function setDate_of_Rehire($date_of_Rehire = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_Rehire) && !is_string($date_of_Rehire)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_of_Rehire, true), gettype($date_of_Rehire)), __LINE__);
        }
        $this->Date_of_Rehire = $date_of_Rehire;
        return $this;
    }
    /**
     * Get Date_of_Employer_Signature value
     * @return string|null
     */
    public function getDate_of_Employer_Signature()
    {
        return $this->Date_of_Employer_Signature;
    }
    /**
     * Set Date_of_Employer_Signature value
     * @param string $date_of_Employer_Signature
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
     */
    public function setDate_of_Employer_Signature($date_of_Employer_Signature = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_Employer_Signature) && !is_string($date_of_Employer_Signature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_of_Employer_Signature, true), gettype($date_of_Employer_Signature)), __LINE__);
        }
        $this->Date_of_Employer_Signature = $date_of_Employer_Signature;
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
        foreach ($values as $external_Form_I_9_Section_3_DataTypeExternal_Form_I_9_Attachment_DataItem) {
            // validation for constraint: itemType
            if (!$external_Form_I_9_Section_3_DataTypeExternal_Form_I_9_Attachment_DataItem instanceof \WorkdayWsdl\\StructType\External_Form_I_9_Attachment_DataType) {
                $invalidValues[] = is_object($external_Form_I_9_Section_3_DataTypeExternal_Form_I_9_Attachment_DataItem) ? get_class($external_Form_I_9_Section_3_DataTypeExternal_Form_I_9_Attachment_DataItem) : sprintf('%s(%s)', gettype($external_Form_I_9_Section_3_DataTypeExternal_Form_I_9_Attachment_DataItem), var_export($external_Form_I_9_Section_3_DataTypeExternal_Form_I_9_Attachment_DataItem, true));
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
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
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
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
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
     * @return \WorkdayWsdl\\StructType\External_Form_I_9_Section_3_DataType
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
