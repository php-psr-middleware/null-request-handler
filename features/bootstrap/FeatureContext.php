<?php
declare(strict_types = 1);

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;

class FeatureContext implements Context
{
    private $handler;
    private $response;

    /**
     * @When a response is returned
     */
    public function aResponseIsReturned()
    {
        $this->response = $this->handler->handle(new Zend\Diactoros\ServerRequest());
    }

    /**
     * @Then the response body is empty
     */
    public function theResponseBodyIsEmpty()
    {
        $this->response->getBody() === '';
    }

    /**
     * @Then the response status code is :arg1
     */
    public function theResponseStatusCodeIs($arg1)
    {
        $this->response->getStatusCode() === $arg1;
    }

    /**
     * @Given constructor argument is :arg1
     */
    public function constructorArgumentIs2($arg1)
    {
        $this->handler = new \PsrMiddlewares\NullRequestHandler($arg1);
    }
}
