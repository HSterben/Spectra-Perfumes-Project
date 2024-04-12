Feature: Create Invoice Folder
  In order to create a new invoice folder
  As a user
  I need to be able to select the “Create New Invoice Folder” button

Scenario: The user wants to create an invoice folder
	Given I am on the Invoice list page
	When I click the “Create New Invoice Folder” button
	And I input “Category1”
	And I click the “Create” button
	Then I see the “Category1” invoice folder