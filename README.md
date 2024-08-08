# TRABAJO PRACTICO 1 

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
ya que PHP es un lenguaje del lado del servidor que no puede ser interpretado directamente por los navegadores.
Al usar XAMPP, que incluye Apache y PHP, el servidor web procesa el código PHP, genera el HTML resultante
y lo envía al navegador. Esto permite acceder a recursos del servidor, gestionar bases de datos,
asegurar el código fuente y crear contenido dinámico y personalizado para el usuario.
```
