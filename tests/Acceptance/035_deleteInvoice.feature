Feature: Delete Invoice
  In order to manage invoices efficiently
  As a user
  I want to be able to delete an invoice

  Scenario: Deleting an invoice
    Given I am on the main page
    And I have an invoice
    When I click on the "Delete" button for the invoice
    And I confirm the deletion
    Then I should be redirected to the main page
    And I should not see the invoice in the list