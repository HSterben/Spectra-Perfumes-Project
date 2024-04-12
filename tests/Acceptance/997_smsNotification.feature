Feature: SMS_notification
  In order to send a notification utilizing sms
  As a user
  I need to be able to sent a sms to the user 

  Scenario: try SMS_notification
	Given I am on the invoice creation page
        When I press the "create invoice" button
        Then a sms message will be sent to the user

TODO: not real