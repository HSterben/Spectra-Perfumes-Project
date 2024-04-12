Feature: Invoice Sorting
  In order to easily manage invoices
  As a user
  I want to be able to sort invoices on the invoice list view

Scenario: Sort Invoices
  Given I am logged in as a user
   When I view the list of invoices
  Then the invoices should be displayed in a default sorting order
  And I should see options to sort invoices by different criteria such as date, customer name, or total amount
  When I select to sort invoices by date
  Then the invoices should be rearranged in chronological order based on their creation date
  When I select to sort invoices by customer name
  Then the invoices should be rearranged in alphabetical order based on the customer's name
  When I select to sort invoices by total amount
  Then the invoices should be rearranged in ascending order based on their total amount