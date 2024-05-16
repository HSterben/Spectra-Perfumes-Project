Feature: Print Invoice
  In order to physically obtain the invoice
  As user
  I want to be able to print a specific invoice

Scenario: Print Specific Invoice
  Given I am logged in as user
  When I view the list of invoices
  And there is an invoice on the invoice list view
  When I click on a specific invoice
  And I click on the “Print Invoice” button
  Then I will see a print dialog appear that will allow me to print the invoice

