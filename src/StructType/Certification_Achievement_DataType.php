<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Certification_Achievement_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Checks that there are either no duplicates, or the only duplicate returned is this instance (an edit is happening) | Exam Date must be less than Expiration Date. | Issued Date must be less than or equal to today's date. | Expiration
 * Date may not be prior to Issued Date. | Exam Date must be less than or equal to Issued Date. | Only one change can be in progress (the event in progress and not complete or canceled) for a certification for a particular worker. | As of v13,
 * certification name and issuer are no longer required. You may submit a certification reference or a name and issuer. | Wrapper element for Certification information.
 * @subpackage Structs
 */
class Certification_Achievement_DataType extends AbstractStructBase
{
    /**
     * The Certification_ID
     * Meta information extracted from the WSDL
     * - documentation: Certification ID. If no value is provided, a new certification will be created. If a value is passed in and a corresponding certification is not found, a new certification will be created with the provided id.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Certification_ID;
    /**
     * The Remove_Certification
     * Meta information extracted from the WSDL
     * - documentation: Used for inbound operations to indicate that the certification should be removed for the person. Will always return false for outbound operations.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Remove_Certification;
    /**
     * The Certification_Reference
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the Certification Reference, i.e. from the list of pre-defined certifications.
     * - minOccurs: 0
     * @var \StructType\CertificationObjectType
     */
    public $Certification_Reference;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: The country in which the certification is used.
     * - minOccurs: 0
     * @var \StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The Certification_Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the Certification.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Certification_Name;
    /**
     * The Issuer
     * Meta information extracted from the WSDL
     * - documentation: The authority issuing the certification.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Issuer;
    /**
     * The Certification_Number
     * Meta information extracted from the WSDL
     * - documentation: Certification Number for the Certification.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Certification_Number;
    /**
     * The Issued_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the certification was issued.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Issued_Date;
    /**
     * The Expiration_Date
     * Meta information extracted from the WSDL
     * - documentation: The date of expiration of the certification.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expiration_Date;
    /**
     * The Examination_Score
     * Meta information extracted from the WSDL
     * - documentation: The person's score on the certification examination.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Examination_Score;
    /**
     * The Examination_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the certification examination was taken.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Examination_Date;
    /**
     * The Specialty_Achievement_Data
     * Meta information extracted from the WSDL
     * - documentation: This data contains information about any specialties and subspecialties associated with the certification achievement.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Specialty_Achievement_Data_with_DatesType[]
     */
    public $Specialty_Achievement_Data;
    /**
     * The Worker_Document_Data
     * Meta information extracted from the WSDL
     * - documentation: Worker Document Data is only used for worker certifications. Do not use this for applicants.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Certification_Attachment_DataType[]
     */
    public $Worker_Document_Data;
    /**
     * Constructor method for Certification_Achievement_DataType
     * @uses Certification_Achievement_DataType::setCertification_ID()
     * @uses Certification_Achievement_DataType::setRemove_Certification()
     * @uses Certification_Achievement_DataType::setCertification_Reference()
     * @uses Certification_Achievement_DataType::setCountry_Reference()
     * @uses Certification_Achievement_DataType::setCertification_Name()
     * @uses Certification_Achievement_DataType::setIssuer()
     * @uses Certification_Achievement_DataType::setCertification_Number()
     * @uses Certification_Achievement_DataType::setIssued_Date()
     * @uses Certification_Achievement_DataType::setExpiration_Date()
     * @uses Certification_Achievement_DataType::setExamination_Score()
     * @uses Certification_Achievement_DataType::setExamination_Date()
     * @uses Certification_Achievement_DataType::setSpecialty_Achievement_Data()
     * @uses Certification_Achievement_DataType::setWorker_Document_Data()
     * @param string $certification_ID
     * @param bool $remove_Certification
     * @param \StructType\CertificationObjectType $certification_Reference
     * @param \StructType\CountryObjectType $country_Reference
     * @param string $certification_Name
     * @param string $issuer
     * @param string $certification_Number
     * @param string $issued_Date
     * @param string $expiration_Date
     * @param string $examination_Score
     * @param string $examination_Date
     * @param \StructType\Specialty_Achievement_Data_with_DatesType[] $specialty_Achievement_Data
     * @param \StructType\Certification_Attachment_DataType[] $worker_Document_Data
     */
    public function __construct($certification_ID = null, $remove_Certification = null, \StructType\CertificationObjectType $certification_Reference = null, \StructType\CountryObjectType $country_Reference = null, $certification_Name = null, $issuer = null, $certification_Number = null, $issued_Date = null, $expiration_Date = null, $examination_Score = null, $examination_Date = null, array $specialty_Achievement_Data = array(), array $worker_Document_Data = array())
    {
        $this
            ->setCertification_ID($certification_ID)
            ->setRemove_Certification($remove_Certification)
            ->setCertification_Reference($certification_Reference)
            ->setCountry_Reference($country_Reference)
            ->setCertification_Name($certification_Name)
            ->setIssuer($issuer)
            ->setCertification_Number($certification_Number)
            ->setIssued_Date($issued_Date)
            ->setExpiration_Date($expiration_Date)
            ->setExamination_Score($examination_Score)
            ->setExamination_Date($examination_Date)
            ->setSpecialty_Achievement_Data($specialty_Achievement_Data)
            ->setWorker_Document_Data($worker_Document_Data);
    }
    /**
     * Get Certification_ID value
     * @return string|null
     */
    public function getCertification_ID()
    {
        return $this->Certification_ID;
    }
    /**
     * Set Certification_ID value
     * @param string $certification_ID
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setCertification_ID($certification_ID = null)
    {
        // validation for constraint: string
        if (!is_null($certification_ID) && !is_string($certification_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certification_ID, true), gettype($certification_ID)), __LINE__);
        }
        $this->Certification_ID = $certification_ID;
        return $this;
    }
    /**
     * Get Remove_Certification value
     * @return bool|null
     */
    public function getRemove_Certification()
    {
        return $this->Remove_Certification;
    }
    /**
     * Set Remove_Certification value
     * @param bool $remove_Certification
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setRemove_Certification($remove_Certification = null)
    {
        // validation for constraint: boolean
        if (!is_null($remove_Certification) && !is_bool($remove_Certification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remove_Certification, true), gettype($remove_Certification)), __LINE__);
        }
        $this->Remove_Certification = $remove_Certification;
        return $this;
    }
    /**
     * Get Certification_Reference value
     * @return \StructType\CertificationObjectType|null
     */
    public function getCertification_Reference()
    {
        return $this->Certification_Reference;
    }
    /**
     * Set Certification_Reference value
     * @param \StructType\CertificationObjectType $certification_Reference
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setCertification_Reference(\StructType\CertificationObjectType $certification_Reference = null)
    {
        $this->Certification_Reference = $certification_Reference;
        return $this;
    }
    /**
     * Get Country_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \StructType\CountryObjectType $country_Reference
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setCountry_Reference(\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Certification_Name value
     * @return string|null
     */
    public function getCertification_Name()
    {
        return $this->Certification_Name;
    }
    /**
     * Set Certification_Name value
     * @param string $certification_Name
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setCertification_Name($certification_Name = null)
    {
        // validation for constraint: string
        if (!is_null($certification_Name) && !is_string($certification_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certification_Name, true), gettype($certification_Name)), __LINE__);
        }
        $this->Certification_Name = $certification_Name;
        return $this;
    }
    /**
     * Get Issuer value
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->Issuer;
    }
    /**
     * Set Issuer value
     * @param string $issuer
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setIssuer($issuer = null)
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuer, true), gettype($issuer)), __LINE__);
        }
        $this->Issuer = $issuer;
        return $this;
    }
    /**
     * Get Certification_Number value
     * @return string|null
     */
    public function getCertification_Number()
    {
        return $this->Certification_Number;
    }
    /**
     * Set Certification_Number value
     * @param string $certification_Number
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setCertification_Number($certification_Number = null)
    {
        // validation for constraint: string
        if (!is_null($certification_Number) && !is_string($certification_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($certification_Number, true), gettype($certification_Number)), __LINE__);
        }
        $this->Certification_Number = $certification_Number;
        return $this;
    }
    /**
     * Get Issued_Date value
     * @return string|null
     */
    public function getIssued_Date()
    {
        return $this->Issued_Date;
    }
    /**
     * Set Issued_Date value
     * @param string $issued_Date
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setIssued_Date($issued_Date = null)
    {
        // validation for constraint: string
        if (!is_null($issued_Date) && !is_string($issued_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issued_Date, true), gettype($issued_Date)), __LINE__);
        }
        $this->Issued_Date = $issued_Date;
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
     * @return \StructType\Certification_Achievement_DataType
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
     * Get Examination_Score value
     * @return string|null
     */
    public function getExamination_Score()
    {
        return $this->Examination_Score;
    }
    /**
     * Set Examination_Score value
     * @param string $examination_Score
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setExamination_Score($examination_Score = null)
    {
        // validation for constraint: string
        if (!is_null($examination_Score) && !is_string($examination_Score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($examination_Score, true), gettype($examination_Score)), __LINE__);
        }
        $this->Examination_Score = $examination_Score;
        return $this;
    }
    /**
     * Get Examination_Date value
     * @return string|null
     */
    public function getExamination_Date()
    {
        return $this->Examination_Date;
    }
    /**
     * Set Examination_Date value
     * @param string $examination_Date
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setExamination_Date($examination_Date = null)
    {
        // validation for constraint: string
        if (!is_null($examination_Date) && !is_string($examination_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($examination_Date, true), gettype($examination_Date)), __LINE__);
        }
        $this->Examination_Date = $examination_Date;
        return $this;
    }
    /**
     * Get Specialty_Achievement_Data value
     * @return \StructType\Specialty_Achievement_Data_with_DatesType[]|null
     */
    public function getSpecialty_Achievement_Data()
    {
        return $this->Specialty_Achievement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setSpecialty_Achievement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecialty_Achievement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecialty_Achievement_DataForArrayConstraintsFromSetSpecialty_Achievement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $certification_Achievement_DataTypeSpecialty_Achievement_DataItem) {
            // validation for constraint: itemType
            if (!$certification_Achievement_DataTypeSpecialty_Achievement_DataItem instanceof \StructType\Specialty_Achievement_Data_with_DatesType) {
                $invalidValues[] = is_object($certification_Achievement_DataTypeSpecialty_Achievement_DataItem) ? get_class($certification_Achievement_DataTypeSpecialty_Achievement_DataItem) : sprintf('%s(%s)', gettype($certification_Achievement_DataTypeSpecialty_Achievement_DataItem), var_export($certification_Achievement_DataTypeSpecialty_Achievement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Specialty_Achievement_Data property can only contain items of type \StructType\Specialty_Achievement_Data_with_DatesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Specialty_Achievement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Specialty_Achievement_Data_with_DatesType[] $specialty_Achievement_Data
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setSpecialty_Achievement_Data(array $specialty_Achievement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($specialty_Achievement_DataArrayErrorMessage = self::validateSpecialty_Achievement_DataForArrayConstraintsFromSetSpecialty_Achievement_Data($specialty_Achievement_Data))) {
            throw new \InvalidArgumentException($specialty_Achievement_DataArrayErrorMessage, __LINE__);
        }
        $this->Specialty_Achievement_Data = $specialty_Achievement_Data;
        return $this;
    }
    /**
     * Add item to Specialty_Achievement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Specialty_Achievement_Data_with_DatesType $item
     * @return \StructType\Certification_Achievement_DataType
     */
    public function addToSpecialty_Achievement_Data(\StructType\Specialty_Achievement_Data_with_DatesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Specialty_Achievement_Data_with_DatesType) {
            throw new \InvalidArgumentException(sprintf('The Specialty_Achievement_Data property can only contain items of type \StructType\Specialty_Achievement_Data_with_DatesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Specialty_Achievement_Data[] = $item;
        return $this;
    }
    /**
     * Get Worker_Document_Data value
     * @return \StructType\Certification_Attachment_DataType[]|null
     */
    public function getWorker_Document_Data()
    {
        return $this->Worker_Document_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Document_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Document_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Document_DataForArrayConstraintsFromSetWorker_Document_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $certification_Achievement_DataTypeWorker_Document_DataItem) {
            // validation for constraint: itemType
            if (!$certification_Achievement_DataTypeWorker_Document_DataItem instanceof \StructType\Certification_Attachment_DataType) {
                $invalidValues[] = is_object($certification_Achievement_DataTypeWorker_Document_DataItem) ? get_class($certification_Achievement_DataTypeWorker_Document_DataItem) : sprintf('%s(%s)', gettype($certification_Achievement_DataTypeWorker_Document_DataItem), var_export($certification_Achievement_DataTypeWorker_Document_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Document_Data property can only contain items of type \StructType\Certification_Attachment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Document_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Certification_Attachment_DataType[] $worker_Document_Data
     * @return \StructType\Certification_Achievement_DataType
     */
    public function setWorker_Document_Data(array $worker_Document_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Document_DataArrayErrorMessage = self::validateWorker_Document_DataForArrayConstraintsFromSetWorker_Document_Data($worker_Document_Data))) {
            throw new \InvalidArgumentException($worker_Document_DataArrayErrorMessage, __LINE__);
        }
        $this->Worker_Document_Data = $worker_Document_Data;
        return $this;
    }
    /**
     * Add item to Worker_Document_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Certification_Attachment_DataType $item
     * @return \StructType\Certification_Achievement_DataType
     */
    public function addToWorker_Document_Data(\StructType\Certification_Attachment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Certification_Attachment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Document_Data property can only contain items of type \StructType\Certification_Attachment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Document_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Certification_Achievement_DataType
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
