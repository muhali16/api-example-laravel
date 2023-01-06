## Api Example Laravel

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

### Fitur

1. Sanctum Auth
2. Soft Delete
3. Database Seed using Factory
4. Request
5. API Resource

### Service

1. Create
2. Read
3. Update
4. Delete
5. User Authentication

### Api Spec

#### Auth

```
{
	"info": {
		"_postman_id": "233d6192-e9a6-4d07-a4b7-2e7f31e90295",
		"name": "Auth",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "21422775"
	},
	"item": [
		{
			"name": "Login",
			"request": {
				"method": "POST",
				"header": [
					{
						"key": "Accept",
						"value": "application/vnd.api+json",
						"type": "text"
					},
					{
						"key": "Content-Type",
						"value": "application/vnd.api+json",
						"type": "text"
					}
				],
				"body": {
					"mode": "formdata",
					"formdata": [
						{
							"key": "email",
							"value": "ali@gmail.com",
							"type": "text"
						},
						{
							"key": "password",
							"value": "password",
							"type": "text"
						}
					]
				},
				"url": {
					"raw": "http://localhost:8000/api/login",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"port": "8000",
					"path": [
						"api",
						"login"
					]
				}
			},
			"response": []
		},
		{
			"name": "Logout",
			"request": {
				"auth": {
					"type": "bearer",
					"bearer": [
						{
							"key": "token",
							"value": "18|IfoC41nddU806Z1MiUfiekILPGk0dm",
							"type": "string"
						}
					]
				},
				"method": "POST",
				"header": [
					{
						"key": "Accept",
						"value": "application/vnd.api+json",
						"type": "text"
					},
					{
						"key": "Content-Type",
						"value": "application/vnd.api+json",
						"type": "text"
					}
				],
				"url": {
					"raw": "http://localhost:8000/api/logout",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"port": "8000",
					"path": [
						"api",
						"logout"
					]
				}
			},
			"response": []
		}
	]
}
```

#### Books

```
{
	"info": {
		"_postman_id": "71900414-2ca3-41a6-a564-a6f78a2f6964",
		"name": "Book",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "21422775"
	},
	"item": [
		{
			"name": "Index",
			"request": {
				"method": "GET",
				"header": [
					{
						"key": "Accept",
						"value": "application/vnd.api+json",
						"type": "text"
					},
					{
						"key": "Content-Type",
						"value": "application/vnd.api+json",
						"type": "text"
					}
				],
				"url": {
					"raw": "http://localhost:8000/api/books",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"port": "8000",
					"path": [
						"api",
						"books"
					]
				}
			},
			"response": []
		},
		{
			"name": "Store",
			"request": {
				"auth": {
					"type": "bearer",
					"bearer": [
						{
							"key": "token",
							"value": "19|Ut5XeIecKwfjfRYY6FsMDObmeTCtuD",
							"type": "string"
						}
					]
				},
				"method": "POST",
				"header": [
					{
						"key": "Accept",
						"value": "application/vnd.api+json",
						"type": "text"
					},
					{
						"key": "Content-Type",
						"value": "application/vnd.api+json",
						"type": "text"
					}
				],
				"body": {
					"mode": "formdata",
					"formdata": [
						{
							"key": "name",
							"value": "Aku Anak Sehat",
							"type": "text"
						},
						{
							"key": "stock",
							"value": "19",
							"type": "text"
						}
					]
				},
				"url": {
					"raw": "http://localhost:8000/api/books",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"port": "8000",
					"path": [
						"api",
						"books"
					]
				}
			},
			"response": []
		},
		{
			"name": "Show",
			"request": {
				"auth": {
					"type": "noauth"
				},
				"method": "GET",
				"header": [
					{
						"key": "Accept",
						"value": "application/vnd.api+json",
						"type": "text"
					},
					{
						"key": "Content-Type",
						"value": "application/vnd.api+json",
						"type": "text"
					}
				],
				"url": {
					"raw": "http://localhost:8000/api/books/3",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"port": "8000",
					"path": [
						"api",
						"books",
						"3"
					]
				}
			},
			"response": []
		},
		{
			"name": "Update",
			"request": {
				"auth": {
					"type": "bearer",
					"bearer": [
						{
							"key": "token",
							"value": "19|Ut5XeIecKwfjfRYY6FsMDObmeTCtuD",
							"type": "string"
						}
					]
				},
				"method": "PUT",
				"header": [
					{
						"key": "Accept",
						"value": "application/vnd.api+json",
						"type": "text"
					},
					{
						"key": "Content-Type",
						"value": "application/vnd.api+json",
						"type": "text"
					}
				],
				"body": {
					"mode": "urlencoded",
					"urlencoded": [
						{
							"key": "name",
							"value": "Edited Book",
							"type": "text"
						},
						{
							"key": "stock",
							"value": "14",
							"type": "text"
						}
					]
				},
				"url": {
					"raw": "http://localhost:8000/api/books/2",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"port": "8000",
					"path": [
						"api",
						"books",
						"2"
					]
				}
			},
			"response": []
		},
		{
			"name": "Delete",
			"request": {
				"auth": {
					"type": "bearer",
					"bearer": [
						{
							"key": "token",
							"value": "19|Ut5XeIecKwfjfRYY6FsMDObmeTCtuD",
							"type": "string"
						}
					]
				},
				"method": "DELETE",
				"header": [
					{
						"key": "Accept",
						"value": "application/vnd.api+json",
						"type": "text"
					},
					{
						"key": "Content-Type",
						"value": "application/vnd.api+json",
						"type": "text"
					}
				],
				"url": {
					"raw": "http://localhost:8000/api/books/3",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"port": "8000",
					"path": [
						"api",
						"books",
						"3"
					]
				}
			},
			"response": []
		}
	],
	"auth": {
		"type": "bearer",
		"bearer": [
			{
				"key": "token",
				"value": "19|Ut5XeIecKwfjfRYY6FsMDObmeTCtuD",
				"type": "string"
			}
		]
	},
	"event": [
		{
			"listen": "prerequest",
			"script": {
				"type": "text/javascript",
				"exec": [
					""
				]
			}
		},
		{
			"listen": "test",
			"script": {
				"type": "text/javascript",
				"exec": [
					""
				]
			}
		}
	]
}
```
