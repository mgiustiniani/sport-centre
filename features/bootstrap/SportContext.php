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
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//
use Behat\MinkExtension\Context\MinkContext;
use Behat\MinkExtension\Context\MinkDictionary;
/**
 * Features context.
 */
class SportContext extends BehatContext
{
    use MinkDictionary;
    /**
     * @Given /^I have client http$/
     */
    public function iHaveClientHttp()
    {
        return true;
    }




    /**
     * @When /^I visit "([^"]*)"$/
     */
    public function iVisit($arg1)
    {
        throw new PendingException();
    }




}
