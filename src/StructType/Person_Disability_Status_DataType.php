<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Disability_Status_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The entered Disability Grade is not valid for the entered Disability Type | The entered Certification Authority is not valid for the entered Disability Type | The entered Certification Basis is not valid for the entered Disability
 * Type | Wrapper element for the disability status information for the person.
 * @subpackage Structs
 */
class Person_Disability_Status_DataType extends AbstractStructBase
{
    /**
     * The Disability_Reference
     * Meta information extracted from the WSDL
     * - documentation: The person's Disability.
     * @var \StructType\DisabilityObjectType
     */
    public $Disability_Reference;
    /**
     * The Disability_Status_Date
     * Meta information extracted from the WSDL
     * - documentation: The element Disability Reference is required if a Disability Status Date is entered. | The Disability Status Date cannot be before the Date of Birth | The person's Disability Status Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Status_Date;
    /**
     * The Disability_Date_Known
     * Meta information extracted from the WSDL
     * - documentation: The date the Employer first learned about the Disability.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Date_Known;
    /**
     * The Disability_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The date through which the worker is considered disabled. In some countries, this is the date through which the certification for the current level of Disability is effective.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_End_Date;
    /**
     * The Disability_Grade_Reference
     * Meta information extracted from the WSDL
     * - documentation: A code or number that identifies the level of Disability.
     * - minOccurs: 0
     * @var \StructType\Disability_GradeObjectType
     */
    public $Disability_Grade_Reference;
    /**
     * The Disability_Degree
     * Meta information extracted from the WSDL
     * - documentation: A percentage that identifies the worker's level of Disability as of the Disability date. | Disability Degree can not be over 100%. | A percentage that identifies the ~person's~ level of disability as of the disability date. | The
     * person's location context is not enabled for Disability Degree.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 8
     * @var float
     */
    public $Disability_Degree;
    /**
     * The Disability_Remaining_Capacity
     * Meta information extracted from the WSDL
     * - documentation: The percentage of labor that the person may work per Physician or other Authority. | Disability Remaining Capacity can not be over 100%. | The person's location context is not enabled for Disability Remaining Capacity.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 8
     * @var float
     */
    public $Disability_Remaining_Capacity;
    /**
     * The Disability_Certification_Authority_Reference
     * Meta information extracted from the WSDL
     * - documentation: The name of the person or agency that certified the Disability.
     * - choice: Disability_Certification_Authority_Reference | Disability_Certification_Authority
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Disability_Certification_AuthorityObjectType
     */
    public $Disability_Certification_Authority_Reference;
    /**
     * The Disability_Certification_Authority
     * Meta information extracted from the WSDL
     * - documentation: The name of the person or agency that certified the Disability.
     * - choice: Disability_Certification_Authority_Reference | Disability_Certification_Authority
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Certification_Authority;
    /**
     * The Disability_Certified_At
     * Meta information extracted from the WSDL
     * - documentation: The place where the person or agency certified the Disability.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Certified_At;
    /**
     * The Disability_Certification_ID
     * Meta information extracted from the WSDL
     * - documentation: The ID provided to the worker, if any.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Certification_ID;
    /**
     * The Disability_Certification_Basis_Reference
     * Meta information extracted from the WSDL
     * - documentation: How the worker qualified for the Disability Certification.
     * - minOccurs: 0
     * @var \StructType\Disability_Certification_BasisObjectType
     */
    public $Disability_Certification_Basis_Reference;
    /**
     * The Disability_Severity_Recognition_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the Disability was recognized as severe by the recognizing Authority.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Severity_Recognition_Date;
    /**
     * The Disability_FTE_Toward_Quota
     * Meta information extracted from the WSDL
     * - documentation: The FTE that counts towards the Employer's quota for hiring the Disabled. | The person's location context is not enabled for Disability FTE Toward Quota.
     * - base: xsd:decimal
     * - fractionDigits: 1
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 13
     * @var float
     */
    public $Disability_FTE_Toward_Quota;
    /**
     * The Disability_Work_Restrictions
     * Meta information extracted from the WSDL
     * - documentation: List any work restrictions that apply to the worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Work_Restrictions;
    /**
     * The Disability_Accommodations_Requested
     * Meta information extracted from the WSDL
     * - documentation: Describe any accommodations requested by the worker or their Care Provider.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Accommodations_Requested;
    /**
     * The Disability_Accommodations_Provided
     * Meta information extracted from the WSDL
     * - documentation: Describe any accommodations provided by the Employer.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Accommodations_Provided;
    /**
     * The Disability_Rehabilitation_Requested
     * Meta information extracted from the WSDL
     * - documentation: Describe any rehabilitation measures requested by the worker or their Care Provider.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Rehabilitation_Requested;
    /**
     * The Disability_Rehabilitation_Provided
     * Meta information extracted from the WSDL
     * - documentation: Describe any rehabilitation measures provided by the Employer.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Disability_Rehabilitation_Provided;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - documentation: Enter any additional information related to this Disability.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Note;
    /**
     * The Worker_Document_Reference
     * Meta information extracted from the WSDL
     * - documentation: Attach a copy of the certification or other documents related to this instance of Disability.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Worker_DocumentObjectType[]
     */
    public $Worker_Document_Reference;
    /**
     * The Disability_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the Disability Status.
     * - minOccurs: 0
     * @var \StructType\Disability_Status_ReferenceObjectType
     */
    public $Disability_Status_Reference;
    /**
     * Constructor method for Person_Disability_Status_DataType
     * @uses Person_Disability_Status_DataType::setDisability_Reference()
     * @uses Person_Disability_Status_DataType::setDisability_Status_Date()
     * @uses Person_Disability_Status_DataType::setDisability_Date_Known()
     * @uses Person_Disability_Status_DataType::setDisability_End_Date()
     * @uses Person_Disability_Status_DataType::setDisability_Grade_Reference()
     * @uses Person_Disability_Status_DataType::setDisability_Degree()
     * @uses Person_Disability_Status_DataType::setDisability_Remaining_Capacity()
     * @uses Person_Disability_Status_DataType::setDisability_Certification_Authority_Reference()
     * @uses Person_Disability_Status_DataType::setDisability_Certification_Authority()
     * @uses Person_Disability_Status_DataType::setDisability_Certified_At()
     * @uses Person_Disability_Status_DataType::setDisability_Certification_ID()
     * @uses Person_Disability_Status_DataType::setDisability_Certification_Basis_Reference()
     * @uses Person_Disability_Status_DataType::setDisability_Severity_Recognition_Date()
     * @uses Person_Disability_Status_DataType::setDisability_FTE_Toward_Quota()
     * @uses Person_Disability_Status_DataType::setDisability_Work_Restrictions()
     * @uses Person_Disability_Status_DataType::setDisability_Accommodations_Requested()
     * @uses Person_Disability_Status_DataType::setDisability_Accommodations_Provided()
     * @uses Person_Disability_Status_DataType::setDisability_Rehabilitation_Requested()
     * @uses Person_Disability_Status_DataType::setDisability_Rehabilitation_Provided()
     * @uses Person_Disability_Status_DataType::setNote()
     * @uses Person_Disability_Status_DataType::setWorker_Document_Reference()
     * @uses Person_Disability_Status_DataType::setDisability_Status_Reference()
     * @param \StructType\DisabilityObjectType $disability_Reference
     * @param string $disability_Status_Date
     * @param string $disability_Date_Known
     * @param string $disability_End_Date
     * @param \StructType\Disability_GradeObjectType $disability_Grade_Reference
     * @param float $disability_Degree
     * @param float $disability_Remaining_Capacity
     * @param \StructType\Disability_Certification_AuthorityObjectType $disability_Certification_Authority_Reference
     * @param string $disability_Certification_Authority
     * @param string $disability_Certified_At
     * @param string $disability_Certification_ID
     * @param \StructType\Disability_Certification_BasisObjectType $disability_Certification_Basis_Reference
     * @param string $disability_Severity_Recognition_Date
     * @param float $disability_FTE_Toward_Quota
     * @param string $disability_Work_Restrictions
     * @param string $disability_Accommodations_Requested
     * @param string $disability_Accommodations_Provided
     * @param string $disability_Rehabilitation_Requested
     * @param string $disability_Rehabilitation_Provided
     * @param string $note
     * @param \StructType\Worker_DocumentObjectType[] $worker_Document_Reference
     * @param \StructType\Disability_Status_ReferenceObjectType $disability_Status_Reference
     */
    public function __construct(\StructType\DisabilityObjectType $disability_Reference = null, $disability_Status_Date = null, $disability_Date_Known = null, $disability_End_Date = null, \StructType\Disability_GradeObjectType $disability_Grade_Reference = null, $disability_Degree = null, $disability_Remaining_Capacity = null, \StructType\Disability_Certification_AuthorityObjectType $disability_Certification_Authority_Reference = null, $disability_Certification_Authority = null, $disability_Certified_At = null, $disability_Certification_ID = null, \StructType\Disability_Certification_BasisObjectType $disability_Certification_Basis_Reference = null, $disability_Severity_Recognition_Date = null, $disability_FTE_Toward_Quota = null, $disability_Work_Restrictions = null, $disability_Accommodations_Requested = null, $disability_Accommodations_Provided = null, $disability_Rehabilitation_Requested = null, $disability_Rehabilitation_Provided = null, $note = null, array $worker_Document_Reference = array(), \StructType\Disability_Status_ReferenceObjectType $disability_Status_Reference = null)
    {
        $this
            ->setDisability_Reference($disability_Reference)
            ->setDisability_Status_Date($disability_Status_Date)
            ->setDisability_Date_Known($disability_Date_Known)
            ->setDisability_End_Date($disability_End_Date)
            ->setDisability_Grade_Reference($disability_Grade_Reference)
            ->setDisability_Degree($disability_Degree)
            ->setDisability_Remaining_Capacity($disability_Remaining_Capacity)
            ->setDisability_Certification_Authority_Reference($disability_Certification_Authority_Reference)
            ->setDisability_Certification_Authority($disability_Certification_Authority)
            ->setDisability_Certified_At($disability_Certified_At)
            ->setDisability_Certification_ID($disability_Certification_ID)
            ->setDisability_Certification_Basis_Reference($disability_Certification_Basis_Reference)
            ->setDisability_Severity_Recognition_Date($disability_Severity_Recognition_Date)
            ->setDisability_FTE_Toward_Quota($disability_FTE_Toward_Quota)
            ->setDisability_Work_Restrictions($disability_Work_Restrictions)
            ->setDisability_Accommodations_Requested($disability_Accommodations_Requested)
            ->setDisability_Accommodations_Provided($disability_Accommodations_Provided)
            ->setDisability_Rehabilitation_Requested($disability_Rehabilitation_Requested)
            ->setDisability_Rehabilitation_Provided($disability_Rehabilitation_Provided)
            ->setNote($note)
            ->setWorker_Document_Reference($worker_Document_Reference)
            ->setDisability_Status_Reference($disability_Status_Reference);
    }
    /**
     * Get Disability_Reference value
     * @return \StructType\DisabilityObjectType|null
     */
    public function getDisability_Reference()
    {
        return $this->Disability_Reference;
    }
    /**
     * Set Disability_Reference value
     * @param \StructType\DisabilityObjectType $disability_Reference
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Reference(\StructType\DisabilityObjectType $disability_Reference = null)
    {
        $this->Disability_Reference = $disability_Reference;
        return $this;
    }
    /**
     * Get Disability_Status_Date value
     * @return string|null
     */
    public function getDisability_Status_Date()
    {
        return $this->Disability_Status_Date;
    }
    /**
     * Set Disability_Status_Date value
     * @param string $disability_Status_Date
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Status_Date($disability_Status_Date = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Status_Date) && !is_string($disability_Status_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Status_Date, true), gettype($disability_Status_Date)), __LINE__);
        }
        $this->Disability_Status_Date = $disability_Status_Date;
        return $this;
    }
    /**
     * Get Disability_Date_Known value
     * @return string|null
     */
    public function getDisability_Date_Known()
    {
        return $this->Disability_Date_Known;
    }
    /**
     * Set Disability_Date_Known value
     * @param string $disability_Date_Known
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Date_Known($disability_Date_Known = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Date_Known) && !is_string($disability_Date_Known)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Date_Known, true), gettype($disability_Date_Known)), __LINE__);
        }
        $this->Disability_Date_Known = $disability_Date_Known;
        return $this;
    }
    /**
     * Get Disability_End_Date value
     * @return string|null
     */
    public function getDisability_End_Date()
    {
        return $this->Disability_End_Date;
    }
    /**
     * Set Disability_End_Date value
     * @param string $disability_End_Date
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_End_Date($disability_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($disability_End_Date) && !is_string($disability_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_End_Date, true), gettype($disability_End_Date)), __LINE__);
        }
        $this->Disability_End_Date = $disability_End_Date;
        return $this;
    }
    /**
     * Get Disability_Grade_Reference value
     * @return \StructType\Disability_GradeObjectType|null
     */
    public function getDisability_Grade_Reference()
    {
        return $this->Disability_Grade_Reference;
    }
    /**
     * Set Disability_Grade_Reference value
     * @param \StructType\Disability_GradeObjectType $disability_Grade_Reference
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Grade_Reference(\StructType\Disability_GradeObjectType $disability_Grade_Reference = null)
    {
        $this->Disability_Grade_Reference = $disability_Grade_Reference;
        return $this;
    }
    /**
     * Get Disability_Degree value
     * @return float|null
     */
    public function getDisability_Degree()
    {
        return $this->Disability_Degree;
    }
    /**
     * Set Disability_Degree value
     * @param float $disability_Degree
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Degree($disability_Degree = null)
    {
        // validation for constraint: float
        if (!is_null($disability_Degree) && !(is_float($disability_Degree) || is_numeric($disability_Degree))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($disability_Degree, true), gettype($disability_Degree)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($disability_Degree) && mb_strlen(mb_substr($disability_Degree, mb_strpos($disability_Degree, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($disability_Degree, true), mb_strlen(mb_substr($disability_Degree, mb_strpos($disability_Degree, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($disability_Degree) && $disability_Degree < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($disability_Degree, true)), __LINE__);
        }
        // validation for constraint: totalDigits(8)
        if (!is_null($disability_Degree) && mb_strlen(preg_replace('/(\D)/', '', $disability_Degree)) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 8 digits, "%d" given', var_export($disability_Degree, true), mb_strlen(preg_replace('/(\D)/', '', $disability_Degree))), __LINE__);
        }
        $this->Disability_Degree = $disability_Degree;
        return $this;
    }
    /**
     * Get Disability_Remaining_Capacity value
     * @return float|null
     */
    public function getDisability_Remaining_Capacity()
    {
        return $this->Disability_Remaining_Capacity;
    }
    /**
     * Set Disability_Remaining_Capacity value
     * @param float $disability_Remaining_Capacity
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Remaining_Capacity($disability_Remaining_Capacity = null)
    {
        // validation for constraint: float
        if (!is_null($disability_Remaining_Capacity) && !(is_float($disability_Remaining_Capacity) || is_numeric($disability_Remaining_Capacity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($disability_Remaining_Capacity, true), gettype($disability_Remaining_Capacity)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($disability_Remaining_Capacity) && mb_strlen(mb_substr($disability_Remaining_Capacity, mb_strpos($disability_Remaining_Capacity, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($disability_Remaining_Capacity, true), mb_strlen(mb_substr($disability_Remaining_Capacity, mb_strpos($disability_Remaining_Capacity, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($disability_Remaining_Capacity) && $disability_Remaining_Capacity < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($disability_Remaining_Capacity, true)), __LINE__);
        }
        // validation for constraint: totalDigits(8)
        if (!is_null($disability_Remaining_Capacity) && mb_strlen(preg_replace('/(\D)/', '', $disability_Remaining_Capacity)) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 8 digits, "%d" given', var_export($disability_Remaining_Capacity, true), mb_strlen(preg_replace('/(\D)/', '', $disability_Remaining_Capacity))), __LINE__);
        }
        $this->Disability_Remaining_Capacity = $disability_Remaining_Capacity;
        return $this;
    }
    /**
     * Get Disability_Certification_Authority_Reference value
     * @return \StructType\Disability_Certification_AuthorityObjectType|null
     */
    public function getDisability_Certification_Authority_Reference()
    {
        return isset($this->Disability_Certification_Authority_Reference) ? $this->Disability_Certification_Authority_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDisability_Certification_Authority_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisability_Certification_Authority_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDisability_Certification_Authority_ReferenceForChoiceConstraintsFromSetDisability_Certification_Authority_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Disability_Certification_Authority',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Disability_Certification_Authority_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Disability_Certification_Authority_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Disability_Certification_Authority_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Disability_Certification_AuthorityObjectType $disability_Certification_Authority_Reference
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Certification_Authority_Reference(\StructType\Disability_Certification_AuthorityObjectType $disability_Certification_Authority_Reference = null)
    {
        // validation for constraint: choice(Disability_Certification_Authority_Reference, Disability_Certification_Authority)
        if ('' !== ($disability_Certification_Authority_ReferenceChoiceErrorMessage = self::validateDisability_Certification_Authority_ReferenceForChoiceConstraintsFromSetDisability_Certification_Authority_Reference($disability_Certification_Authority_Reference))) {
            throw new \InvalidArgumentException($disability_Certification_Authority_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($disability_Certification_Authority_Reference) || (is_array($disability_Certification_Authority_Reference) && empty($disability_Certification_Authority_Reference))) {
            unset($this->Disability_Certification_Authority_Reference);
        } else {
            $this->Disability_Certification_Authority_Reference = $disability_Certification_Authority_Reference;
        }
        return $this;
    }
    /**
     * Get Disability_Certification_Authority value
     * @return string|null
     */
    public function getDisability_Certification_Authority()
    {
        return isset($this->Disability_Certification_Authority) ? $this->Disability_Certification_Authority : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDisability_Certification_Authority method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisability_Certification_Authority method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDisability_Certification_AuthorityForChoiceConstraintsFromSetDisability_Certification_Authority($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Disability_Certification_Authority_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Disability_Certification_Authority can\'t be set as the property %s is already set. Only one property must be set among these properties: Disability_Certification_Authority, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Disability_Certification_Authority value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $disability_Certification_Authority
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Certification_Authority($disability_Certification_Authority = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Certification_Authority) && !is_string($disability_Certification_Authority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Certification_Authority, true), gettype($disability_Certification_Authority)), __LINE__);
        }
        // validation for constraint: choice(Disability_Certification_Authority_Reference, Disability_Certification_Authority)
        if ('' !== ($disability_Certification_AuthorityChoiceErrorMessage = self::validateDisability_Certification_AuthorityForChoiceConstraintsFromSetDisability_Certification_Authority($disability_Certification_Authority))) {
            throw new \InvalidArgumentException($disability_Certification_AuthorityChoiceErrorMessage, __LINE__);
        }
        if (is_null($disability_Certification_Authority) || (is_array($disability_Certification_Authority) && empty($disability_Certification_Authority))) {
            unset($this->Disability_Certification_Authority);
        } else {
            $this->Disability_Certification_Authority = $disability_Certification_Authority;
        }
        return $this;
    }
    /**
     * Get Disability_Certified_At value
     * @return string|null
     */
    public function getDisability_Certified_At()
    {
        return $this->Disability_Certified_At;
    }
    /**
     * Set Disability_Certified_At value
     * @param string $disability_Certified_At
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Certified_At($disability_Certified_At = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Certified_At) && !is_string($disability_Certified_At)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Certified_At, true), gettype($disability_Certified_At)), __LINE__);
        }
        $this->Disability_Certified_At = $disability_Certified_At;
        return $this;
    }
    /**
     * Get Disability_Certification_ID value
     * @return string|null
     */
    public function getDisability_Certification_ID()
    {
        return $this->Disability_Certification_ID;
    }
    /**
     * Set Disability_Certification_ID value
     * @param string $disability_Certification_ID
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Certification_ID($disability_Certification_ID = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Certification_ID) && !is_string($disability_Certification_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Certification_ID, true), gettype($disability_Certification_ID)), __LINE__);
        }
        $this->Disability_Certification_ID = $disability_Certification_ID;
        return $this;
    }
    /**
     * Get Disability_Certification_Basis_Reference value
     * @return \StructType\Disability_Certification_BasisObjectType|null
     */
    public function getDisability_Certification_Basis_Reference()
    {
        return $this->Disability_Certification_Basis_Reference;
    }
    /**
     * Set Disability_Certification_Basis_Reference value
     * @param \StructType\Disability_Certification_BasisObjectType $disability_Certification_Basis_Reference
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Certification_Basis_Reference(\StructType\Disability_Certification_BasisObjectType $disability_Certification_Basis_Reference = null)
    {
        $this->Disability_Certification_Basis_Reference = $disability_Certification_Basis_Reference;
        return $this;
    }
    /**
     * Get Disability_Severity_Recognition_Date value
     * @return string|null
     */
    public function getDisability_Severity_Recognition_Date()
    {
        return $this->Disability_Severity_Recognition_Date;
    }
    /**
     * Set Disability_Severity_Recognition_Date value
     * @param string $disability_Severity_Recognition_Date
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Severity_Recognition_Date($disability_Severity_Recognition_Date = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Severity_Recognition_Date) && !is_string($disability_Severity_Recognition_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Severity_Recognition_Date, true), gettype($disability_Severity_Recognition_Date)), __LINE__);
        }
        $this->Disability_Severity_Recognition_Date = $disability_Severity_Recognition_Date;
        return $this;
    }
    /**
     * Get Disability_FTE_Toward_Quota value
     * @return float|null
     */
    public function getDisability_FTE_Toward_Quota()
    {
        return $this->Disability_FTE_Toward_Quota;
    }
    /**
     * Set Disability_FTE_Toward_Quota value
     * @param float $disability_FTE_Toward_Quota
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_FTE_Toward_Quota($disability_FTE_Toward_Quota = null)
    {
        // validation for constraint: float
        if (!is_null($disability_FTE_Toward_Quota) && !(is_float($disability_FTE_Toward_Quota) || is_numeric($disability_FTE_Toward_Quota))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($disability_FTE_Toward_Quota, true), gettype($disability_FTE_Toward_Quota)), __LINE__);
        }
        // validation for constraint: fractionDigits(1)
        if (!is_null($disability_FTE_Toward_Quota) && mb_strlen(mb_substr($disability_FTE_Toward_Quota, mb_strpos($disability_FTE_Toward_Quota, '.') + 1)) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 1 fraction digits, %d given', var_export($disability_FTE_Toward_Quota, true), mb_strlen(mb_substr($disability_FTE_Toward_Quota, mb_strpos($disability_FTE_Toward_Quota, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($disability_FTE_Toward_Quota) && $disability_FTE_Toward_Quota < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($disability_FTE_Toward_Quota, true)), __LINE__);
        }
        // validation for constraint: totalDigits(13)
        if (!is_null($disability_FTE_Toward_Quota) && mb_strlen(preg_replace('/(\D)/', '', $disability_FTE_Toward_Quota)) > 13) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 13 digits, "%d" given', var_export($disability_FTE_Toward_Quota, true), mb_strlen(preg_replace('/(\D)/', '', $disability_FTE_Toward_Quota))), __LINE__);
        }
        $this->Disability_FTE_Toward_Quota = $disability_FTE_Toward_Quota;
        return $this;
    }
    /**
     * Get Disability_Work_Restrictions value
     * @return string|null
     */
    public function getDisability_Work_Restrictions()
    {
        return $this->Disability_Work_Restrictions;
    }
    /**
     * Set Disability_Work_Restrictions value
     * @param string $disability_Work_Restrictions
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Work_Restrictions($disability_Work_Restrictions = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Work_Restrictions) && !is_string($disability_Work_Restrictions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Work_Restrictions, true), gettype($disability_Work_Restrictions)), __LINE__);
        }
        $this->Disability_Work_Restrictions = $disability_Work_Restrictions;
        return $this;
    }
    /**
     * Get Disability_Accommodations_Requested value
     * @return string|null
     */
    public function getDisability_Accommodations_Requested()
    {
        return $this->Disability_Accommodations_Requested;
    }
    /**
     * Set Disability_Accommodations_Requested value
     * @param string $disability_Accommodations_Requested
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Accommodations_Requested($disability_Accommodations_Requested = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Accommodations_Requested) && !is_string($disability_Accommodations_Requested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Accommodations_Requested, true), gettype($disability_Accommodations_Requested)), __LINE__);
        }
        $this->Disability_Accommodations_Requested = $disability_Accommodations_Requested;
        return $this;
    }
    /**
     * Get Disability_Accommodations_Provided value
     * @return string|null
     */
    public function getDisability_Accommodations_Provided()
    {
        return $this->Disability_Accommodations_Provided;
    }
    /**
     * Set Disability_Accommodations_Provided value
     * @param string $disability_Accommodations_Provided
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Accommodations_Provided($disability_Accommodations_Provided = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Accommodations_Provided) && !is_string($disability_Accommodations_Provided)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Accommodations_Provided, true), gettype($disability_Accommodations_Provided)), __LINE__);
        }
        $this->Disability_Accommodations_Provided = $disability_Accommodations_Provided;
        return $this;
    }
    /**
     * Get Disability_Rehabilitation_Requested value
     * @return string|null
     */
    public function getDisability_Rehabilitation_Requested()
    {
        return $this->Disability_Rehabilitation_Requested;
    }
    /**
     * Set Disability_Rehabilitation_Requested value
     * @param string $disability_Rehabilitation_Requested
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Rehabilitation_Requested($disability_Rehabilitation_Requested = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Rehabilitation_Requested) && !is_string($disability_Rehabilitation_Requested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Rehabilitation_Requested, true), gettype($disability_Rehabilitation_Requested)), __LINE__);
        }
        $this->Disability_Rehabilitation_Requested = $disability_Rehabilitation_Requested;
        return $this;
    }
    /**
     * Get Disability_Rehabilitation_Provided value
     * @return string|null
     */
    public function getDisability_Rehabilitation_Provided()
    {
        return $this->Disability_Rehabilitation_Provided;
    }
    /**
     * Set Disability_Rehabilitation_Provided value
     * @param string $disability_Rehabilitation_Provided
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Rehabilitation_Provided($disability_Rehabilitation_Provided = null)
    {
        // validation for constraint: string
        if (!is_null($disability_Rehabilitation_Provided) && !is_string($disability_Rehabilitation_Provided)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disability_Rehabilitation_Provided, true), gettype($disability_Rehabilitation_Provided)), __LINE__);
        }
        $this->Disability_Rehabilitation_Provided = $disability_Rehabilitation_Provided;
        return $this;
    }
    /**
     * Get Note value
     * @return string|null
     */
    public function getNote()
    {
        return $this->Note;
    }
    /**
     * Set Note value
     * @param string $note
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setNote($note = null)
    {
        // validation for constraint: string
        if (!is_null($note) && !is_string($note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($note, true), gettype($note)), __LINE__);
        }
        $this->Note = $note;
        return $this;
    }
    /**
     * Get Worker_Document_Reference value
     * @return \StructType\Worker_DocumentObjectType[]|null
     */
    public function getWorker_Document_Reference()
    {
        return $this->Worker_Document_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Document_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Document_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Document_ReferenceForArrayConstraintsFromSetWorker_Document_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Disability_Status_DataTypeWorker_Document_ReferenceItem) {
            // validation for constraint: itemType
            if (!$person_Disability_Status_DataTypeWorker_Document_ReferenceItem instanceof \StructType\Worker_DocumentObjectType) {
                $invalidValues[] = is_object($person_Disability_Status_DataTypeWorker_Document_ReferenceItem) ? get_class($person_Disability_Status_DataTypeWorker_Document_ReferenceItem) : sprintf('%s(%s)', gettype($person_Disability_Status_DataTypeWorker_Document_ReferenceItem), var_export($person_Disability_Status_DataTypeWorker_Document_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Document_Reference property can only contain items of type \StructType\Worker_DocumentObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Document_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_DocumentObjectType[] $worker_Document_Reference
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setWorker_Document_Reference(array $worker_Document_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Document_ReferenceArrayErrorMessage = self::validateWorker_Document_ReferenceForArrayConstraintsFromSetWorker_Document_Reference($worker_Document_Reference))) {
            throw new \InvalidArgumentException($worker_Document_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Worker_Document_Reference = $worker_Document_Reference;
        return $this;
    }
    /**
     * Add item to Worker_Document_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_DocumentObjectType $item
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function addToWorker_Document_Reference(\StructType\Worker_DocumentObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Worker_DocumentObjectType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Document_Reference property can only contain items of type \StructType\Worker_DocumentObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Document_Reference[] = $item;
        return $this;
    }
    /**
     * Get Disability_Status_Reference value
     * @return \StructType\Disability_Status_ReferenceObjectType|null
     */
    public function getDisability_Status_Reference()
    {
        return $this->Disability_Status_Reference;
    }
    /**
     * Set Disability_Status_Reference value
     * @param \StructType\Disability_Status_ReferenceObjectType $disability_Status_Reference
     * @return \StructType\Person_Disability_Status_DataType
     */
    public function setDisability_Status_Reference(\StructType\Disability_Status_ReferenceObjectType $disability_Status_Reference = null)
    {
        $this->Disability_Status_Reference = $disability_Status_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Person_Disability_Status_DataType
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
