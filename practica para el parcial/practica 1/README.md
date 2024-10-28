# WEB 2 - Ejercicio Práctico

### BookNest es una plataforma de alquiler de libros en línea. La plataforma cuenta con una base de datos con las siguientes tablas:

 - Alquileres (id_alquiler: int, id_libro: int, id_usuario: int, fecha_inicio: date, fecha_fin: date)
 - Libros (id_libro: int, titulo: varchar, autor: varchar, genero: varchar, precio_diario: float)
 - Usuarios (id_usuario: int, nombre: varchar, email: varchar, membresia_activa: boolean)

### Requerimiento: 
Implemente la funcionalidad para listar todos los alquileres activos de un usuario dado. Por cada alquiler, se debe mostrar el título del libro, el autor, la fecha de inicio del alquiler y el precio total acumulado hasta la fecha actual (calculado en base al precio diario del libro).

### Instrucciones:

1. Desarrolle los componentes necesarios siguiendo el patrón MVC. No es necesario crear las vistas, solo defina los métodos necesarios para el controlador y el modelo, junto con las invocaciones a la vista.
2. Controle los posibles errores de entrada, asumiendo que la vista no realiza validaciones.
3. Obtenga los datos de entrada mediante GET para el id_usuario.
4. Verifique que el usuario exista y que su membresía esté activa.
5. Calcule el precio total acumulado para cada alquiler como (fecha actual - fecha_inicio) * precio_diario.
6. No es necesario implementar el router del sistema.

### Indicaciones:

- Asegúrese de verificar que el usuario ingresado exista y tenga una membresía activa.
- En caso de que algún dato no sea válido (por ejemplo, un usuario inexistente o una membresía inactiva), muestre un mensaje de error.
- Organice el código con nombres descriptivos y comentarios para mejorar la claridad del ejercicio.