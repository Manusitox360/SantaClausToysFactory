# 🎅 Welcome to our Christmas Toy Factory! 🎄

This project aims to develop a platform to help Santa Claus and his elves manage the toy factory and organize the gift list for children during the Christmas season.

The application includes an intuitive and functional interface as well as an API that allows the elves to perform various essential tasks, such as managing toys.

With this system, Santa Claus will be able to ensure that each child receives the perfect gift, thus ensuring a magical Christmas.
- **Index View**:
![image](https://github.com/user-attachments/assets/2542b2fe-e6cf-4aa4-8ea0-cfd43a775b78)


## 🛠️🚀 Tech Stack
- **Languages:** Html, Blade
- **Frameworks:** Laravel, TailwindCSS
- **Server:** Xampp, Apache, Nodejs
- **Database:** Mysql
- **Others:** Composer, Postman

## 📊📁 DB Diagram
Below is a diagram of the database, showing different relationships between tables:

- **toy - minimum_age:** One to many relationship. A minimum age can have many toys, but each toy belongs to only one minimum age.

- **kid - gender:** One to many relationship. A gender can have many kids, but each kid belongs to only one gender.
- **kid - country:** One to many relationship. A country can have many kids, but each kid belongs to only one country.

![image](https://res.cloudinary.com/del1j3jge/image/upload/v1737027164/ub1yq5swilimsynvxem5.png)


## 🔧⚙️ Installation
- Clone repository
```
git clone https://github.com/AntonioGuillen123/ChristmasToyFactory
```

- Install Composer dependencies

```
composer install
```
- Install Nodejs dependencies

```
npm install
```
- Duplicate .env.example file and rename to .env
- In this new .env, change the variables you need, but it is very important to uncomment the database connection lines that are these:
 
In DB_CONNECTION will come mysqlite, change it to the bd you use (in this case MySQL)

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=christmas_toy_factory
DB_USERNAME=root
DB_PASSWORD=
```
 - Generate an App Key with this command 
```
php artisan key:generate 
```

- Execute migrations  
```
php artisan migrate
```

## ▶️💻 Run Locally
- How to run the Laravel server  
```
php artisan serve
```

- If you want to run all this in development environment run the following command  
```
npm run dev
```

- For production you should run the following command 
```
npm run build
```

## 🏃‍♂️🧪 Running Tests

To run test you should uncomment the following lines on the phpunit.xml file.

![image](https://res.cloudinary.com/dierpqujk/image/upload/v1733829455/imagen_2024-12-10_121742908_b3mfqm.png)


With the following command we run the tests and we will also generate a coverage report

```bash
  php artisan test --coverage
```

If everything is correct, everything should be OK.

![image](https://res.cloudinary.com/del1j3jge/image/upload/v1737383833/Test_Coverage_tsoawe.png)


A folder called coverage-report will also have been generated with **100%** coverage.
![image](https://res.cloudinary.com/del1j3jge/image/upload/v1737025453/zdgkqvvq2v4wecofe9ft.png)

## 📡🌐 Christmas Toy Factory API

This API allows you to manage toy entries and provides CRUD (Create, Read, Update, Delete) operations for these.

### Toy

#### 1 Get all toy entries

```http
GET /api/elf
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### 2 Get a toy by ID

```http
GET /api/elf/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Toy ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### 3 Create a new toy

```http
POST /api/elf
```

#### Response:
- **Status Code:** 201
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `name`    | `string` | **Required**. Name of toy    |
| `image` | `string` |  Company of toy |
| `description` | `string` | **Required**. Status of toy  |
| `toy_type_id` | `integer` | **Required**. Id of the type of the toy  |
| `minimum_age_id` | `integer` | **Required**. Id of the minimum age of the toy  |

#### 4 Update an existing toy by ID

```http
PUT /api/elf/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Toy ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `name`    | `string` | Name of toy    |
| `image` | `string` | Company of toy |
| `description` | `string` | Status of toy  |
| `toy_type_id` | `integer` |  Id of the type of the toy  |
| `minimum_age_id` | `integer` | Id of the minimum age of the toy  |

#### 5 Delete a toy by ID

```http
DELETE /api/elf/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Toy ID     |

#### Response:
- **Status Code:** 204, 404
- **Content Type:** No-Content, application/json

### Kid

#### 1 Get all kid entries

```http
GET /api/santa
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### 2 Get a kid by ID

```http
GET /api/santa/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Toy ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### 3 Create a new kid

```http
POST /api/santa
```

#### Response:
- **Status Code:** 201
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `name`    | `string` | **Required**. Name of kid    |
| `surname`    | `string` | **Required**. Surname of kid    |
| `image` | `string` |  Company of kid |
| `age` | `integer` | **Required**. Age of kid  |
| `attitude` | `boolean` | **Required**. Attitude of kid  |
| `gender_id` | `integer` | **Required**. Id of the gender of the kid  |
| `country_id` | `integer` | **Required**. Id of the country of the kid  |

#### 4 Update an existing kid by ID

```http
PUT /api/santa/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. kid ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `name`    | `string` |  Name of Kid    |
| `surname`    | `string` |  Surname of Kid    |
| `image` | `string` |  Company of Kid |
| `age` | `integer` |  Age of Kid  |
| `attitude` | `boolean` |  Attitude of Kid  |
| `gender_id` | `integer` |  Id of the gender of the Kid  |
| `country_id` | `integer` |  Id of the country of the Kid  |

#### 5 Delete a kid by ID

```http
DELETE /api/santa/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Kid ID     |

#### Response:
- **Status Code:** 204, 404
- **Content Type:** No-Content, application/json

### Gender

#### 1 Get all gender entries

```http
GET /api/gender
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### 2 Get a gender by ID

```http
GET /api/gender/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Genders ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### 3 Create a new gender

```http
POST /api/gender
```

#### Response:
- **Status Code:** 201
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `name`    | `string` | **Required**. Name of gender    |

#### 4 Update an existing gender by ID

```http
PUT /api/gender/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Genders ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `name`    | `string` | **Required**. Name of gender    |

#### 5 Delete a gender by ID

```http
DELETE /api/gender/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Gender ID     |

#### Response:
- **Status Code:** 204, 404
- **Content Type:** No-Content, application/json

### Country

#### 1 Get all country entries

```http
GET /api/country
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### 2 Get a country by ID

```http
GET /api/country/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Countries ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### 3 Create a new country

```http
POST /api/country
```

#### Response:
- **Status Code:** 201
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `name`    | `string` | **Required**. Name of country    |

#### 4 Update an existing Country by ID

```http
PUT /api/country/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Countries ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `name`    | `string` | **Required**. Name of country    |

#### 5 Delete a country by ID

```http
DELETE /api/country/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Country ID     |

#### Response:
- **Status Code:** 204, 404
- **Content Type:** No-Content, application/json

### Minimum age (Toys)

#### 1 Get all Minimum age entries

```http
GET /api/minimumAge
```

#### Response:
- **Status Code:** 200
- **Content Type:** application/json

#### 2 Get a Minimum age by ID

```http
GET /api/minimumAge/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Minimum age ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### 3 Create a new Minimum age

```http
POST /api/minimumAge
```

#### Response:
- **Status Code:** 201
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `min`    | `required|integer|min:0` | **Required**. Start of the minimum age     |
| `max`    | `nullable|integer|gte:min` | **Required**. End of the minimum age    |

#### 4 Update an existing Minimum age by ID

```http
PUT /api/minimumAge/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Minimum age ID     |

#### Response:
- **Status Code:** 200, 404
- **Content Type:** application/json

#### Body: 

| Parameter | Type     | Description                    |
| :-------- | :------- | :-------------------------     |
| `min`    | `required|integer|min:0` | **Required**. Start of the minimum age     |
| `max`    | `nullable|integer|gte:min` | **Required**. End of the minimum age    |

#### 5 Delete a Minimum age by ID

```http
DELETE /api/minimumAge/id
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id`      | `string` | **Required**. Minimum age ID     |

#### Response:
- **Status Code:** 204, 404
- **Content Type:** No-Content, application/json



## ✍️🙍 Authors
# Sprint 2
- **Antonio Guillén:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/AntonioGuillen123)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/antonio-guill%C3%A9n-905b941ab)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:antonioguillengarcia123@gmail.com)

- **Manuel Espinosa:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Manusitox360)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/manuel-espinosa-guillén-950781294/)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:espinosaguillenmanuel@gmail.com)

- **Álvaro Cervera:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Kalixto73a)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](https://www.linkedin.com/in/álvaro-cervera-vigara-745576337/)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:Kalixto75@gmail.com)

- **Miguel Angel García:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Mangel111111111)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Perfil-blue?style=flat-square&logo=linkedin)](www.linkedin.com/in/miguel-garcía-lópez-609136284)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:miguelg.lopez@outlook.com)

- **Santino Vigna:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/SantiVigna)
[![Correo](https://img.shields.io/badge/Email-Contacto-red?style=flat-square&logo=gmail)](mailto:ynotvigna@gmail.com)

# Sprint 1

- **Issam Chellaf:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/issamchlf)

- **Jonathan Torreblanca:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Leonkeneddy86)

- **Matias Stadler:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Matias-Stadler)

- **Jenifer Moyano:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/soyJenifer)

- **Fran Muñoz:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/Crudo7)

- **René Barco:**  [![GitHub](https://img.shields.io/badge/GitHub-Perfil-black?style=flat-square&logo=github)](https://github.com/mrene42)

