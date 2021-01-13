<?php
namespace EonInfosys\Contact\Api;

/**
 * Interface ContactusManagementInterface
 *
 * @package EonInfosys\Contact\Api
 */
interface ContactusManagementInterface
{
    /**
     * Contact us form.
     *
     * @param mixed $contactForm
     *
     * @return \EonInfosys\Contact\Api\Data\ContactusInterface
     */
    public function submitForm($contactForm);
}
