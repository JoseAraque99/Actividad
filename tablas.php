<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tablas</title>
  </head>
  <body>
    <!-- tablas -->
    <!-- ctrl+} -->
    <table border="1">
      <tr>
        <td>Columna 1</td>
        <td>Columna 2</td>
      </tr>
      <tr>
        <td>Hola</td>
        <td>mundo</td>
      </tr>
    </table>
    <!-- Tabla con encabezados y cuerpo -->
    <table border="2">
      <thead>
        <tr>
          <th>Nombres</th>
          <th>Apellidos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Jose</td>
          <td>Araque</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td>Manuel</td>
          <td>Salazar</td>
        </tr>
      </tfoot>
      <caption>Descripción de la tabla</caption>
    </table>
    <table border="4">
      <tr>
        <td colspan="2">ac</td>
      </tr>
      <tr>
        <td>b</td>
        <td>d</td>
      </tr>
    </table>
    <table border="2">
      <tr>
        <td rowspan="2">ab</td>
        <td>c</td>
      </tr>
      <tr>
        <td>d</td>
      </tr>
    </table>
    <table border="1">
      <tr>
        <td>a</td>
        <td>b</td>
      </tr>
      <tr>
        <td>c</td>
        <td>d</td>
      </tr>
    </table>
  </body>
</html>
