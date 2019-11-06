---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_8b3e70dccf4180be6ac44b24c54761fe -->
## Dump api-docs.json content endpoint.

> Example request:

```bash
curl -X GET -G "/docs" 
```

```javascript
const url = new URL("/docs");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "Invalid URI"
}
```

### HTTP Request
`GET /docs`


<!-- END_8b3e70dccf4180be6ac44b24c54761fe -->

<!-- START_7c0fe8d9df5e66a29beebfb7432be376 -->
## Display Swagger API page.

> Example request:

```bash
curl -X GET -G "/api/documentation" 
```

```javascript
const url = new URL("/api/documentation");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /api/documentation`


<!-- END_7c0fe8d9df5e66a29beebfb7432be376 -->

<!-- START_0455b2e98586c3809d37ebd3a12f1942 -->
## /swagger-ui-assets/{asset}
> Example request:

```bash
curl -X GET -G "/swagger-ui-assets/1" 
```

```javascript
const url = new URL("/swagger-ui-assets/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET /swagger-ui-assets/{asset}`


<!-- END_0455b2e98586c3809d37ebd3a12f1942 -->

<!-- START_487b5c769d135e3b433454d6f12ba543 -->
## Display Oauth2 callback pages.

> Example request:

```bash
curl -X GET -G "/api/oauth2-callback" 
```

```javascript
const url = new URL("/api/oauth2-callback");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /api/oauth2-callback`


<!-- END_487b5c769d135e3b433454d6f12ba543 -->

<!-- START_3dcb63016776596c48dee5ceaed399a4 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST "/api/passport/oauth/token" 
```

```javascript
const url = new URL("/api/passport/oauth/token");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/passport/oauth/token`


<!-- END_3dcb63016776596c48dee5ceaed399a4 -->

<!-- START_3bb6ff1744eeb0eab727e5ab5bc3c64b -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "/api/passport/oauth/tokens" 
```

```javascript
const url = new URL("/api/passport/oauth/tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
[]
```

### HTTP Request
`GET /api/passport/oauth/tokens`


<!-- END_3bb6ff1744eeb0eab727e5ab5bc3c64b -->

