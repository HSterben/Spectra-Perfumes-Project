Feature: Create Invoice
  In order to add a new invoice
  As a user
  I want to be able to create new invoices

  Scenario: Creating a new invoice
    Given I am on the "Create Invoice" page
    When I fill in the store and product details
    And I click on the "Create Invoice" button
    Then I should see a confirmation message
    And I should be redirected to the view page of that invoice