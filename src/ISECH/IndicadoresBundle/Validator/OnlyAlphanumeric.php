<?php
namespace ISECH\IndicadoresBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
	class OnlyAlphanumeric extends Constraint
	{
		public $message = 'The string "%string%" contains an illegal character: it can only contain letters or numbers.';
	}
?>