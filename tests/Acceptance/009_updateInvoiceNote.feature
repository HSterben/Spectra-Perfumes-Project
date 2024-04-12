Feature: Update Invoice Note
  In order to update an invoice note
  As a user
  I need to be able to select the “Update Invoice Note” button

Scenario: The user wants to update an invoice note
	Given I am on the “Invoice list” page
	And I see the “More stuff” note
	When I select the “Modify” button related to the “More Stuff” note
	And I input “More-er stuff” in “Note”
	And I click the “Update” button
	Then I see “More-er stuff”
	And I don’t see “More stuff”