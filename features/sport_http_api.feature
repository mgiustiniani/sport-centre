Feature: Sport Http Api
  In Order to Find all Sport Available

  Scenario: See available sport via http Api
    Given I add "Accept" header equal to "application/json"
    And   I add "Content-Type" header equal to "application/json"
    When I go to "/api/sports.json"
    Then the response status code should be 200
    And print last response

