<?php namespace October\Rain\Validation;

use Illuminate\Validation\Validator as BaseValidator;
use Illuminate\Contracts\Validation\Validator as ValidatorContract;

/**
 * October CMS wrapper for the Laravel Validator class.
 *
 * The only difference between this and the BaseValidator is that it resets the email validation rule to use the
 * `filter` method by default.
 *
 * It also does some custom handling of Rule objects through the FormatsMessages concern.
 */
class Validator extends BaseValidator implements ValidatorContract
{
    use \October\Rain\Validation\Concerns\ValidatesEmail;
    use Concerns\FormatsMessages;
}
