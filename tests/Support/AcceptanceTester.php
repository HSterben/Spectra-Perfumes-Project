<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @Given I am on the invoices page
     */
    public function iAmOnTheInvoicesPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the invoices page` is not defined");
    }

   /**
    * @When I enter :arg1 into the search field
    */
    public function iEnterIntoTheSearchField($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 into the search field` is not defined");
    }

   /**
    * @When I click on the search button
    */
    public function iClickOnTheSearchButton()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the search button` is not defined");
    }

   /**
    * @Then I should see the invoice with the number :arg1
    */
    public function iShouldSeeTheInvoiceWithTheNumber($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see the invoice with the number :arg1` is not defined");
    }
    /**
     * @Given I am on the settings page
     */
    public function iAmOnTheSettingsPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the settings page` is not defined");
    }

   /**
    * @When I click on the activity log
    */
    public function iClickOnTheActivityLog()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the activity log` is not defined");
    }

   /**
    * @Then I should see a log of recent actions performed by users
    */
    public function iShouldSeeALogOfRecentActionsPerformedByUsers()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a log of recent actions performed by users` is not defined");
    }

   /**
    * @Given I am viewing an invoice
    */
    public function iAmViewingAnInvoice()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am viewing an invoice` is not defined");
    }

   /**
    * @When I click on the star icon
    */
    public function iClickOnTheStarIcon()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the star icon` is not defined");
    }

   /**
    * @Then the invoice should be starred/bookmarked for easy access
    */
    public function theInvoiceShouldBeStarredbookmarkedForEasyAccess()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the invoice should be starred/bookmarked for easy access` is not defined");
    }

   /**
    * @Given I am viewing an existing invoice
    */
    public function iAmViewingAnExistingInvoice()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am viewing an existing invoice` is not defined");
    }

   /**
    * @When I click on the copy invoice button
    */
    public function iClickOnTheCopyInvoiceButton()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the copy invoice button` is not defined");
    }

   /**
    * @Then a new invoice should be created with the same details as the original invoice
    */
    public function aNewInvoiceShouldBeCreatedWithTheSameDetailsAsTheOriginalInvoice()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `a new invoice should be created with the same details as the original invoice` is not defined");
    }

   /**
    * @Given I am in the settings and I have AED set as the default currency
    */
    public function iAmInTheSettingsAndIHaveAEDSetAsTheDefaultCurrency()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am in the settings and I have AED set as the default currency` is not defined");
    }

   /**
    * @When I select CAD as the target currency
    */
    public function iSelectCADAsTheTargetCurrency()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select CAD as the target currency` is not defined");
    }

   /**
    * @Then the invoice amount should be converted to CAD based on the current exchange rate
    */
    public function theInvoiceAmountShouldBeConvertedToCADBasedOnTheCurrentExchangeRate()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the invoice amount should be converted to CAD based on the current exchange rate` is not defined");
    }

   /**
    * @When I toggle the dark mode switch
    */
    public function iToggleTheDarkModeSwitch()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I toggle the dark mode switch` is not defined");
    }

   /**
    * @Then the application should switch to dark mode
    */
    public function theApplicationShouldSwitchToDarkMode()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the application should switch to dark mode` is not defined");
    }

   /**
    * @When I click on the export to PDF button
    */
    public function iClickOnTheExportToPDFButton()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the export to PDF button` is not defined");
    }

   /**
    * @Then the invoice should be downloaded as a PDF file
    */
    public function theInvoiceShouldBeDownloadedAsAPDFFile()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the invoice should be downloaded as a PDF file` is not defined");
    }
}
