<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Composer\Downloader;

/**
 * Exception thrown when issues exist on local filesystem
 *
 * @author Javier Spagnoletti <jspagnoletti@javierspagnoletti.com.ar>
 */
class FilesystemException extends \Exception
{
    public function __construct($message = '', $code = 0, \Exception $previous = null)
    {
        parent::__construct("Filesystem exception: \n" . $message, $code, $previous);
    }
}

?>