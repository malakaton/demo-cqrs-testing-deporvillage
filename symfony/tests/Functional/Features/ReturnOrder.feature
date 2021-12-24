Feature: Let create return orders and pickup request

  @fixtures
  Scenario: Can create a return order
    Given User wants to return an order
    """
    {
      "customer_name": "pepe",
      "country": "ES",
      "order_uuid": "61c57fe3dd7226921279564a"
    }
    """
    Then return order should be created

  Scenario: Send pickup request on return order created to get carrier code
    When I request to get pickup code from return order from country 'ES'
    Then pickup code must be '30'

  Scenario: Send pickup request on return order created to get carrier code
    When I request to get pickup code from return order from country 'GB'
    Then pickup code must be '60'