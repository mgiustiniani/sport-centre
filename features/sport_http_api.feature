Feature: Sport Http Api
  In Order to Find all Sport Available

  Scenario: See available sport via http Api
    Given I add "xxx" header equal to "yyy"
    When I perform request with GET "/api/sports"
    Then I should response status code "200"
    And I should response in "json" Format
    And I have "_links" -> "self" equal to request

