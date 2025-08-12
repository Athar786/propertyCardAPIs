composer install 
php artisan migrate --seed

check URL on browser
http://127.0.0.1:8000/properties


for api end point is same as document

Get single property details:
http://127.0.0.1:8000/api/properties/1

List all properties with pagination
http://127.0.0.1:8000/api/properties

Create new property (bonus)
http://127.0.0.1:8000/api/propertiesadd
