Feature: Invoice Sorting
  In order to easily manage invoices
  As a user
  I want to be able to sort invoices on the invoice list view

Scenario: Sort Invoices
  Given I am logged in as a user
  When I view the list of invoices
  And I see "Invoice 1" created on 2024-04-15 with a total amount of $500, then "Invoice 2" created on 2024-04-16 with a total amount of $200
  And I see the buttons "Sort by date", and "Sort by total amount"
  When I press "Sort by date"
  Then I should see "Invoice 2", then "Invoice 1" 
  When I press "Sort by total amount"
  Then I should see "Invoice 1", then "Invoice 2"