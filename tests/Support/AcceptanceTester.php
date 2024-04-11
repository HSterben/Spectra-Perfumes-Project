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

    /**
     * @Given I am logged in as user
     */
     public function iAmLoggedInAsUser()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged in as user` is not defined");
     }

    /**
     * @When I view the list of invoices
     */
     public function iViewTheListOfInvoices()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I view the list of invoices` is not defined");
     }

    /**
     * @When there is an invoice on the invoice list view
     */
     public function thereIsAnInvoiceOnTheInvoiceListView()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `there is an invoice on the invoice list view` is not defined");
     }

    /**
     * @When I click on a specific invoice
     */
     public function iClickOnASpecificInvoice()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on a specific invoice` is not defined");
     }

    /**
     * @Then I should see the exact invoice I clicked on
     */
     public function iShouldSeeTheExactInvoiceIClickedOn()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see the exact invoice I clicked on` is not defined");
     }

    /**
     * @When I view the list of invoices
     */
     public function iViewTheListOfInvoices()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I view the list of invoices` is not defined");
     }

    /**
     * @Then I should see a timestamp next to each invoice, indicating the date and time when the invoice was created
     */
     public function iShouldSeeATimestampNextToEachInvoiceIndicatingTheDateAndTimeWhenTheInvoiceWasCreated()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a timestamp next to each invoice, indicating the date and time when the invoice was created` is not defined");
     }

    /**
     * @Then the timestamp should be in a readable format, such as :arg1
     */
     public function theTimestampShouldBeInAReadableFormatSuchAs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the timestamp should be in a readable format, such as :arg1` is not defined");
     }

    /**
     * @When there is an invoice on the invoice list view
     */
     public function thereIsAnInvoiceOnTheInvoiceListView()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `there is an invoice on the invoice list view` is not defined");
     }

    /**
     * @When I click on a specific invoice
     */
     public function iClickOnASpecificInvoice()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on a specific invoice` is not defined");
     }

    /**
     * @Then I should see the exact invoice I clicked on
     */
     public function iShouldSeeTheExactInvoiceIClickedOn()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see the exact invoice I clicked on` is not defined");
     }

    /**
     * @Then the invoices should be displayed in a default sorting order
     */
     public function theInvoicesShouldBeDisplayedInADefaultSortingOrder()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the invoices should be displayed in a default sorting order` is not defined");
     }

    /**
     * @Then I should see options to sort invoices by different criteria such as date, customer name, or total amount
     */
     public function iShouldSeeOptionsToSortInvoicesByDifferentCriteriaSuchAsDateCustomerNameOrTotalAmount()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see options to sort invoices by different criteria such as date, customer name, or total amount` is not defined");
     }

    /**
     * @When I select to sort invoices by date
     */
     public function iSelectToSortInvoicesByDate()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I select to sort invoices by date` is not defined");
     }

    /**
     * @Then the invoices should be rearranged in chronological order based on their creation date
     */
     public function theInvoicesShouldBeRearrangedInChronologicalOrderBasedOnTheirCreationDate()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the invoices should be rearranged in chronological order based on their creation date` is not defined");
     }

    /**
     * @When I select to sort invoices by customer name
     */
     public function iSelectToSortInvoicesByCustomerName()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I select to sort invoices by customer name` is not defined");
     }

    /**
     * @Then the invoices should be rearranged in alphabetical order based on the customer's name
     */
     public function theInvoicesShouldBeRearrangedInAlphabeticalOrderBasedOnTheCustomersName()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the invoices should be rearranged in alphabetical order based on the customer's name` is not defined");
     }

    /**
     * @When I select to sort invoices by total amount
     */
     public function iSelectToSortInvoicesByTotalAmount()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I select to sort invoices by total amount` is not defined");
     }

    /**
     * @Then the invoices should be rearranged in ascending order based on their total amount
     */
     public function theInvoicesShouldBeRearrangedInAscendingOrderBasedOnTheirTotalAmount()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the invoices should be rearranged in ascending order based on their total amount` is not defined");
     }
	 
	  /**
     * @Given I am logged in as a user
     */
     public function iAmLoggedInAsAUser()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged in as a user` is not defined");
     }

    /**
     * @When I navigate to the invoice analysis page
     */
     public function iNavigateToTheInvoiceAnalysisPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I navigate to the invoice analysis page` is not defined");
     }

    /**
     * @Then I should see options to export invoice analysis data as PDF
     */
     public function iShouldSeeOptionsToExportInvoiceAnalysisDataAsPDF()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see options to export invoice analysis data as PDF` is not defined");
     }

    /**
     * @When I click the “Convert to PDF” button
     */
     public function iClickTheConvertToPDFButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the “Convert to PDF” button` is not defined");
     }

    /**
     * @Then a dialog should show up, asking me to choose a directory to save to
     */
     public function aDialogShouldShowUpAskingMeToChooseADirectoryToSaveTo()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `a dialog should show up, asking me to choose a directory to save to` is not defined");
     }
