## Datos de estudiante:
  ```
  Gabriel Ruiz Burgos
  Ingenieria Civil Informatica
  ```

## Urls de "api" perro
### Create, List, Update, Delete
  ```
  CREATE = http://localhost:8000/api/perro/create
    name: palmerita
    urlP: photo
    description: baila el doggy Style
    JSON = {"name":"palmerita","urlP":"foto","description":"baila el doggy Style"}
    JSON = {"name":"tepo tepo","urlP":"foto","description":"baila el doggy Style"}
    JSON = {"name":"adjetivo","urlP":"foto","description":"baila el doggy Style"}
  ```
  ```
  lIST DOGS = http://localhost:8000/api/perro/list
  ```
  
  ```
  UPDATE DOG = http://localhost:8000/api/perro/update/{id}
    name: string
    urlP: string
    description: string
    JSON = {"description":"no le gusta el doggy Style"}
    JSON = {"description":"le encanta el doggy Style"}
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
    JSON = {"idDogI":"1","idDogC":"2"}
    JSON = {"idDogI":"1","idDogC":"3"}
  ```
  
  ```
  lIST INTERACCION = http://localhost:8000/api/interaccion/list/{id}
  ```