<?php
namespace Manticora\SportCentre\Infrastucture\Symfony\Bundle\ApiBundle\Features\Context;
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
   require_once 'PHPUnit/Autoload.php';
   require_once 'PHPUnit/Framework/Assert/Functions.php';
//
use Behat\MinkExtension\Context\MinkContext;
use Behat\MinkExtension\Context\MinkDictionary;
/**
 * Features context.
 */
class SportContext extends MinkContext
{

    /**
     * @Given /^I add "([^"]*)" header equal to "([^"]*)"$/
     */
    public function iAddHeaderEqualTo($header, $value)
    {
        $this->getSession()->setRequestHeader($header, $value);
    }

    /**
     * @Then /^I should response status code "([^"]*)"$/
     */
    public function iShouldResponseStatusCode($status_code)
    {
     $this->getSession()->getStatusCode() === $status_code;

    }





}
