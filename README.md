

# Documentación API / punto_home 

##Descripción  

Es una API REST que permite visualizar un conjunto de productos cargados dinámicamente. Son productos de decoración que perteneces a una categoría, vas a encontrarte con un conjunto de productos pertenecientes a una categoría especifica, estas categorías son llamadas con un id especifica para cada una. Esta API esta desarrollada para que puedas utilizarla fácilmente y que tengas información actualizada de nuestros productos continuamente.


## URL de punto_home 

Podes empezar a consumirla desde su URL : http://localhost/WEB%202/TPE2/api/productos
Hasta el momento como te contamos anteriormente tenemos esta estructura en el proyecto

•productos

De donde vas a poder consultar por cualquiera de sus campos para poder ordenar la información, también podés mostrar la cantidad de información que desees por página. Todo te va a ser posible utilizándolo desde la URL
Los parámetros utili
Donde por ejemplo vas a poder ver un producto conociendo su id, por ejemplo:
http://localhost/WEB%202/TPE2/api/productos/2
En el caso de ingresar un ordenamiento invalido o paginado por defecto los va a mostrar a todos



### Parametros que se utilizan 🔧

Por medio de estos parámetros vamos a poder ordenar y paginar según se requiera
#### orderBy: Toma los registros que tengan valores iguales al ingresado y se ordenan de acuerdo al próximo parámetro que vamos a mencionar 'sort'
#### sort: Por medio de este parámetro se van a ordenar los registros que tenga el orderBy y lo va a ordenar de forma ASC ascendente o DESC descendente.

Por ejemplo orderBy: precio  y sort: DESC

http://localhost/WEB%202/TPE2/api/productos/?orderBy=precio&sort=DESC

[
    {
        "id": 46,
        "nombre": "Cortina",
        "id_categoria": 3,
        "material": "Gasa",
        "color": "Blanco",
        "descripcion": "Pintura en relieve- Mandala",
        "foto": "uploads/63503e5f14869cortinab.png",
        "precio": 9000,
        "categoria": "baño"
    },
    {
        "id": 3,
        "nombre": "salida de baño",
        "id_categoria": 3,
        "material": "madera",
        "color": "madera",
        "descripcion": "",
        "foto": "uploads/6350330d1074asalidadebaño.png",
        "precio": 4000,
        "categoria": "baño"
    },
    {
        "id": 6,
        "nombre": "repasador x 4",
        "id_categoria": 2,
        "material": "Nepal",
        "color": "rosa, turquesa, mostaza, cemento",
        "descripcion": "Colores a eleccion",
        "foto": "uploads/63503daf2ed3erepasador.png",
        "precio": 3500,
        "categoria": "cocina"
    },
    {
        "id": 4,
        "nombre": "cruce de bañera",
        "id_categoria": 3,
        "material": "madera",
        "color": "madera",
        "descripcion": "",
        "foto": "uploads/635033009c908crucebañera.png",
        "precio": 2600,
        "categoria": "baño"
    },
    {
        "id": 54,
        "nombre": "velasssssss",
        "id_categoria": 1,
        "material": "cera soja, madera",
        "color": "blanco",
        "descripcion": "posmannnn   Perfuman tu hogar",
        "foto": "uploads/635032d82cd7cveladiseño.png",
        "precio": 2000,
        "categoria": "living"
    },
    {
        "id": 31,
        "nombre": "repasador x 4",
        "id_categoria": 2,
        "material": "Gasa",
        "color": "blanco",
        "descripcion": "30 x 30 cm por 4 unidades colores a eleccion",
        "foto": "uploads/63503de9b5d9fservilletas.png",
        "precio": 1500,
        "categoria": "cocina"
    },
    {
        "id": 52,
        "nombre": "velasssssss",
        "id_categoria": 1,
        "material": "cera soja, madera",
        "color": "blanco",
        "descripcion": "posmannnn   Perfuman tu hogar",
        "foto": "uploads/635032d82cd7cveladiseño.png",
        "precio": 1000,
        "categoria": "living"
    },
    {
        "id": 53,
        "nombre": "velasssssss",
        "id_categoria": 1,
        "material": "cera soja, madera",
        "color": "blanco",
        "descripcion": "posmannnn   Perfuman tu hogar",
        "foto": "uploads/635032d82cd7cveladiseño.png",
        "precio": 1000,
        "categoria": "living"
    },
    {
        "id": 2,
        "nombre": "velas",
        "id_categoria": 1,
        "material": "cera soja, madera",
        "color": "blanco",
        "descripcion": "Perfuman tu hogar",
        "foto": "uploads/635032d82cd7cveladiseño.png",
        "precio": 1000,
        "categoria": "living"
    },
    {
        "id": 51,
        "nombre": "velasssssss",
        "id_categoria": 1,
        "material": "cera soja, madera",
        "color": "blanco",
        "descripcion": "posmannnn   Perfuman tu hogar",
        "foto": "uploads/635032d82cd7cveladiseño.png",
        "precio": 1000,
        "categoria": "living"
    }
]


