Feature: Print Invoice
  In order to physically obtain the invoice
  As user
  I want to be able to print a specific invoice

Scenario: Print Specific Invoice
  Given I am logged in as user
  When I view the list of invoices
  And I see "Invoice 1"
  When I select the checkbox for "Invoice 1"
  And I click on the “Print Invoice” button
  Then I will see "Invoice 1" in pdf form in a print dialog
  When I select "Printer 1" as the printer
  And I press the "Print" button
  Then "Invoice 1" will be printed on "Printer 1"

