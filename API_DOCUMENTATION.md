# DOKUMENTASI API FORMINE

Ujicoba Pakai Postman dengan header x-api-key dan value: .env('PUBLIC_API_KEY');

## GET ALL USER / DRIVER
- GET http://127.0.0.1:8000/api/drivers

## RESOURCE P2H
- manhaul
- dumptruck
- exca
- compactor
- towerlamp
- bulldozer
- grader
- lv
- adt

## CRUD
- GET       : /api/{resource}
- POST      : /api/{resource}
- GET       : /api/{resource}/{id}
- PUT       : /api/{resource}/{id}
- DELETE    : /api/{resource}/{id}

# CONTOH POST
    POST http://127.0.0.1:8000/api/dumptruck
    Content-Type: application/json
    {
    "nama_driver": "Jane Smith",
    "no_unit": "DT-002",
    "date": "2024-12-13",
    "shift": "Siang"
    }

# CONTOH PUT
    PUT http://127.0.0.1:8000/api/manhaul/1
    Content-Type: application/json
    {
    "nama_driver": "Farhan IT",
    "pesan": "aman aja"
    }

# CONTOH DELETE
    DELETE http://127.0.0.1:8000/api/manhaul/1

# SECURITY
- API Key
- Rate limit
- Whitelist IP
