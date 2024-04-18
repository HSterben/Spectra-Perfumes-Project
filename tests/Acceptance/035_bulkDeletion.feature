Feature: Bulk Deletion
  In order to manage multiple invoices efficiently
  As a user
  I want to be able to delete multiple invoices at once

  Scenario: Deleting multiple invoices
    Given I am on the invoices page
	And I can see the invoice "Invoice 1" and "Invoice 2"
    When I select the checkbox for "Invoice 1" and "Invoice 2"
    And I click on the "Delete" button
    And I click the "Yes" button on the delete confirmation pop-up
    Then I should be redirected to the invocies page
    Then I don't see "Invoice 2" and "Invoice 2" on the invoices page