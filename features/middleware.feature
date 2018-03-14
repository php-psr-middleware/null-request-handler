Feature: Null HTTP Request Handler
    In order to test HTTP middleware
    As a developer
    I want a request handler that returns an empty response with a status code

    Scenario Outline: Response status code
        Given constructor argument is <input>
        When a response is returned
        Then the response body is empty
        And the response status code is <output>

        Examples:
            | input | output |
            | 200   | 200    |
            | 300   | 300    |
            | 201   | 201   |


