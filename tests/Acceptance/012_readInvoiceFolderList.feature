Feature: Read Invoice Folder
  In order to view my invoice folders
  As a user
  I need to be able to select the “View Invoice Folders” button

Scenario: The user wants to view all invoice folders
	Given I am on the Invoice list page
	And I created a “Group1” invoice folder
	And I created a “Group2” invoice folder
	When I click the “View Invoice Folders” button
	Then I see the “Group1” invoice folder
	And I see the “Group2” invoice folder