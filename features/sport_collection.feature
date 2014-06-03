Feature: User Want see available Sports
  Scenario: See available sport via http Api
    Given I have client http
    And I have a sport named "Soccer"
    And I have a sport named "Tennis"
    When I digit "/api/sport"
    Then I should sport list
