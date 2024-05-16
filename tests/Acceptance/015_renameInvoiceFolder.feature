Feature: Update Invoice Folder
  In order to update an invoice folder
  As a user
  I need to be able to select the “Update Invoice Folder” button

Scenario: The user wants to update an invoice folder
	Given I am on the “Group1” invoice 	folder update page
	And I input “Personal” in “Name”
	When I click the “Update” button
	Then I see the “Personal” invoice folder