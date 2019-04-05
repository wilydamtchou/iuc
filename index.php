<?php
/**
 * Index file
 *
 * (c) IUC <willy.damtchou@gmail.com>
 *
 * PHP version 7.2.16
 *
 * @category  class
 *
 * @package   \
 *
 * @author    Willy DAMTCHOU <willydamtchou@gmail.com>
 *
 * @copyright 2019 IUC
 *
 * @license   IUC
 *
 * @link      https://www.iuc-univ.net
 */

use iuc\Good\Student;

require 'vendor/autoload.php';

echo 'IUC Project Test';

main();

/**
 * Main function
 *
 * @return void
 */
function main() : void
{
    $student = new Student();

    echo "Etudiant $student";
}
