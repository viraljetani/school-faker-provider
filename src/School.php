<?php
namespace Faker\Provider;

class School extends \Faker\Provider\Base
{
  protected static $formats = array(
    '{{lastName}} {{schoolLocation}} {{schoolType}} {{schoolSuffix}}',
    '{{lastName}} {{schoolLocation}} {{schoolSuffix}}',
    '{{lastName}} {{schoolType}} {{schoolSuffix}}',
  );

  protected static $schoolLocation = array('North', 'East', 'West', 'South', 'Central', 'Lake', 'View', 'City', 'Park', 'Valley');
  protected static $schoolType = array('High', 'Charter', 'Tech High', 'Junior', 'Christian', 'Memorial', 'Secondary', 'Middle',
                                  'Community', 'Senior');
  protected static $schoolSuffix = array('School', 'Academy', 'Heights', 'Institute', 'School for the Arts', 'Collegiate Institute');

  public function school()
  {
    $format = static::randomElement(static::$formats);
    return $this->generator->parse($format);
  }

  public static function schoolSuffix()
  {
    return static::randomElement(static::$schoolSuffix);
  }

  public static function schoolType()
  {
    return static::randomElement(static::$schoolType);
  }

  public static function schoolLocation()
  {
    return static::randomElement(static::$schoolLocation);
  }

}
