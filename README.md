# phpEmailValidator
Php Email Validator. Validate any email


# Getting Started

include "emailValidator.php"; 

$emailValidator = new emailValidator();

$emailValidator->isValid($email); // return true or false

Or:

foreach($emails as $email):
echo $emailValidator->isValid($email);
...
endforeach;
