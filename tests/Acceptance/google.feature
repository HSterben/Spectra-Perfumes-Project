Feature: google 

  In order to Google terms 
  As a user 
  I need to input search terms on the main google.ca page and get matching results back 
 
  Scenario: try googling "frog" 
    Given I am on "http://www.Google.ca" 
    When I enter "frog" in the search box 
    And click Search 
    Then I see "frog" 
 
  Scenario: try googling "dog" 
    Given I am on "http://www.Google.ca" 
    When I enter "dog" in the search box 
    And click Search 
    Then I see "dog" 
