
# TRABAJO PRACTICO 1 
## Tabla de Contenidos
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

## EJERCICIO 1:
### A. ¿Qué extensión debe tener la página?
```
La extensión del archivo debe ser `.php` para que el servidor web pueda procesar el código PHP
y generar la página HTML de manera adecuada. Al guardar tu archivo con la extensión `.php`,
el servidor ejecutará el código PHP y enviará el HTML resultante al navegador del usuario.
```
### B. Lo que acabas de hacer: ¿Es una página dinámica o una página estática? ¿Cuál es la diferencia?
```
Lo que acabamos de hacer es una página dinámica. La razón es que estamos utilizando PHP para generar contenido HTML.
PHP es un lenguaje de programación del lado del servidor, lo que significa que el servidor procesa el código PHP
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
echo $array_indexado[1]; // Imprime "Banana"
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

## EJERCICIO 3:

### A. Envíe el formulario usando los métodos POST y GET. ¿Cuál es la diferencia? ¿En qué situaciones considera mejor utilizar uno u el otro?

#### GET:

- Cuando se desea obtener datos sin realizar cambios en el servidor.
- Para formularios que no contienen información sensible.
- Cuando se quiere permitir a los usuarios marcar o compartir la URL generada.
- Mejor para solicitudes idempotentes y para recuperar datos sin efectos secundarios. Ideal para formularios de búsqueda o filtros.

#### POST:

- Cuando se envía información sensible, como contraseñas o datos personales.
- Para formularios que implican cambios en el servidor, como registros de usuarios, compras, etc.
- Cuando se envía una gran cantidad de datos.
- Mejor para enviar datos sensibles o grandes, y para operaciones que modifican el estado del servidor. Ideal para formularios de registro, inicio de sesión, compras, etc.


