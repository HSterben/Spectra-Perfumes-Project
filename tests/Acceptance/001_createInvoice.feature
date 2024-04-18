Feature: Create Invoice
  In order to add a new invoice
  As a user
  I want to be able to create new invoices

  Scenario: Creating a new invoice
    Given I am on the "Create Invoice" page
    When I enter "219617" in "invoice_id"
    And I see "219677" in "project_id"
    And I enter "06/11/2024" in "Invoice date"
    And I enter "Pharmaprix" in "Business name"
    
    And I click on the "Create Invoice" button
    Then I should see a confirmation message
    And I should be redirected to the view page of that invoice