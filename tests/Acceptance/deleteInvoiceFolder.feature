Feature: Delete Invoice Folder
  In order to fix invoice folder related mistakes
  As a user
  I need to be able to select the “Delete Invoice Folder” button

Scenario: The user wants to delete an invoice folder
	Given I created the “Group1” Invoice folder page
	And I am on the “Group1” invoice folder view page
	When I click the “Delete invoice folder” button
	Then I don’t see the “Group1” invoice folder