Feature: Invoice Comments/Notes
  In order to add additional information or comments to invoices
  As a user
  I want to be able to attach comments or notes to an invoice

  Scenario: Adding a comment to an invoice
    Given I am on the main page
    When I click on the “Add Comment” for the invoice
    And I enter "This is a test" into the comment form
    And I click on the "Save Comment" button
    Then I should see the comment "This is a test" saved with the invoice