#### startAt: Nos indica el numero de pagina que queremos, tiene por inicio la numero 0
#### endAt: Este numero nos va a indicar la cantidad de productos que queremos ver por pagina.

Por ejemplo orderBy: precio   sort: DESC  startAt: 0  endAt: 3

http://localhost/WEB%202/TPE2/api/productos/?orderBy=precio&sort=DESC&startAt=0&endAt=3

[
    {
        "id": 46,
        "nombre": "Cortina",
        "id_categoria": 3,
        "material": "Gasa",
        "color": "Blanco",
        "descripcion": "Pintura en relieve- Mandala",
        "foto": "uploads/63503e5f14869cortinab.png",
        "precio": 9000,
        "categoria": "baño"
    },
    {
        "id": 3,
        "nombre": "salida de baño",
        "id_categoria": 3,
        "material": "madera",
        "color": "madera",
        "descripcion": "",
        "foto": "uploads/6350330d1074asalidadebaño.png",
        "precio": 4000,
        "categoria": "baño"
    },
    {
        "id": 6,
        "nombre": "repasador x 4",
        "id_categoria": 2,
        "material": "Nepal",
        "color": "rosa, turquesa, mostaza, cemento",
        "descripcion": "Colores a eleccion",
        "foto": "uploads/63503daf2ed3erepasador.png",
        "precio": 3500,
        "categoria": "cocina"
    }
]



## Como se consume de la API ⚙️

### Servicio GET para obtener todas los productos
1- Selecciona el método GET
2- Teclea la URL a probar ​
3- Da clic en el botón SEND
Abajo en la pestaña de Body vemos un arreglo.

http://localhost/WEB%202/TPE2/api/productos/

[
    {
        "id": 2,
        "nombre": "velas",
        "id_categoria": 1,
        "material": "cera soja, madera",
        "color": "blanco",
        "descripcion": "Perfuman tu hogar",
        "foto": "uploads/635032d82cd7cveladiseño.png",
        "precio": 1000,
        "categoria": "living"
    },
    {
        "id": 3,
        "nombre": "salida de baño",
        "id_categoria": 3,
        "material": "madera",
        "color": "madera",
        "descripcion": "",
        "foto": "uploads/6350330d1074asalidadebaño.png",
        "precio": 4000,
        "categoria": "baño"
    },
    {
        "id": 4,
        "nombre": "cruce de bañera",
        "id_categoria": 3,
        "material": "madera",
        "color": "madera",
        "descripcion": "",
        "foto": "uploads/635033009c908crucebañera.png",
        "precio": 2600,
        "categoria": "baño"
    },
    {
        "id": 6,
        "nombre": "repasador x 4",
        "id_categoria": 2,
        "material": "Nepal",
        "color": "rosa, turquesa, mostaza, cemento",
        "descripcion": "Colores a eleccion",
        "foto": "uploads/63503daf2ed3erepasador.png",
        "precio": 3500,
        "categoria": "cocina"
    },
    {
        "id": 31,
        "nombre": "repasador x 4",
        "id_categoria": 2,
        "material": "Gasa",
        "color": "blanco",
        "descripcion": "30 x 30 cm por 4 unidades colores a eleccion",
        "foto": "uploads/63503de9b5d9fservilletas.png",
        "precio": 1500,
        "categoria": "cocina"
    },
    {
        "id": 46,
        "nombre": "Cortina",
        "id_categoria": 3,
        "material": "Gasa",
        "color": "Blanco",
        "descripcion": "Pintura en relieve- Mandala",
        "foto": "uploads/63503e5f14869cortinab.png",
        "precio": 9000,
        "categoria": "baño"
    },
    {
        "id": 51,
        "nombre": "velasssssss",
        "id_categoria": 1,
        "material": "cera soja, madera",
        "color": "blanco",
        "descripcion": "posmannnn   Perfuman tu hogar",
        "foto": "uploads/635032d82cd7cveladiseño.png",
        "precio": 1000,
        "categoria": "living"
    },
    {
        "id": 52,
        "nombre": "velasssssss",
        "id_categoria": 1,
        "material": "cera soja, madera",
        "color": "blanco",
        "descripcion": "posmannnn   Perfuman tu hogar",
        "foto": "uploads/635032d82cd7cveladiseño.png",
        "precio": 1000,
        "categoria": "living"
    },
    {
        "id": 53,
        "nombre": "velasssssss",
        "id_categoria": 1,
        "material": "cera soja, madera",
        "color": "blanco",
        "descripcion": "posmannnn   Perfuman tu hogar",
        "foto": "uploads/635032d82cd7cveladiseño.png",
        "precio": 1000,
        "categoria": "living"
    },
    {
        "id": 54,
        "nombre": "velasssssss",
        "id_categoria": 1,
        "material": "cera soja, madera",
        "color": "blanco",
        "descripcion": "posmannnn   Perfuman tu hogar",
        "foto": "uploads/635032d82cd7cveladiseño.png",
        "precio": 2000,
        "categoria": "living"
    }
]

