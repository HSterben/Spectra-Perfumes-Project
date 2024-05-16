Feature: Bulk Deletion
  In order to manage multiple invoices efficiently
  As a user
  I want to be able to delete multiple invoices at once

  Scenario: Deleting multiple invoices
    Given I am on the invoices page
    When I select invoices with a checkbox
    And I click on the "Delete" button
    And I confirm the deletion
    Then I should not see the invoices that I previously selected

