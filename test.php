<?
/*
 * Package Name: Email Validator
 * File Description: Simple test
 * 
 * @author Beto Ayesa <beto.phpninja@gmail.com>
 * @version 1.0.0
 * @package PhpEmailValidator
 * @license GPL3
 * @link https://github.com/natzar/stripe-pad
 * 
 
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    This file is part of Stripe Pad.

	Stripe Pad is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

	Stripe Pad is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

	You should have received a copy of the GNU General Public License along with  Stripe Pad. If not, see <https://www.gnu.org/licenses/>.
*/

include "emailValidator.php";


$validator = new emailValidator();

$emails = ["hola@15meg4free.com","contacto@globalstudio.es","15meg4free.com","noreply@google.com","no-reply@google.com","devaca"];

foreach($emails as $email):
	$res = $validator->isValid($email) ? 'good' : 'bad';

	echo "The email ".$email." is ".$res.PHP_EOL;

endforeach;
