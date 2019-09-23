<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Instructor_Eligibility_Line_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains Instructor Eligibility Line Data
 * @subpackage Structs
 */
class Instructor_Eligibility_Line_DataType extends AbstractStructBase
{
    /**
     * The Academic_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic unit where the instructor is eligible to teach.
     * - minOccurs: 0
     * @var \StructType\Academic_UnitObjectType
     */
    public $Academic_Unit_Reference;
    /**
     * The Academic_Level_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic levels that the instructor is eligible to teach.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Academic_LevelObjectType[]
     */
    public $Academic_Level_Reference;
    /**
     * The Course_Subject_Reference
     * Meta information extracted from the WSDL
     * - documentation: Course subjects that the instructor is eligible to teach.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Course_SubjectObjectType[]
     */
    public $Course_Subject_Reference;
    /**
     * The Course_Reference
     * Meta information extracted from the WSDL
     * - documentation: Courses that the instructor is eligible to teach.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Course_DefinitionObjectType[]
     */
    public $Course_Reference;
    /**
     * The Delivery_Mode_Reference
     * Meta information extracted from the WSDL
     * - documentation: Delivery modes for which the instructor is eligible.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Delivery_ModeObjectType[]
     */
    public $Delivery_Mode_Reference;
    /**
     * The Course_Tag_Reference
     * Meta information extracted from the WSDL
     * - documentation: Course tags for the courses that the instructor is eligible to teach.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Student_Course_TagObjectType[]
     */
    public $Course_Tag_Reference;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Locations where the instructor is eligible to teach.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\LocationObjectType[]
     */
    public $Location_Reference;
    /**
     * The Educational_Taxonomy_Code_Reference
     * Meta information extracted from the WSDL
     * - documentation: Educational taxonomy codes for the courses that the instructor is eligible to teach.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Educational_Taxonomy_CodeObjectType[]
     */
    public $Educational_Taxonomy_Code_Reference;
    /**
     * Constructor method for Instructor_Eligibility_Line_DataType
     * @uses Instructor_Eligibility_Line_DataType::setAcademic_Unit_Reference()
     * @uses Instructor_Eligibility_Line_DataType::setAcademic_Level_Reference()
     * @uses Instructor_Eligibility_Line_DataType::setCourse_Subject_Reference()
     * @uses Instructor_Eligibility_Line_DataType::setCourse_Reference()
     * @uses Instructor_Eligibility_Line_DataType::setDelivery_Mode_Reference()
     * @uses Instructor_Eligibility_Line_DataType::setCourse_Tag_Reference()
     * @uses Instructor_Eligibility_Line_DataType::setLocation_Reference()
     * @uses Instructor_Eligibility_Line_DataType::setEducational_Taxonomy_Code_Reference()
     * @param \StructType\Academic_UnitObjectType $academic_Unit_Reference
     * @param \StructType\Academic_LevelObjectType[] $academic_Level_Reference
     * @param \StructType\Course_SubjectObjectType[] $course_Subject_Reference
     * @param \StructType\Course_DefinitionObjectType[] $course_Reference
     * @param \StructType\Delivery_ModeObjectType[] $delivery_Mode_Reference
     * @param \StructType\Student_Course_TagObjectType[] $course_Tag_Reference
     * @param \StructType\LocationObjectType[] $location_Reference
     * @param \StructType\Educational_Taxonomy_CodeObjectType[] $educational_Taxonomy_Code_Reference
     */
    public function __construct(\StructType\Academic_UnitObjectType $academic_Unit_Reference = null, array $academic_Level_Reference = array(), array $course_Subject_Reference = array(), array $course_Reference = array(), array $delivery_Mode_Reference = array(), array $course_Tag_Reference = array(), array $location_Reference = array(), array $educational_Taxonomy_Code_Reference = array())
    {
        $this
            ->setAcademic_Unit_Reference($academic_Unit_Reference)
            ->setAcademic_Level_Reference($academic_Level_Reference)
            ->setCourse_Subject_Reference($course_Subject_Reference)
            ->setCourse_Reference($course_Reference)
            ->setDelivery_Mode_Reference($delivery_Mode_Reference)
            ->setCourse_Tag_Reference($course_Tag_Reference)
            ->setLocation_Reference($location_Reference)
            ->setEducational_Taxonomy_Code_Reference($educational_Taxonomy_Code_Reference);
    }
    /**
     * Get Academic_Unit_Reference value
     * @return \StructType\Academic_UnitObjectType|null
     */
    public function getAcademic_Unit_Reference()
    {
        return $this->Academic_Unit_Reference;
    }
    /**
     * Set Academic_Unit_Reference value
     * @param \StructType\Academic_UnitObjectType $academic_Unit_Reference
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function setAcademic_Unit_Reference(\StructType\Academic_UnitObjectType $academic_Unit_Reference = null)
    {
        $this->Academic_Unit_Reference = $academic_Unit_Reference;
        return $this;
    }
    /**
     * Get Academic_Level_Reference value
     * @return \StructType\Academic_LevelObjectType[]|null
     */
    public function getAcademic_Level_Reference()
    {
        return $this->Academic_Level_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Level_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Level_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_Level_ReferenceForArrayConstraintsFromSetAcademic_Level_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $instructor_Eligibility_Line_DataTypeAcademic_Level_ReferenceItem) {
            // validation for constraint: itemType
            if (!$instructor_Eligibility_Line_DataTypeAcademic_Level_ReferenceItem instanceof \StructType\Academic_LevelObjectType) {
                $invalidValues[] = is_object($instructor_Eligibility_Line_DataTypeAcademic_Level_ReferenceItem) ? get_class($instructor_Eligibility_Line_DataTypeAcademic_Level_ReferenceItem) : sprintf('%s(%s)', gettype($instructor_Eligibility_Line_DataTypeAcademic_Level_ReferenceItem), var_export($instructor_Eligibility_Line_DataTypeAcademic_Level_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Level_Reference property can only contain items of type \StructType\Academic_LevelObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Level_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_LevelObjectType[] $academic_Level_Reference
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function setAcademic_Level_Reference(array $academic_Level_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_Level_ReferenceArrayErrorMessage = self::validateAcademic_Level_ReferenceForArrayConstraintsFromSetAcademic_Level_Reference($academic_Level_Reference))) {
            throw new \InvalidArgumentException($academic_Level_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Academic_Level_Reference = $academic_Level_Reference;
        return $this;
    }
    /**
     * Add item to Academic_Level_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_LevelObjectType $item
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function addToAcademic_Level_Reference(\StructType\Academic_LevelObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Academic_LevelObjectType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Level_Reference property can only contain items of type \StructType\Academic_LevelObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Level_Reference[] = $item;
        return $this;
    }
    /**
     * Get Course_Subject_Reference value
     * @return \StructType\Course_SubjectObjectType[]|null
     */
    public function getCourse_Subject_Reference()
    {
        return $this->Course_Subject_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCourse_Subject_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCourse_Subject_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCourse_Subject_ReferenceForArrayConstraintsFromSetCourse_Subject_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $instructor_Eligibility_Line_DataTypeCourse_Subject_ReferenceItem) {
            // validation for constraint: itemType
            if (!$instructor_Eligibility_Line_DataTypeCourse_Subject_ReferenceItem instanceof \StructType\Course_SubjectObjectType) {
                $invalidValues[] = is_object($instructor_Eligibility_Line_DataTypeCourse_Subject_ReferenceItem) ? get_class($instructor_Eligibility_Line_DataTypeCourse_Subject_ReferenceItem) : sprintf('%s(%s)', gettype($instructor_Eligibility_Line_DataTypeCourse_Subject_ReferenceItem), var_export($instructor_Eligibility_Line_DataTypeCourse_Subject_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Course_Subject_Reference property can only contain items of type \StructType\Course_SubjectObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Course_Subject_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Course_SubjectObjectType[] $course_Subject_Reference
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function setCourse_Subject_Reference(array $course_Subject_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($course_Subject_ReferenceArrayErrorMessage = self::validateCourse_Subject_ReferenceForArrayConstraintsFromSetCourse_Subject_Reference($course_Subject_Reference))) {
            throw new \InvalidArgumentException($course_Subject_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Course_Subject_Reference = $course_Subject_Reference;
        return $this;
    }
    /**
     * Add item to Course_Subject_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Course_SubjectObjectType $item
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function addToCourse_Subject_Reference(\StructType\Course_SubjectObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Course_SubjectObjectType) {
            throw new \InvalidArgumentException(sprintf('The Course_Subject_Reference property can only contain items of type \StructType\Course_SubjectObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Course_Subject_Reference[] = $item;
        return $this;
    }
    /**
     * Get Course_Reference value
     * @return \StructType\Course_DefinitionObjectType[]|null
     */
    public function getCourse_Reference()
    {
        return $this->Course_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCourse_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCourse_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCourse_ReferenceForArrayConstraintsFromSetCourse_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $instructor_Eligibility_Line_DataTypeCourse_ReferenceItem) {
            // validation for constraint: itemType
            if (!$instructor_Eligibility_Line_DataTypeCourse_ReferenceItem instanceof \StructType\Course_DefinitionObjectType) {
                $invalidValues[] = is_object($instructor_Eligibility_Line_DataTypeCourse_ReferenceItem) ? get_class($instructor_Eligibility_Line_DataTypeCourse_ReferenceItem) : sprintf('%s(%s)', gettype($instructor_Eligibility_Line_DataTypeCourse_ReferenceItem), var_export($instructor_Eligibility_Line_DataTypeCourse_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Course_Reference property can only contain items of type \StructType\Course_DefinitionObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Course_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Course_DefinitionObjectType[] $course_Reference
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function setCourse_Reference(array $course_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($course_ReferenceArrayErrorMessage = self::validateCourse_ReferenceForArrayConstraintsFromSetCourse_Reference($course_Reference))) {
            throw new \InvalidArgumentException($course_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Course_Reference = $course_Reference;
        return $this;
    }
    /**
     * Add item to Course_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Course_DefinitionObjectType $item
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function addToCourse_Reference(\StructType\Course_DefinitionObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Course_DefinitionObjectType) {
            throw new \InvalidArgumentException(sprintf('The Course_Reference property can only contain items of type \StructType\Course_DefinitionObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Course_Reference[] = $item;
        return $this;
    }
    /**
     * Get Delivery_Mode_Reference value
     * @return \StructType\Delivery_ModeObjectType[]|null
     */
    public function getDelivery_Mode_Reference()
    {
        return $this->Delivery_Mode_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setDelivery_Mode_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDelivery_Mode_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDelivery_Mode_ReferenceForArrayConstraintsFromSetDelivery_Mode_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $instructor_Eligibility_Line_DataTypeDelivery_Mode_ReferenceItem) {
            // validation for constraint: itemType
            if (!$instructor_Eligibility_Line_DataTypeDelivery_Mode_ReferenceItem instanceof \StructType\Delivery_ModeObjectType) {
                $invalidValues[] = is_object($instructor_Eligibility_Line_DataTypeDelivery_Mode_ReferenceItem) ? get_class($instructor_Eligibility_Line_DataTypeDelivery_Mode_ReferenceItem) : sprintf('%s(%s)', gettype($instructor_Eligibility_Line_DataTypeDelivery_Mode_ReferenceItem), var_export($instructor_Eligibility_Line_DataTypeDelivery_Mode_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Delivery_Mode_Reference property can only contain items of type \StructType\Delivery_ModeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Delivery_Mode_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Delivery_ModeObjectType[] $delivery_Mode_Reference
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function setDelivery_Mode_Reference(array $delivery_Mode_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($delivery_Mode_ReferenceArrayErrorMessage = self::validateDelivery_Mode_ReferenceForArrayConstraintsFromSetDelivery_Mode_Reference($delivery_Mode_Reference))) {
            throw new \InvalidArgumentException($delivery_Mode_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Delivery_Mode_Reference = $delivery_Mode_Reference;
        return $this;
    }
    /**
     * Add item to Delivery_Mode_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Delivery_ModeObjectType $item
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function addToDelivery_Mode_Reference(\StructType\Delivery_ModeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Delivery_ModeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Delivery_Mode_Reference property can only contain items of type \StructType\Delivery_ModeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Delivery_Mode_Reference[] = $item;
        return $this;
    }
    /**
     * Get Course_Tag_Reference value
     * @return \StructType\Student_Course_TagObjectType[]|null
     */
    public function getCourse_Tag_Reference()
    {
        return $this->Course_Tag_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCourse_Tag_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCourse_Tag_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCourse_Tag_ReferenceForArrayConstraintsFromSetCourse_Tag_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $instructor_Eligibility_Line_DataTypeCourse_Tag_ReferenceItem) {
            // validation for constraint: itemType
            if (!$instructor_Eligibility_Line_DataTypeCourse_Tag_ReferenceItem instanceof \StructType\Student_Course_TagObjectType) {
                $invalidValues[] = is_object($instructor_Eligibility_Line_DataTypeCourse_Tag_ReferenceItem) ? get_class($instructor_Eligibility_Line_DataTypeCourse_Tag_ReferenceItem) : sprintf('%s(%s)', gettype($instructor_Eligibility_Line_DataTypeCourse_Tag_ReferenceItem), var_export($instructor_Eligibility_Line_DataTypeCourse_Tag_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Course_Tag_Reference property can only contain items of type \StructType\Student_Course_TagObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Course_Tag_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Student_Course_TagObjectType[] $course_Tag_Reference
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function setCourse_Tag_Reference(array $course_Tag_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($course_Tag_ReferenceArrayErrorMessage = self::validateCourse_Tag_ReferenceForArrayConstraintsFromSetCourse_Tag_Reference($course_Tag_Reference))) {
            throw new \InvalidArgumentException($course_Tag_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Course_Tag_Reference = $course_Tag_Reference;
        return $this;
    }
    /**
     * Add item to Course_Tag_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Student_Course_TagObjectType $item
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function addToCourse_Tag_Reference(\StructType\Student_Course_TagObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Student_Course_TagObjectType) {
            throw new \InvalidArgumentException(sprintf('The Course_Tag_Reference property can only contain items of type \StructType\Student_Course_TagObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Course_Tag_Reference[] = $item;
        return $this;
    }
    /**
     * Get Location_Reference value
     * @return \StructType\LocationObjectType[]|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_ReferenceForArrayConstraintsFromSetLocation_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $instructor_Eligibility_Line_DataTypeLocation_ReferenceItem) {
            // validation for constraint: itemType
            if (!$instructor_Eligibility_Line_DataTypeLocation_ReferenceItem instanceof \StructType\LocationObjectType) {
                $invalidValues[] = is_object($instructor_Eligibility_Line_DataTypeLocation_ReferenceItem) ? get_class($instructor_Eligibility_Line_DataTypeLocation_ReferenceItem) : sprintf('%s(%s)', gettype($instructor_Eligibility_Line_DataTypeLocation_ReferenceItem), var_export($instructor_Eligibility_Line_DataTypeLocation_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Reference property can only contain items of type \StructType\LocationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationObjectType[] $location_Reference
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function setLocation_Reference(array $location_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_ReferenceArrayErrorMessage = self::validateLocation_ReferenceForArrayConstraintsFromSetLocation_Reference($location_Reference))) {
            throw new \InvalidArgumentException($location_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Add item to Location_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationObjectType $item
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function addToLocation_Reference(\StructType\LocationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LocationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Reference property can only contain items of type \StructType\LocationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Reference[] = $item;
        return $this;
    }
    /**
     * Get Educational_Taxonomy_Code_Reference value
     * @return \StructType\Educational_Taxonomy_CodeObjectType[]|null
     */
    public function getEducational_Taxonomy_Code_Reference()
    {
        return $this->Educational_Taxonomy_Code_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setEducational_Taxonomy_Code_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEducational_Taxonomy_Code_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEducational_Taxonomy_Code_ReferenceForArrayConstraintsFromSetEducational_Taxonomy_Code_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $instructor_Eligibility_Line_DataTypeEducational_Taxonomy_Code_ReferenceItem) {
            // validation for constraint: itemType
            if (!$instructor_Eligibility_Line_DataTypeEducational_Taxonomy_Code_ReferenceItem instanceof \StructType\Educational_Taxonomy_CodeObjectType) {
                $invalidValues[] = is_object($instructor_Eligibility_Line_DataTypeEducational_Taxonomy_Code_ReferenceItem) ? get_class($instructor_Eligibility_Line_DataTypeEducational_Taxonomy_Code_ReferenceItem) : sprintf('%s(%s)', gettype($instructor_Eligibility_Line_DataTypeEducational_Taxonomy_Code_ReferenceItem), var_export($instructor_Eligibility_Line_DataTypeEducational_Taxonomy_Code_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Educational_Taxonomy_Code_Reference property can only contain items of type \StructType\Educational_Taxonomy_CodeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Educational_Taxonomy_Code_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Educational_Taxonomy_CodeObjectType[] $educational_Taxonomy_Code_Reference
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function setEducational_Taxonomy_Code_Reference(array $educational_Taxonomy_Code_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($educational_Taxonomy_Code_ReferenceArrayErrorMessage = self::validateEducational_Taxonomy_Code_ReferenceForArrayConstraintsFromSetEducational_Taxonomy_Code_Reference($educational_Taxonomy_Code_Reference))) {
            throw new \InvalidArgumentException($educational_Taxonomy_Code_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Educational_Taxonomy_Code_Reference = $educational_Taxonomy_Code_Reference;
        return $this;
    }
    /**
     * Add item to Educational_Taxonomy_Code_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Educational_Taxonomy_CodeObjectType $item
     * @return \StructType\Instructor_Eligibility_Line_DataType
     */
    public function addToEducational_Taxonomy_Code_Reference(\StructType\Educational_Taxonomy_CodeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Educational_Taxonomy_CodeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Educational_Taxonomy_Code_Reference property can only contain items of type \StructType\Educational_Taxonomy_CodeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Educational_Taxonomy_Code_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Instructor_Eligibility_Line_DataType
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
