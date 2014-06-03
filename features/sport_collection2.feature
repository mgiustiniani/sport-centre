Feature: User Want see available Sports
  Scenario: See available sport via http Api
    Given I have client http2
    And I have a sport named2 "Soccer"
    And I have a sport named2 "Tennis"
    When I digit2 "/api/sport"
    Then I should sport list2
