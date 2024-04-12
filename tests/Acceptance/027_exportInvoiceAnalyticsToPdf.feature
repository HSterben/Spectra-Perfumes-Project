Feature: Export To PDF (Invoice Analysis)
  In order to analyze invoices conveniently
  As user
  I want to be able to export invoice data to PDF format

Scenario: Export Invoice Analysis Data to PDF
  Given I am logged in as a user
  When I navigate to the invoice analysis page
  Then I should see options to export invoice analysis data as PDF
  When I click the “Convert to PDF” button
  Then a dialog should show up, asking me to choose a directory to save to

TODO: change analysis to analytics