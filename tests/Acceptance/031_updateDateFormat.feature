Feature: Customizable Date Formats
  In order to view dates in a preferred format
  As a user
  I want to customize the date format displayed on invoices

  Scenario: Changing the date format
    Given I am on the "Settings" page
    When I select "DD/MM/YYYY" as the date format
    And I click on the "Save Changes" button
    Then I should see all dates on invoices displayed in "DD/MM/YYYY" format