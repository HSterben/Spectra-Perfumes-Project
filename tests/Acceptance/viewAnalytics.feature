Feature: Invoice Analysis
  In order to gain insights into sales trends
  As a user
  I want to view an analysis of invoice sales

  Scenario: Viewing sales
    Given I am on the analytics page
    When I select two dates
    And click on "View Sales"
    Then I should see the sales and profits between those dates
