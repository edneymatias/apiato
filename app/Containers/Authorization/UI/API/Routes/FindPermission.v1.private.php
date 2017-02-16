<?php

/**
 * @apiGroup           RolePermission
 * @apiName            getPermission
 * @api                {get} /permission/:id Find a Permission by ID
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 200 OK
{
   "data":{
      "object": "Permission",
      "id": abcderf,
      "name":"anything",
      "description":"",
      "display_name":"bla bla bla"
   }
}
 */

$router->get('permission/{id}', [
    'uses'       => 'Controller@getPermission',
    'middleware' => [
        'api.auth',
    ],
]);
