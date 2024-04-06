<p align="center"><img src="/Inventory.png" width="400" alt="Inventory Logo"></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Inventory Manager

Inventory Manager is an inventory management application I created using Laravel for the backend API and Flutter for the Frontend mobile App. It allows users to add, edit, and delete items and view and search items via APIs. This is a minimal project to showcase my Programming skills in these technologies
The application support the following APIs

- Create
- Read 
- Update
- Delete 

## How to Use the APIS

- Create : Allows adding of iitems using the POST method on this route http://127.0.0.1:8000/api/inventory/add
-  Read  :  Allows fetching all records using the GET method on this route http://127.0.0.1:8000/api/inventory/search/
          or search by name http://127.0.0.1:8000/api/inventory/search/{name}
          or search by id   http://127.0.0.1:8000/api/inventory/search/byitemID/{id}
-  Update :  Allows updating of iitems using the PUT method on this route http://127.0.0.1:8000/api/inventory/update
-  Delete :  Allows deleting of items using the DELETE method on this route http://127.0.0.1:8000/api/inventory/delete/itemID/{id}

## Database Schema
Database name is Inventorydb
Table name is items
| itemID   | iName    | iDescription       | iQuantity|
| ---      | ---      | ---                |---       |
| 1        | Wadrobe  | 3 doors with mirror|2         |

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