/**
     * @Given I am logged in as user
     */
     public function iAmLoggedInAsUser()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged in as user` is not defined");
     }

    /**
     * @When I view the list of invoices
     */
     public function iViewTheListOfInvoices()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I view the list of invoices` is not defined");
     }

    /**
     * @Then I should see a timestamp next to each invoice, indicating the date and time when the invoice was created
     */
     public function iShouldSeeATimestampNextToEachInvoiceIndicatingTheDateAndTimeWhenTheInvoiceWasCreated()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a timestamp next to each invoice, indicating the date and time when the invoice was created` is not defined");
     }

/**
     * @Given I am logged in as user
     */
     public function iAmLoggedInAsUser()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged in as user` is not defined");
     }

    /**
     * @When I view the list of invoices
     */
     public function iViewTheListOfInvoices()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I view the list of invoices` is not defined");
     }

    /**
     * @When there is an existing folder
     */
     public function thereIsAnExistingFolder()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `there is an existing folder` is not defined");
     }

    /**
     * @When there is an existing invoice on the view
     */
     public function thereIsAnExistingInvoiceOnTheView()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `there is an existing invoice on the view` is not defined");
     }

    /**
     * @When I select a specific invoice to add to a folder using the checkboxes next to the invoices
     */
     public function iSelectASpecificInvoiceToAddToAFolderUsingTheCheckboxesNextToTheInvoices()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I select a specific invoice to add to a folder using the checkboxes next to the invoices` is not defined");
     }

    /**
     * @When I press the “Add to Folder” button
     */
     public function iPressTheAddToFolderButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I press the “Add to Folder” button` is not defined");
     }

    /**
     * @Then it should prompt me asking which folder to add the invoice to with choices of existing folders, if any
     */
     public function itShouldPromptMeAskingWhichFolderToAddTheInvoiceToWithChoicesOfExistingFoldersIfAny()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `it should prompt me asking which folder to add the invoice to with choices of existing folders, if any` is not defined");
     }

    /**
     * @Then the selected invoice should move to the selected folder
     */
     public function theSelectedInvoiceShouldMoveToTheSelectedFolder()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the selected invoice should move to the selected folder` is not defined");
     }

    /**
     * @Then the selected invoice should no longer appear in the list of invoices
     */
     public function theSelectedInvoiceShouldNoLongerAppearInTheListOfInvoices()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the selected invoice should no longer appear in the list of invoices` is not defined");
     }

/**
     * @Given I enter an amount for a product bought on an invoice
     */
     public function iEnterAnAmountForAProductBoughtOnAnInvoice()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter an amount for a product bought on an invoice` is not defined");
     }

    /**
     * @Then I should see a total price with taxes on the invoice, depending on the tax amount defined on the settings page
     */
     public function iShouldSeeATotalPriceWithTaxesOnTheInvoiceDependingOnTheTaxAmountDefinedOnTheSettingsPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a total price with taxes on the invoice, depending on the tax amount defined on the settings page` is not defined");
     }

/**
     * @When I select invoices with a checkbox
     */
     public function iSelectInvoicesWithACheckbox()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I select invoices with a checkbox` is not defined");
     }

    /**
     * @When I click on the :arg1 button
     */
     public function iClickOnTheButton($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the :arg1 button` is not defined");
     }

    /**
     * @When I confirm the deletion
     */
     public function iConfirmTheDeletion()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I confirm the deletion` is not defined");
     }

    /**
     * @Then I should not see the invoices that I previously selected
     */
     public function iShouldNotSeeTheInvoicesThatIPreviouslySelected()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should not see the invoices that I previously selected` is not defined");
     }

    /**

}
