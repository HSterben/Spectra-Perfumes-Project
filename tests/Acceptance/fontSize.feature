Feature: Font_size
  In order to change the font size
  As a user
  I need to be able to change the font size in the settings menu

  Scenario: try Font_size
	Given i am in the settings and the font size is too small by default
	When I select a different font size
	Then the fonts throughout the pages/views will change accordingly
