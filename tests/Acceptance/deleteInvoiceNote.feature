Feature: Delete Invoice Note
  In order to fix invoice note related mistakes
  As a user
  I need to be able to select the “Delete Invoice Note” button

Scenario: The user wants to delete an invoice note
	Given I am on the Invoice list page
	And I see the “More stuff” note
	When I select the “Delete Note” button related to the “More Stuff” note
	And I click the “Confirm Delete” button
	Then I don’t see the “More stuff” note