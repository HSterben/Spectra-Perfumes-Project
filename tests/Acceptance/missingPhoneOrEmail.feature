Feature: missing_phone_or_email
  In order to get a missing phone number or email address
  As a user
  I need to be able to input it using a pop up after invoice creation

  Scenario: try missing_phone_or_email
	Given I create a new invoice
	And I have a notification preference selected
	Then a pop up window will ask for the relevant information
	And I input "123-123-1234"
	Then a sms would be sent to "123-123-1234"
