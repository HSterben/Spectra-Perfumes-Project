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
     * @When I input :arg1 for Invoice ID
     */
    public function iInputForInvoiceID($arg1)
    {
        $this->fillField('invoice_id', $arg1);
    }

    /**
     * @When I input :arg1 for project ID
     */
    public function iInputForProjectID($arg1)
    {
        $this->fillField('invoice_project_num', $arg1);
    }

    /**
     * @When I input :arg1 for Invoice Title
     */
    public function iInputForInvoiceTitle($arg1)
    {
        $this->fillField('invoice_title', $arg1);
    }

    /**
     * @When I input :arg1 for Invoice Date
     */
    public function iInputForInvoiceDate($arg1)
    {
        $this->fillField('invoice_date', $arg1);
    }

    /**
     * @When I input :arg1 for Business Name
     */
    public function iInputForBusinessName($arg1)
    {
        $this->fillField('store_name', $arg1);
    }

    /**
     * @When I input :arg1 for Street
     */
    public function iInputForStreet($arg1)
    {
        $this->fillField('street_name', $arg1);
    }

    /**
     * @When I input :arg1 for City
     */
    public function iInputForCity($arg1)
    {
        $this->fillField('city', $arg1);
    }

    /**
     * @When I input :arg1 for Postal Code
     */
    public function iInputForPostalCode($arg1)
    {
        $this->fillField('postal_code', $arg1);
    }

    /**
     * @When I input :arg1 for Country
     */
    public function iInputForCountry($arg1)
    {
        $this->fillField('country', $arg1);
    }

    /**
     * @When I input :arg1 for Phone Number
     */
    public function iInputForPhoneNumber($arg1)
    {
        $this->fillField('phone_number', $arg1);
    }

    /**
     * @When I input :arg1 for Return Quantity
     */
    public function iInputForReturnQuantity($arg1)
    {
        $this->fillField('return_quantity', $arg1);
    }

    /**
     * @When I input :arg1 for Perfume Price
     */
    public function iInputForPerfumePrice($arg1)
    {
        $this->fillField('perfume_price', $arg1);
    }

    /**
     * @When I input :arg1 for Perfume Code
     */
    public function iInputForPerfumeCode($arg1)
    {
        $this->fillField('perfume_number[]', $arg1);
    }

    /**
     * @When I input :arg1 for Quantity
     */
    public function iInputForQuantity($arg1)
    {
        $this->fillField('quantity[]', $arg1);
    }

    /**
     * @When I click on :arg1 button
     */
    public function iClickOnButton($arg1)
    {
        $this->click($arg1);
    }

    /**
     * @Then I should be redirected to :arg1
     */
    public function iShouldBeRedirectedTo($arg1)
    {
        $this->seeCurrentUrlEquals($arg1);
    }

    /**
     * @Then I see :arg1
     */
    public function iSee($arg1)
    {
        $this->see($arg1);
    }

    /**
     * @Given I am on :arg1 page
     */
    public function iAmOnPage($arg1)
    {
        $this->amOnPage($arg1);
    }

    /**
     * @When I input :arg1 for Username
     */
    public function iInputForUsername($arg1)
    {
        $this->fillField('username', $arg1);
    }

    /**
     * @When I input for :arg1 for Password
     */
    public function iInputForForPassword($arg1)
    {
        $this->fillField('password', $arg1);
    }
}