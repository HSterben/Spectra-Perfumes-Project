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
     
     //Sterbonie
     public function iAmOnTheMainPage()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the main page` is not defined");
   }

   /**
    * @When I click on the “Add Comment” for the invoice
    */
   public function iClickOnTheAddCommentForTheInvoice()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the “Add Comment” for the invoice` is not defined");
   }

   /**
    * @When I enter :arg1 into the comment form
    */
   public function iEnterIntoTheCommentForm($arg1)
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter :arg1 into the comment form` is not defined");
   }

   /**
    * @When I click on the :arg1 button
    */
   public function iClickOnTheButton($arg1)
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the :arg1 button` is not defined");
   }

   /**
    * @Then I should see the comment :arg1 saved with the invoice
    */
   public function iShouldSeeTheCommentSavedWithTheInvoice($arg1)
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see the comment :arg1 saved with the invoice` is not defined");
   }

   /**
    * @Given I am on the :arg1 page
    */
   public function iAmOnThePage($arg1)
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the :arg1 page` is not defined");
   }

   /**
    * @When I fill in the store and product details
    */
   public function iFillInTheStoreAndProductDetails()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I fill in the store and product details` is not defined");
   }

   /**
    * @Then I should see a confirmation message
    */
   public function iShouldSeeAConfirmationMessage()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see a confirmation message` is not defined");
   }

   /**
    * @Then I should be redirected to the view page of that invoice
    */
   public function iShouldBeRedirectedToTheViewPageOfThatInvoice()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the view page of that invoice` is not defined");
   }

   /**
    * @When I select :arg1 as the date format
    */
   public function iSelectAsTheDateFormat($arg1)
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I select :arg1 as the date format` is not defined");
   }

   /**
    * @Then I should see all dates on invoices displayed in :arg1 format
    */
   public function iShouldSeeAllDatesOnInvoicesDisplayedInFormat($arg1)
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see all dates on invoices displayed in :arg1 format` is not defined");
   }

   /**
    * @Given I have an invoice
    */
   public function iHaveAnInvoice()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I have an invoice` is not defined");
   }

   /**
    * @When I click on the :arg1 button for the invoice
    */
   public function iClickOnTheButtonForTheInvoice($arg1)
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the :arg1 button for the invoice` is not defined");
   }

   /**
    * @Then I should be redirected to the main page
    */
   public function iShouldBeRedirectedToTheMainPage()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the main page` is not defined");
   }

   /**
    * @Then I should not see the invoice in the list
    */
   public function iShouldNotSeeTheInvoiceInTheList()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I should not see the invoice in the list` is not defined");
   }

   /**
     * @When I select :num1 dates
     */
    public function iSelectDates($num1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select :num1 dates` is not defined");
    }

   /**
    * @When I click on :arg1
    */
    public function iClickOn($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on :arg1` is not defined");
    }

   /**
    * @Then I should see information summarizing sales and profits
    */
   public function iShouldSeeInformationSummarizingSalesAndProfits()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see information summarizing sales and profits` is not defined");
   }

   /**
    * @Given I am on any page within the application
    */
   public function iAmOnAnyPageWithinTheApplication()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on any page within the application` is not defined");
   }

   /**
    * @When I press the :arg1 keys together
    */
   public function iPressTheKeysTogether($arg1)
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I press the :arg1 keys together` is not defined");
   }

   /**
    * @Then I should be taken to the :arg1 page
    */
   public function iShouldBeTakenToThePage($arg1)
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be taken to the :arg1 page` is not defined");
   }

   /**
    * @When I click on the “Modify” button for the invoice
    */
   public function iClickOnTheModifyButtonForTheInvoice()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the “Modify” button for the invoice` is not defined");
   }

   /**
    * @When I change the quantity of the first product
    */
   public function iChangeTheQuantityOfTheFirstProduct()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I change the quantity of the first product` is not defined");
   }

   /**
    * @Then I should see the invoice with the updated quantity
    */
   public function iShouldSeeTheInvoiceWithTheUpdatedQuantity()
   {
      throw new \PHPUnit\Framework\IncompleteTestError("Step `I should see the invoice with the updated quantity` is not defined");
   }

    /**
     * @Given i am in the settings
     */
    public function iAmInTheSettings()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `i am in the settings` is not defined");
    }

   /**
    * @When I click on the button change :arg1
    */
    public function iClickOnTheButtonChange($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the button change :arg1` is not defined");
    }

   /**
    * @When I input my new email
    */
    public function iInputMyNewEmail()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I input my new email` is not defined");
    }

   /**
    * @Then upon creation of future invoices a notification will be sent to the user according to their new email
    */
    public function uponCreationOfFutureInvoicesANotificationWillBeSentToTheUserAccordingToTheirNewEmail()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `upon creation of future invoices a notification will be sent to the user according to their new email` is not defined");
    }

   /**
    * @When I input my new phone number
    */
    public function iInputMyNewPhoneNumber()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I input my new phone number` is not defined");
    }

   /**
    * @Then upon creation of future invoices a notification will be sent to the user according to their new phone number
    */
    public function uponCreationOfFutureInvoicesANotificationWillBeSentToTheUserAccordingToTheirNewPhoneNumber()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `upon creation of future invoices a notification will be sent to the user according to their new phone number` is not defined");
    }

   /**
    * @Given I am on the final step of creating an invoice
    */
    public function iAmOnTheFinalStepOfCreatingAnInvoice()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the final step of creating an invoice` is not defined");
    }

   /**
    * @Given I click on the :arg1 button
    */
    public function iClickOnTheButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the :arg1 button` is not defined");
    }

   /**
    * @Then an email will be sent to your email:num1
    */
    public function anEmailWillBeSentToYourEmail($num1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `an email will be sent to your email:num1` is not defined");
    }

   /**
    * @Given i am in the settings and the font size is too small by default
    */
    public function iAmInTheSettingsAndTheFontSizeIsTooSmallByDefault()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `i am in the settings and the font size is too small by default` is not defined");
    }

   /**
    * @When I select a different font size
    */
    public function iSelectADifferentFontSize()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select a different font size` is not defined");
    }

   /**
    * @Then the fonts throughout the pages/views will change accordingly
    */
    public function theFontsThroughoutThePagesviewsWillChangeAccordingly()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the fonts throughout the pages/views will change accordingly` is not defined");
    }

   /**
    * @Given I am on the invoice creation page
    */
    public function iAmOnTheInvoiceCreationPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the invoice creation page` is not defined");
    }

   /**
    * @When I press the :arg1 button
    */
    public function iPressTheButton($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I press the :arg1 button` is not defined");
    }

   /**
    * @Then a sms message will be sent to the user
    */
    public function aSmsMessageWillBeSentToTheUser()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `a sms message will be sent to the user` is not defined");
    }

   /**
    * @Given i am in the settings and the incorrect tax rate is selected by default
    */
    public function iAmInTheSettingsAndTheIncorrectTaxRateIsSelectedByDefault()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `i am in the settings and the incorrect tax rate is selected by default` is not defined");
    }

   /**
    * @When I select a different tax rate
    */
    public function iSelectADifferentTaxRate()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select a different tax rate` is not defined");
    }

   /**
    * @Then the future invoices tax rates will change accordingly
    */
    public function theFutureInvoicesTaxRatesWillChangeAccordingly()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the future invoices tax rates will change accordingly` is not defined");
    }

   /**
    * @Given I create a new invoice
    */
    public function iCreateANewInvoice()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I create a new invoice` is not defined");
    }

   /**
    * @Given I have a notification preference selected
    */
    public function iHaveANotificationPreferenceSelected()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I have a notification preference selected` is not defined");
    }

   /**
    * @Then a pop up window will ask for the relevant information
    */
    public function aPopUpWindowWillAskForTheRelevantInformation()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `a pop up window will ask for the relevant information` is not defined");
    }

   /**
    * @Then I input :arg1
    */
    public function iInput($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I input :arg1` is not defined");
    }

   /**
    * @Then a sms would be sent to :arg1
    */
    public function aSmsWouldBeSentTo($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `a sms would be sent to :arg1` is not defined");
    }

   /**
    * @Given i am in the settings and the incorrect notification preference is selected by default
    */
    public function iAmInTheSettingsAndTheIncorrectNotificationPreferenceIsSelectedByDefault()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `i am in the settings and the incorrect notification preference is selected by default` is not defined");
    }

   /**
    * @When I select a notification preference
    */
    public function iSelectANotificationPreference()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `I select a notification preference` is not defined");
    }

   /**
    * @Then upon creation of future invoices a notification will be sent to the user according to their preference
    */
    public function uponCreationOfFutureInvoicesANotificationWillBeSentToTheUserAccordingToTheirPreference()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `upon creation of future invoices a notification will be sent to the user according to their preference` is not defined");
    }
}