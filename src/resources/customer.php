<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        /**
         *    getCustomers() method
         *
         *    reference: https://help.shopify.com/api/reference/customer
         */
        "getCustomers" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customers.json",
            "summary" => "Retrieve all customers of a shop",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "ids" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "A comma-separated list of customer ids"
                ),
                "since_id" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Restrict results to after the specified ID"
                ),
                "created_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show customers created after date (format: 2014-04-25T16:15:47-04:00)"
                ),
                "created_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show customers created before date (format: 2014-04-25T16:15:47-04:00)"
                ),
                "updated_at_min" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show customers last updated after date (format: 2014-04-25T16:15:47-04:00)"
                ),
                "updated_at_max" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Show customers last updated before date (format: 2014-04-25T16:15:47-04:00)"
                ),
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results (default:50) (maximum:250)"
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show (default: 1)"
                )
        )
        ),

        /**
         *    getCustomerCount() method
         *
         *    reference: https://help.shopify.com/api/reference/customer
         */
        "getCustomerCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customers/count.json",
            "summary" => "Retrieve a count of all Customers",
            "responseModel" => "defaultJsonResponse"
        ),

        /**
         *    getCustomerSearch() method
         *
         *    reference: https://help.shopify.com/api/reference/customer
         */
        "getCustomerSearch" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customers/search.json",
            "summary" => "Search all customers",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "order" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Field and direction to order results by (default: last_order_date DESC)"
                ),
                "query" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Text to search customers"
                ),
                "page" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Page to show"
                ),
                "limit" => array(
                    "type" => "number",
                    "location" => "query",
                    "description" => "Amount of results"
                ),
                "fields" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "comma-separated list of fields to include in the response"
                )
            )
        ),


        /**
         *    getCustomer() method
         *
         *    reference: https://help.shopify.com/api/reference/customer
         */
        "getCustomer" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customers/{id}.json",
            "summary" => "Retrieve a single Customer",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Customer."
                )
            )
        ),


        /**
         *    createCustomer() method
         *
         *    reference: https://help.shopify.com/api/reference/customer
         */
        "createCustomer" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/customers.json",
            "summary" => "Create a new customer record.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "customer" => array(
                    "location" => "json",
                    "parameters" => array(
                        "first_name" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The customer's first name."
                        ),
                        "last_name" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The customer's last name."
                        ),
                        "email" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The email address of the customer."
                        ),
                        "verified_email" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "States whether or not the email address has been verified."
                        ),
                        "addresses" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of addresses for the customer."
                        ),
                        "metafields" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        ),
                        "send_email_invite" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => ""
                        ),
                        "password" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        ),
                        "password_confirmation" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        ),
                        "send_email_welcome" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => ""
                        ),
                        "accepts_marketing" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "Indicates whether the customer has consented to be sent marketing material via email. Valid values are 'true' and 'false.'"
                        ),
                        "default_address" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The default address for the customer."
                        ),
                        "multipass_identifier" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The customer's identifier used with Multipass login."
                        ),
                        "last_order_id" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The id of the customer's last order."
                        ),
                        "last_order_name" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The name of the customer's last order. This is directly related to the Order's name field."
                        ),
                        "note" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A note about the customer."
                        ),
                        "orders_count" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The number of orders associated with this customer."
                        ),
                        "state" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The state of the customer in a shop."
                        ),
                        "tags" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Tags are additional short descriptors formatted as a string of comma-separated values. For example, if an article has three tags: tag1, tag2, tag3."
                        ),
                        "total_spent" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The total amount of money that the customer has spent at the shop."
                        )
                    )
                )
            )
        ),


        /**
         *    updateCustomer() method
         *
         *    reference: https://help.shopify.com/api/reference/customer
         */
        "updateCustomer" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/customers/{id}.json",
            "summary" => "Update a customer record.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "The customers ID number.",
                    "required" => true
                ),
                "customer" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The customer's ID number."
                        ),
                        "first_name" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The customer's first name."
                        ),
                        "last_name" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The customer's last name."
                        ),
                        "email" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The email address of the customer."
                        ),
                        "verified_email" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "States whether or not the email address has been verified."
                        ),
                        "addresses" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A list of addresses for the customer."
                        ),
                        "metafields" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        ),
                        "send_email_invite" => array(
                            "type" => "boolean",
                            "location" => "uri",
                            "description" => ""
                        ),
                        "password" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        ),
                        "password_confirmation" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => ""
                        ),
                        "send_email_welcome" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => ""
                        ),
                        "accepts_marketing" => array(
                            "type" => "boolean",
                            "location" => "json",
                            "description" => "Indicates whether the customer has consented to be sent marketing material via email. Valid values are 'true' and 'false.'"
                        ),
                        "default_address" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The default address for the customer."
                        ),
                        "multipass_identifier" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The customer's identifier used with Multipass login."
                        ),
                        "last_order_id" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The id of the customer's last order."
                        ),
                        "last_order_name" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The name of the customer's last order. This is directly related to the Order's name field."
                        ),
                        "note" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "A note about the customer."
                        ),
                        "orders_count" => array(
                            "type" => "number",
                            "location" => "json",
                            "description" => "The number of orders associated with this customer."
                        ),
                        "state" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The state of the customer in a shop."
                        ),
                        "tags" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "Tags are additional short descriptors formatted as a string of comma-separated values. For example, if an article has three tags: tag1, tag2, tag3."
                        ),
                        "total_spent" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "The total amount of money that the customer has spent at the shop."
                        )
                    )
                )


            )
        ),


        /**
         *    deleteCustomer() method
         *
         *    reference: https://help.shopify.com/api/reference/customer
         */
        "deleteCustomer" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/customers/{id}.json",
            "summary" => "Delete a customer.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the customer.",
                    "required" => true
                )
            )
        ),


        /**
         *     createAccountActivationUrl() method
         *
         *     reference: https://help.shopify.com/api/reference/customer
         */
        "createAccountActivationUrl" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/customers/{id}/account_activation_url.json",
            "summary" => "Create account activation URL",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the customer.",
                    "required" => true
                )
            )
        ),


        /**
         *     getCustomerOrders() method
         *
         *     reference: https://help.shopify.com/api/reference/customer
         */
        "getCustomerOrders" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/customers/{id}/orders.json",
            "summary" => "Retrieve a list of all the orders from a specific customer.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the customer.",
                    "required" => true
                )
            )
        )
    ),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(),
);
