## api:

## Ejemplos:

## Datos de estudiante:
  ```
  Gabriel Ruiz Burgos
  Ingenieria Civil Informatica
  ```

## Urls de "api" perro
### Create, List, Update, Delete
  ```
  CREATE = http://localhost:8000/api/perro/create
    name: string
    urlP: string
    description: string
  ```
  
  ```
  lIST DOGS = http://localhost:8000/api/perro/list
  ```
  
  ```
  UPDATE DOG = http://localhost:8000/api/perro/update/{id}
    name: string
    urlP: string
    description: string
  ```

  ```
  DELETE DOG = http://localhost:8000/api/perro/delete/{id}
  ```

## Urls de "api" interaccion
###
  ```
  CREATE = http://localhost:8000/api/interaccion/create
    idPerro: int
    idPersona: int
    fecha: date
    comentario: string
  ```
  
  ```
  lIST INTERACCION = http://localhost:8000/api/interaccion/list/{id}
  ```