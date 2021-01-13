<?php
namespace EonInfosys\Contact\Api\Data;

/**
 * ContactusInterface interface
 *
 * @api
 * @since 100.0.2
 */
interface ContactusInterface
{
    /**
    * @return \EonInfosys\Contact\Api\Data\ContactusInterface[]
     */
    public function getMessage();

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message);
}