<!-- START_6fed5b782c3254a9b3a567d3ef744ca7 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "/api/passport/oauth/tokens/1" 
```

```javascript
const url = new URL("/api/passport/oauth/tokens/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/passport/oauth/tokens/{token_id}`


<!-- END_6fed5b782c3254a9b3a567d3ef744ca7 -->

<!-- START_5cd66ca624998102aa585455173600e2 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST "/api/passport/oauth/token/refresh" 
```

```javascript
const url = new URL("/api/passport/oauth/token/refresh");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/passport/oauth/token/refresh`


<!-- END_5cd66ca624998102aa585455173600e2 -->

<!-- START_30be7eca6b56400773a12440f284c99a -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET -G "/api/passport/oauth/clients" 
```

```javascript
const url = new URL("/api/passport/oauth/clients");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
[]
```

### HTTP Request
`GET /api/passport/oauth/clients`


<!-- END_30be7eca6b56400773a12440f284c99a -->

<!-- START_75a44b28e2fb511a55bbcd1c862c9582 -->
## Store a new client.

> Example request:

```bash
curl -X POST "/api/passport/oauth/clients" 
```

```javascript
const url = new URL("/api/passport/oauth/clients");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/passport/oauth/clients`


<!-- END_75a44b28e2fb511a55bbcd1c862c9582 -->

<!-- START_5b9469bdcb3d7792105ee7a8f523a2a3 -->
## Update the given client.

> Example request:

```bash
curl -X PUT "/api/passport/oauth/clients/1" 
```

```javascript
const url = new URL("/api/passport/oauth/clients/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/passport/oauth/clients/{client_id}`


<!-- END_5b9469bdcb3d7792105ee7a8f523a2a3 -->

<!-- START_eeb6ecd31204e054b094dfa208a1f889 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE "/api/passport/oauth/clients/1" 
```

```javascript
const url = new URL("/api/passport/oauth/clients/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/passport/oauth/clients/{client_id}`


<!-- END_eeb6ecd31204e054b094dfa208a1f889 -->

<!-- START_5e0fb379ad0bc69c970735952d22609b -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET -G "/api/passport/oauth/scopes" 
```

```javascript
const url = new URL("/api/passport/oauth/scopes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
[]
```

### HTTP Request
`GET /api/passport/oauth/scopes`


<!-- END_5e0fb379ad0bc69c970735952d22609b -->

<!-- START_43928fc21bcd0730a03a4e00037e9e8f -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "/api/passport/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("/api/passport/oauth/personal-access-tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
[]
```

### HTTP Request
`GET /api/passport/oauth/personal-access-tokens`


<!-- END_43928fc21bcd0730a03a4e00037e9e8f -->

<!-- START_2ff735fec19601d596ad4573ef4f8a09 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST "/api/passport/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("/api/passport/oauth/personal-access-tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/passport/oauth/personal-access-tokens`


<!-- END_2ff735fec19601d596ad4573ef4f8a09 -->

<!-- START_d83442b7a07889c119cce45ef6ca388d -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "/api/passport/oauth/personal-access-tokens/1" 
```

```javascript
const url = new URL("/api/passport/oauth/personal-access-tokens/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/passport/oauth/personal-access-tokens/{token_id}`


<!-- END_d83442b7a07889c119cce45ef6ca388d -->

<!-- START_22294a831446a8007bc3c28ea6577664 -->
## /api/team[/{id}]
> Example request:

```bash
curl -X GET -G "/api/team[/1]" 
```

```javascript
const url = new URL("/api/team[/1]");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "Invalid URI"
}
```

### HTTP Request
`GET /api/team[/{id}]`


<!-- END_22294a831446a8007bc3c28ea6577664 -->

<!-- START_9ddb83afcad69c96afd59543a08543c5 -->
## /api/team
> Example request:

```bash
curl -X POST "/api/team" 
```

```javascript
const url = new URL("/api/team");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/team`


<!-- END_9ddb83afcad69c96afd59543a08543c5 -->

<!-- START_c4e2a28345188f971adf266b7c994291 -->
## /api/team/addPlayer
> Example request:

```bash
curl -X POST "/api/team/addPlayer" 
```

```javascript
const url = new URL("/api/team/addPlayer");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/team/addPlayer`


<!-- END_c4e2a28345188f971adf266b7c994291 -->

<!-- START_e1bb3b38fc52d1d616222fbe420f3e50 -->
## /api/team/{id}
> Example request:

```bash
curl -X PUT "/api/team/1" 
```

```javascript
const url = new URL("/api/team/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/team/{id}`


<!-- END_e1bb3b38fc52d1d616222fbe420f3e50 -->

<!-- START_4a009eea258e61d29ab8da8882c88b47 -->
## /api/team/{id}
> Example request:

```bash
curl -X DELETE "/api/team/1" 
```

```javascript
const url = new URL("/api/team/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/team/{id}`


<!-- END_4a009eea258e61d29ab8da8882c88b47 -->

<!-- START_4b68fa1353ac5356e1c44064ded8719b -->
## getPlayer method to get details of one player or multiple players if argument playerid is null

> Example request:

```bash
curl -X GET -G "/api/player[/1]" 
```

```javascript
const url = new URL("/api/player[/1]");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "Invalid URI"
}
```

### HTTP Request
`GET /api/player[/{id}]`


<!-- END_4b68fa1353ac5356e1c44064ded8719b -->

<!-- START_5b0218bf9c43f92df39a4aa2b9d2284d -->
## createPlayer method to Insert Player

> Example request:

```bash
curl -X POST "/api/player" 
```

```javascript
const url = new URL("/api/player");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/player`


<!-- END_5b0218bf9c43f92df39a4aa2b9d2284d -->

<!-- START_6919a3795040bd99252673c3916c3470 -->
## updatePlayer method to update any detail of player

> Example request:

```bash
curl -X PUT "/api/player/1" 
```

```javascript
const url = new URL("/api/player/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/player/{id}`


<!-- END_6919a3795040bd99252673c3916c3470 -->

<!-- START_88841ae2c6178e47b2a50244870e74e7 -->
## deletePlayer method to delete player

> Example request:

```bash
curl -X DELETE "/api/player/1" 
```

```javascript
const url = new URL("/api/player/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/player/{id}`


<!-- END_88841ae2c6178e47b2a50244870e74e7 -->

<!-- START_054b70662f264c4777a6720041c4858d -->
## getPlayerHistory method to get pistory of a player

> Example request:

```bash
curl -X GET -G "/api/player/1/history" 
```

```javascript
const url = new URL("/api/player/1/history");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "team_id": 1,
        "f_name": "Mahendra Singh",
        "l_name": "Dhoni",
        "imageuri": "player.jpeg",
        "jersey_number": "10",
        "country": "India",
        "created_at": null,
        "updated_at": null,
        "get_team": {
            "id": 1,
            "name": "Chennai Super Kings",
            "logo": "csk.jpeg",
            "club": "Chennai",
            "created_at": "2019-10-31 18:30:00",
            "updated_at": "2019-10-31 18:30:00"
        },
        "player_Summary": {
            "total_match": 0,
            "total_run": 0,
            "total_six": 0,
            "total_fifty": 0,
            "total_hundrad": 0,
            "hscore": null
        }
    }
]
```

### HTTP Request
`GET /api/player/{id}/history`


<!-- END_054b70662f264c4777a6720041c4858d -->

<!-- START_4f03c2d002e5e8e4b9cf61242a699a22 -->
## /api/match[/{id}]
> Example request:

```bash
curl -X GET -G "/api/match[/1]" 
```

```javascript
const url = new URL("/api/match[/1]");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "Invalid URI"
}
```

### HTTP Request
`GET /api/match[/{id}]`


<!-- END_4f03c2d002e5e8e4b9cf61242a699a22 -->

<!-- START_720c6e832ff4e32960452492deaafd55 -->
## /api/match
> Example request:

```bash
curl -X POST "/api/match" 
```

```javascript
const url = new URL("/api/match");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/match`


<!-- END_720c6e832ff4e32960452492deaafd55 -->

<!-- START_3016135feca03b2941264d1212d24d49 -->
## /api/match/{id}
> Example request:

```bash
curl -X PUT "/api/match/1" 
```

```javascript
const url = new URL("/api/match/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/match/{id}`


<!-- END_3016135feca03b2941264d1212d24d49 -->

<!-- START_4df91ec1450bbd856d176bf6d8d71c57 -->
## /api/match/{id}
> Example request:

```bash
curl -X DELETE "/api/match/1" 
```

```javascript
const url = new URL("/api/match/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/match/{id}`


<!-- END_4df91ec1450bbd856d176bf6d8d71c57 -->

<!-- START_c0ca48ec1e977a764ab44e0157ad0c9b -->
## Get Match of Each Team

> Example request:

```bash
curl -X GET -G "/api/team/1/match" 
```

```javascript
const url = new URL("/api/team/1/match");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "team1_name": "Chennai Super Kings",
        "team1_logo": "csk.jpeg",
        "team2_name": "Mumbai Indians",
        "team2_logo": "mumbai.jpeg",
        "schedule_time": "2019-09-16 18:30:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    },
    {
        "id": 2,
        "team1_name": "Chennai Super Kings",
        "team1_logo": "csk.jpeg",
        "team2_name": "Mumbai Indians",
        "team2_logo": "mumbai.jpeg",
        "schedule_time": "2019-11-03 16:51:24",
        "result": 1,
        "team1_point": 12,
        "team2_point": 0
    },
    {
        "id": 3,
        "team1_name": "Royal Challengers Banglore",
        "team1_logo": "rcb.jpeg",
        "team2_name": "Chennai Super Kings",
        "team2_logo": "csk.jpeg",
        "schedule_time": "2019-09-24 18:30:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    },
    {
        "id": 4,
        "team1_name": "Chennai Super Kings",
        "team1_logo": "csk.jpeg",
        "team2_name": "Mumbai Indians",
        "team2_logo": "mumbai.jpeg",
        "schedule_time": "2019-12-25 00:00:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    },
    {
        "id": 11,
        "team1_name": "Chennai Super Kings",
        "team1_logo": "csk.jpeg",
        "team2_name": "Mumbai Indians",
        "team2_logo": "mumbai.jpeg",
        "schedule_time": "2019-11-04 00:00:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    },
    {
        "id": 14,
        "team1_name": "Chennai Super Kings",
        "team1_logo": "csk.jpeg",
        "team2_name": "Mumbai Indians",
        "team2_logo": "mumbai.jpeg",
        "schedule_time": "2019-11-28 00:00:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    },
    {
        "id": 15,
        "team1_name": "Chennai Super Kings",
        "team1_logo": "csk.jpeg",
        "team2_name": "Mumbai Indians",
        "team2_logo": "mumbai.jpeg",
        "schedule_time": "2019-11-26 00:00:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    }
]
```

### HTTP Request
`GET /api/team/{id}/match`


<!-- END_c0ca48ec1e977a764ab44e0157ad0c9b -->

<!-- START_aca585a8960c0db11a550b6e4faccb9a -->
## Get Fixture of Each Team

> Example request:

```bash
curl -X GET -G "/api/team/1/fixture" 
```

```javascript
const url = new URL("/api/team/1/fixture");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "team1_name": "Chennai Super Kings",
        "team1_logo": "csk.jpeg",
        "team2_name": "Mumbai Indians",
        "team2_logo": "mumbai.jpeg",
        "schedule_time": "2019-09-16 18:30:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    },
    {
        "id": 3,
        "team1_name": "Royal Challengers Banglore",
        "team1_logo": "rcb.jpeg",
        "team2_name": "Chennai Super Kings",
        "team2_logo": "csk.jpeg",
        "schedule_time": "2019-09-24 18:30:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    },
    {
        "id": 4,
        "team1_name": "Chennai Super Kings",
        "team1_logo": "csk.jpeg",
        "team2_name": "Mumbai Indians",
        "team2_logo": "mumbai.jpeg",
        "schedule_time": "2019-12-25 00:00:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    },
    {
        "id": 11,
        "team1_name": "Chennai Super Kings",
        "team1_logo": "csk.jpeg",
        "team2_name": "Mumbai Indians",
        "team2_logo": "mumbai.jpeg",
        "schedule_time": "2019-11-04 00:00:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    },
    {
        "id": 14,
        "team1_name": "Chennai Super Kings",
        "team1_logo": "csk.jpeg",
        "team2_name": "Mumbai Indians",
        "team2_logo": "mumbai.jpeg",
        "schedule_time": "2019-11-28 00:00:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    },
    {
        "id": 15,
        "team1_name": "Chennai Super Kings",
        "team1_logo": "csk.jpeg",
        "team2_name": "Mumbai Indians",
        "team2_logo": "mumbai.jpeg",
        "schedule_time": "2019-11-26 00:00:00",
        "result": 0,
        "team1_point": 0,
        "team2_point": 0
    }
]
```

### HTTP Request
`GET /api/team/{id}/fixture`


<!-- END_aca585a8960c0db11a550b6e4faccb9a -->


