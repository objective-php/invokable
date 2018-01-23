<?php

namespace ObjectivePHP\Invokable;

use ObjectivePHP\Application\ApplicationInterface;


/**
 * Interface InvokableInterface
 *
 * @package ObjectivePHP\Invokable
 */
interface InvokableInterface
{
    /**
     * Run the operation
     *
     * @param mixed                ...$args
     *
     * @return mixed
     */
    public function __invoke(...$args);

    /**
     * Return short description
     *
     * @return string
     */
    public function getDescription() : string;

    /**
     * @param ApplicationInterface $app
     * @return InvokableInterface
     */
    public function setApplication(ApplicationInterface $app) : InvokableInterface;

    /**
     * @return ApplicationInterface
     */
    public function getApplication() : ApplicationInterface;

/**
 * @return callable
 */
public function getCallable();

}
