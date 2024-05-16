Feature: Update Invoice
  In order to correct or change invoice details
  As a user
  I want to be able to update an invoice's information

  Scenario: Updating an invoice's details
    Given I am on the main page
    When I click on the “Modify” button for the invoice
    And I change the quantity of the first product
    And I click on the "Update Invoice" button
    Then I should see the invoice with the updated quantity