### Servicio POST
1- Seleccionar el método POST
2- Teclear la URL ​
3- Seleccionar la pestaña Body
4- Seleccionar la opción raw
5- Seleccionar el tipo JSON (application/json)
6- Teclear el objeto JSON a agregar
7- Dar clic en el botón Send
Abajo puedes ver el Status en este caso fue 201 Created y en el Body te regresa el Json de la categoría insertada. Si vuelves a probar el servicio GET, obtendrás el producto recién creada. Del lado izquierdo en la pestaña History se va guardado la lista de servicios llamados por sí lo deseas volver a llamar.


{
    "id": 55,
    "nombre": "vela",
    "id_categoria": 1,
    "material": "cera soja, vidrio",
    "color": "blanco",
    "descripcion": "POST Perfuman tu hogar",
    "foto": "uploads/635032d82cd7cveladiseño.png",
    "precio": 500,
    "categoria": "living"
}


### Servicio GET para obtener un producto por Id
Podemos consultar un registro en particular indicado el Id de la categoría
1- Seleccionar el método GET
2- Teclear la URL  donde 1 es el Id del registro que deseas consultar
3- Dar clic en el botón Send
Abajo puedes ver el Status en este caso fue 200 OK y regresa la categoría con el Id 1

http://localhost/WEB%202/TPE2/api/productos/2

{

        "nombre": "vela",
        "id_categoria": 1,
        "material": "cera soja, vidrio",
        "color": "blanco",
        "descripcion": "POST Perfuman tu hogar",
        "foto": "uploads/635032d82cd7cveladiseño.png",
        "precio": 500
}



### Servicio DELETE
1- Seleccionar el método DELETE
2- Teclear la URL  donde 1 es el Id del registro que deseas borrar
3- Dar clic en el botón Send
Abajo puedes ver el Status en este caso fue 200 OK y te regresa la categoría que se borró.

http://localhost/WEB%202/TPE2/api/productos/55

Luego de apretar send nos devuelve "El producto fue borrada con exito."

## Manejo de resultados:
2xx Código de estado: Correcto
Los códigos de estado HTTP de nivel 2xx indicar que la solicitud del cliente del servidor fue correcta y procesada. 
Por ejemplo 200 OK todo fue procesado correctamente.

4xx: Error del cliente
La clasificación con la mayoría de los códigos de estado HTTP, Los códigos de estado HTTP 4xx no son lo que desea que vean los usuarios. Cualquier código de estado que comience con un 4 significa quehay un problema con el cliente. Los códigos de estado 4xx se generan normalmente si una página se ha eliminado y no se ha redirigido, o si se ha introducido incorrectamente en una URL o enlace.
Por ejemplo ccuando quieren eliminar un producto con una id invalida el error es un 404 y el mensaje es: "El producto con el id=180 no existe"

5xx: Error del servidor
Al igual que los códigos de estado 4xx, los códigos de estado 5xx indican que hay un error,sin embargo, el error en cuestión no es probable debido a una mala conexión o el propio navegador. Los códigos de estado 5xx indican hay un problema a nivel de servidor y no puede procesar el solicitud del cliente.


##  Se utilizo para hacer esta API 📋🛠️

Para la realización de esta API utilizamos diferentes herramientas que se listan a continuación:
• PHP
• Postman
• XAMPP
• Servidor Apache
• Base de datos phpmyadmin
• Visual Studio Code

# https://github.com/Larisma/TPE2

email: laura@gmail.com
password: 012345

## Autor ✒️ *Lelong Laura*

⌨️ con ❤️  😊