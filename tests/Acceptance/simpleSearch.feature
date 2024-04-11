Feature: Simple Search
  In order to find invoices quickly
  As a user
  I want to be able to perform a simple search

  Scenario: Searching for an invoice by invoice number
    Given I am on the invoices page
    When I enter "12345" into the search field
    And I click on the search button
    Then I should see the invoice with the number "12345"

