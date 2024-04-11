Feature: Invoice Timestamp Display
  In order to track the creation time of invoices
  As an user
  I want to see the timestamp next to each      invoice on the invoice list view

Scenario: Display Invoice Timestamp
  Given I am logged in as user
  When I view the list of invoices
  Then I should see a timestamp next to each invoice, indicating the date and time when the invoice was created
  And the timestamp should be in a readable format, such as "YYYY-MM-DD HH:MM:SS"

