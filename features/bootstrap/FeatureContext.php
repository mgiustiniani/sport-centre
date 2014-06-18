<?php

use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Context\TranslatableContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Behat context class.
 */
class FeatureContext implements SnippetAcceptingContext,
    TranslatableContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context object.
     * You can also pass arbitrary arguments to the context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * Returns array of Translator-supported resource paths.
     *
     * For instance:
     *
     *  * array(__DIR__.'/../'ru.yml)
     *  * array(__DIR__.'/../'en.xliff)
     *  * array(__DIR__.'/../'de.php)
     *
     * @return string[]
     */
    public static function getTranslationResources()
    {
       return glob(__DIR__ . '/../../i18n/*.xliff');
    }
}
