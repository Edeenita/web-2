
# TRABAJO PRACTICO 1 
## Tabla de Contenidos TP1
1. [EJERCICIO 1](#ejercicio-1)
   - [A. ¿Qué extensión debe tener la página?](#a-qué-extensión-debe-tener-la-página)
   - [B. Lo que acabas de hacer: ¿Es una página dinámica o una página estática? ¿Cuál es la diferencia?](#b-lo-que-acabas-de-hacer-es-una-página-dinámica-o-una-página-estática-cuál-es-la-diferencia)
     - [Página Estática](#página-estática)
     - [Página Dinámica](#página-dinámica)
   - [C. ¿Por qué es necesario tener un servidor web para realizar esto?](#c-por-qué-es-necesario-tener-un-servidor-web-para-realizar-esto)
2. [EJERCICIO 2](#ejercicio-2)
      - [Diferencias entre arreglos asociativos e indexados](#diferencias-entre-arreglos-asociativos-e-indexados)
         - [Indexados](#indexados)
         - [Asociativos](#asociativos)
         - [Diferencias Clave](#diferencias-clave)
5. [EJERCICIO 5](#ejercicio-5)
      - [A. Envíe el formulario usando los métodos POST y GET. ¿Cuál es la diferencia? ¿En qué situaciones considera mejor utilizar uno u el otro?](#a-envíe-el-formulario-usando-los-métodos-post-y-get-cuál-es-la-diferencia-en-qué-situaciones-considera-mejor-utilizar-uno-u-el-otro)
      - [B. Investigue las diferencias entre los arreglos $_POST $_GET y $_REQUEST de PHP](#b-investigue-las-diferencias-entre-los-arreglos-_post-_get-y-_request-de-php)
      - [C. Validaciones de datos en el servidor](#c-validaciones-de-datos-en-el-servidor)
         - [Validaciones del Lado del Cliente](#validaciones-del-lado-del-cliente)
         - [Validaciones del Lado del Servidor](#validaciones-del-lado-del-servidor)
7. [EJERCICIO 7](#ejercicio-7)
      - [Libreria Pi PHP](#libreria-pi-php)        


## EJERCICIO 1:
### A. ¿Qué extensión debe tener la página?
```
La extensión del archivo debe ser `.php` para que el servidor web pueda procesar el código PHP
y generar la página HTML de manera adecuada. Al guardar tu archivo con la extensión `.php`,
el servidor ejecutará el código PHP y enviará el HTML resultante al navegador del usuario.
```
### B. Lo que acabas de hacer: ¿Es una página dinámica o una página estática? ¿Cuál es la diferencia?
```
Lo que acabamos de hacer es una página dinámica. La razón es que estamos utilizando PHP
para generar contenido HTML.
PHP es un lenguaje de programación del lado del servidor, lo que significa que el 
servidor procesa el código PHP
y luego envía el HTML resultante al navegador del usuario.
```
#### Diferencia entre página estática y página dinámica:

##### Página Estática:

- **Contenido Fijo:** ``` El contenido de una página estática es fijo y no cambia a menos que el código HTML sea modificado manualmente. ```
- **Lenguajes Utilizados:** ```Generalmente se utilizan HTML, CSS y JavaScript. No hay procesamiento del lado del servidor.```
- **Interacción:** ```Poca o ninguna interacción con el servidor después de que la página ha sido cargada. Todo el contenido está presente desde el principio.```
- **Velocidad de Carga:** ```Generalmente más rápidas de cargar porque no requieren procesamiento del lado del servidor.```

##### Página Dinámica:

- **Contenido Dinámico:** ```El contenido puede cambiar según diferentes factores como entradas del usuario, datos de una base de datos, tiempo, etc.```
- **Lenguajes Utilizados:** ```Utilizan lenguajes del lado del servidor como PHP, Python, Ruby, ASP.NET, etc., además de HTML, CSS y JavaScript.```
- **Interacción:** ```Interactúan con el servidor para procesar solicitudes y devolver contenido actualizado.```
- **Velocidad de Carga:** ```Pueden ser más lentas de cargar debido al procesamiento necesario del lado del servidor.```

### C. ¿Por qué es necesario tener un servidor web para realizar esto?
```
Para ejecutar scripts PHP y generar páginas dinámicas, es necesario tener un servidor web,
ya que PHP es un lenguaje del lado del servidor que no puede ser interpretado directamente
por los navegadores.
Al usar XAMPP, que incluye Apache y PHP, el servidor web procesa el código PHP,
genera el HTML resultantey lo envía al navegador. Esto permite acceder a recursos del servidor,
gestionar bases de datos, asegurar el código fuente y crear contenido dinámico
y personalizado para el usuario.
```
## EJERCICIO 2:
### Diferencias entre arreglos asociativos e indexados
#### Indexados:
- **Definición**: Son arreglos en los que las claves (o índices) son números enteros.
- **Índices**: Los índices son asignados automáticamente empezando desde 0, a menos que se especifique lo contrario.
- **Ejemplo**:
  ```php
  $array_indexado = array("Manzana", "Banana", "Cereza");
  // Equivalente a:
  // $array_indexado = [0 => "Manzana", 1 => "Banana", 2 => "Cereza"];
  ```
- **Acceso a elementos**: Los elementos se acceden mediante sus índices numéricos.
 ```php
echo $array_indexado[1]; // Imprime "Banana"
```
#### Asociativos:
- **Definición**:Son arreglos en los que las claves son cadenas de texto (o cualquier otro tipo de dato, pero generalmente se usan cadenas).
- **Índices**: Los índices son definidos explícitamente por el programador.
- **Ejemplo**:
  ```php
  $array_asociativo = array(
     "fruta1" => "Manzana",
     "fruta2" => "Banana",
     "fruta3" => "Cereza"
   );
   // Equivalente a:
   // $array_asociativo = ["fruta1" => "Manzana", "fruta2" => "Banana", "fruta3" => "Cereza"];

- **Acceso a elementos**: Los elementos se acceden mediante sus índices numéricos.
 ```php
echo $array_asociativo["fruta1"]; // imprime "manzana"
```
### Diferencias Clave

#### Tipo de Índices:

- **Arreglos Indexados**: Utilizan índices numéricos, asignados automáticamente.
- **Arreglos Asociativos**: Utilizan índices definidos por el usuario, que suelen ser cadenas.

#### Acceso a Elementos:

- **Arreglos Indexados**: Se accede a los elementos utilizando índices numéricos.
- **Arreglos Asociativos**: Se accede a los elementos utilizando claves específicas definidas por el usuario.

#### Uso Común:

- **Arreglos Indexados**: Son útiles cuando se necesita almacenar una lista de elementos donde el orden es importante y se puede acceder a ellos por su posición.
- **Arreglos Asociativos**: Son útiles cuando se necesita un mapeo de claves a valores, permitiendo acceder a los elementos por un identificador significativo en lugar de por un número.

## EJERCICIO 5:

### A. Envíe el formulario usando los métodos POST y GET. ¿Cuál es la diferencia? ¿En qué situaciones considera mejor utilizar uno u el otro?

#### GET:

- ```Cuando se desea obtener datos sin realizar cambios en el servidor.```
- ```Para formularios que no contienen información sensible.```
- ```Cuando se quiere permitir a los usuarios marcar o compartir la URL generada.```
- ```Mejor para solicitudes idempotentes y para recuperar datos sin efectos secundarios. Ideal para formularios de búsqueda o filtros.```

#### POST:

- ```Cuando se envía información sensible, como contraseñas o datos personales.```
- ```Para formularios que implican cambios en el servidor, como registros de usuarios, compras, etc.```
- ```Cuando se envía una gran cantidad de datos.```
- ```Mejor para enviar datos sensibles o grandes, y para operaciones que modifican el estado del servidor. Ideal para formularios de registro, inicio de sesión, compras, etc.```

### B. Investigue las diferencias entre los arreglos $_POST $_GET y $_REQUEST de PHP

## Diferencias entre los arreglos `$_POST`, `$_GET` y `$_REQUEST` en PHP

```PHP proporciona tres arreglos globales que se utilizan para acceder a los datos enviados mediante formularios HTML y otros mecanismos de solicitud. Es importante entender las diferencias entre ellos para utilizarlos de manera apropiada en nuestras aplicaciones.```

### `$_GET`
- **Descripción**: ```Contiene los datos enviados mediante el método GET.```
- **Uso**: ```Se utiliza principalmente para recuperar datos de consultas de URL.```
- **Características**:
  - ```Los datos se envían como parte de la URL (cadena de consulta).```
  - ```Los datos son visibles en la barra de direcciones del navegador.```
  - ```Adecuado para formularios de búsqueda y filtros, donde los datos no son sensibles.```

### `$_POST`
- **Descripción**: ```Contiene los datos enviados mediante el método POST.```
- **Uso**: ```Se utiliza para enviar datos que no deberían ser visibles en la URL, como información sensible.```
- **Características**:
  - ```Los datos se envían en el cuerpo de la solicitud HTTP.```
  - ```Los datos no son visibles en la barra de direcciones del navegador.```
  - ```Adecuado para formularios de registro, inicio de sesión, y cualquier operación que modifique el estado del servidor.```

### `$_REQUEST`
- **Descripción**: ```Contiene los datos combinados de $_GET, $_POST y $_COOKIE.```
- **Uso**: ```Se utiliza para acceder a datos de solicitud sin importar el método de envío.```
- **Características**:
  - ```Combina datos de $_GET, $_POST y $_COOKIE.```
  - ```Puede ser útil para simplificar el acceso a los datos, pero puede presentar problemas de seguridad y ambigüedad.```

### **Resumen**:
- `$_GET`: ```Utilizar cuando los datos no son sensibles y deben ser accesibles como parte de la URL.```
- `$_POST`: ```Utilizar cuando los datos son sensibles o cuando se está modificando el estado del servidor.```
- `$_REQUEST`: ```Utilizar con precaución, ya que puede introducir ambigüedades y problemas de seguridad. Es preferible especificar claramente si se está utilizando $_GET o $_POST.```

### C. Validaciones de datos en el servidor

```
Genere validaciones de datos en el servidor. 
Ningún campo puede estar vacío. 
¿Cuál es la diferencia entre realizar estas verificaciones 
del lado del cliente o del lado del servidor? 
```

#### **Validaciones del Lado del Cliente:**
   - *required* dentro del `<input>`
   - Ventajas:
        - Mejora la experiencia del usuario al proporcionar retroalimentación inmediata.
        - Reduce el número de solicitudes al servidor si los datos no son válidos.
 - Desventajas:
     - Las validaciones del lado del cliente pueden ser eludidas fácilmente deshabilitando JavaScript o manipulando el HTML.
     - No es suficiente por sí sola para garantizar la seguridad de los datos.

#### **Validaciones del Lado del Servidor:**
   - Se verifica que los campos no estén vacíos antes de procesar y mostrar los datos:
      ```php
      if (!empty($_METHOD['nombre']) && !empty($_METHOD['apellido']) && !empty($_METHOD['edad']))
      ```
   - Ventajas:
      - Asegura que los datos sean válidos y seguros antes de procesarlos o almacenarlos.
      - No puede ser eludida por el usuario, ya que es independiente del navegador o del cliente.
   - Desventajas:
      - Los usuarios no reciben retroalimentación inmediata sobre los errores, lo que puede afectar la experiencia.

## EJERCICIO 7
#### Libreria Pi PHP
   `<link>` : <https://www.php.net/manual/es/function.pi.php>

# TRABAJO PRACTICO 2
## Tabla de Contenidos TP1


## EJERCICIO 1

### ¿Para que se utiliza el ruteo en una aplicación web?

#### Ruteo en la Aplicación Web
   ```
      El ruteo es un componente esencial de esta aplicación web, responsable de 
      definir cómo se manejan y direccionan las solicitudes HTTP. 
      Cada URL específica se mapea a un controlador o función que 
      determina la lógica a seguir, permitiendo responder de manera 
      adecuada a la solicitud del usuario.
   ```

##### Funciones principales del ruteo:
   - *Redireccionamiento de URLs*: Asocia URLs específicas con controladores o acciones en el backend.
   - *Gestión de parámetros*: Extrae y pasa parámetros desde la URL al controlador correspondiente.
   - *Manejo de métodos HTTP*: Administra diferentes tipos de solicitudes (GET, POST, PUT, DELETE) en una misma URL.
   - *Generación de URLs*: Facilita la creación de enlaces dinámicos dentro de la aplicación.
   - *Seguridad*: Se integra con sistemas de autenticación y autorización para controlar el acceso a los recursos.

## EJERCICIO 2

### ¿Qué ventajas tiene la generación de URL’s semánticas?

#### Ventajas de la Generación de URLs Semánticas

   - *UX*: Las URLs semánticas son más fáciles de leer, entender y recordar, mejorando la navegación y la interacción del usuario con la           aplicación.   
   - *SEO*: Al incluir palabras clave relevantes, las URLs semánticas facilitan que los motores de búsqueda indexen y clasifiquen mejor el contenido, mejorando su visibilidad.
   - *Claridad y Relevancia*: Proporcionan información sobre el contenido de la página directamente en la URL, lo que aumenta la confianza, la relevancia y la claridad para los usuarios.
   - *Facilidad al compartir*: Son más fáciles de compartir y entender en cualquier plataforma, ya que no contienen parámetros innecesarios que puedan confundir.
   - *Gestión y Mantenimiento*: Simplifican la identificación y actualización de rutas en el código, facilitando el desarrollo y mantenimiento de la aplicación.
   - *Seguridad*: Al evitar parámetros innecesarios, se reduce el riesgo de manipulaciones, mejorando la seguridad de la aplicación.

## EJERCICIO 3

### ¿Qué es y que nos permite hacer el archivo .htaccess?

#### Archivo `.htaccess`:

```
   El archivo .htaccess es un archivo de configuración 
   utilizado en servidores web Apache que permite controlar 
   el comportamiento de un sitio web o aplicación 
   en un nivel específico del directorio.
```

#### Funciones clave del archivo .htaccess:

   - *Redirecciones de URL*: Facilita la redirección de URLs antiguas a nuevas 
      y permite la migración de tráfico de HTTP a HTTPS.
   - *Control de acceso*: Permite restringir el acceso a ciertas partes del 
      sitio web mediante autenticación por contraseña o limitación por dirección IP.
   - *Reescritura de URLs*: Habilita la creación de URLs semánticas a través de la reescritura de URLs.
   - *Páginas de error*: Define páginas de error para el usuario en caso de errores como 404.
   - *Protección de seguridad*: Bloquea bots maliciosos y protege el sitio contra ataques.

#### Codigo Generico de los .htaccess:
   
         <IfModule mod_rewrite.c>
            RewriteEngine On
            RewriteCond %{REQUEST_FILENAME} -f [OR]
            RewriteCond %{REQUEST_FILENAME} -d

            RewriteRule \.(?:css|js|jpe?g|gif|png)$ - [L]
            RewriteRule ^(.*)$ router.php?action = $1 [QSA, L]
         </IfModule>
      
## EJERCICIO 4

### Diseñe la tabla de ruteo para la siguiente funcionalidad de un sistema web. No es necesario implementar nada, simplemente definir las acciones del router.

   - Obtener la lista de usuarios del sistema

   - Agregar un nuevo usuario

   - Ver la información de un usuario dado su DNI

### Diseño Tabla de Ruteo

| Método HTTP | Ruta                    | Acción                        | Descripción                                                    |
|-------------|-------------------------|-------------------------------|----------------------------------------------------------------|
| **GET**       | `/usuarios`             | `obtenerListaUsuariosSys()`      | Obtener la lista completa de usuarios del sistema.             |
| **POST**      | `/usuarios`             | `agregarNuevoUsuario()`            | Agregar un nuevo usuario al sistema.                           |
| **GET**       | `/usuarios/{dni}`       | `verDniUsuario(dni)`  | Ver la información de un usuario dado su DNI.                  |

### Descripción de las rutas

1. **GET `/usuarios`**
   - **Acción**: `obtenerListaUsuariosSys()`
   - **Descripción**: Obtener la lista completa de usuarios registrados en la app.

2. **POST `/usuarios`**
   - **Acción**: `agregarNuevoUsuario()`
   - **Descripción**: Agregar un nuevo usuario a la app desde el <form>.

3. **GET `/usuarios/{dni}`**
   - **Acción**: `verDniUsuario(dni)`
   - **Descripción**: Obtener el DNI de un usuario en específico, utilizando su id {dni} como identificador en la URL.
