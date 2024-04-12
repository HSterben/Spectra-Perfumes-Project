Feature: Invoice Read
  In order to read invoices
  As a user
  I want to be able to read specific invoices

Scenario: Read Invoice Details
  Given I am logged in as user
  When I view the list of invoices
  And there is an invoice on the invoice list view
  When I click on a specific invoice
  Then I should see the exact invoice I clicked on