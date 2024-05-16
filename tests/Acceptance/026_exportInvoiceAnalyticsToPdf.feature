Feature: Export To PDF (Invoice Analytics)
  In order to analyze invoices conveniently
  As user
  I want to be able to export invoice data to PDF format

Scenario: Export Invoice Analytics Data to PDF
  Given I am logged in as a user
  When I navigate to the invoice analytics page
  Then I should see an "Export Analytics" button
  When I click the “Export Analytics” button
  Then a dialog should show up, asking me to choose a directory to save to
  When I choose to save to the "Desktop" directory
  And press the "Save" button
  Then I will see a pdf of the analytics on the "Desktop" directory