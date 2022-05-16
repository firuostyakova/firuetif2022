
Anuncia algo a tu clase

Anuncio: "EJERCICIO 2. Utilizando el archivo del…"
Marc Esteve Garcia
Fecha de creación: AyerAyer
EJERCICIO 2. Utilizando el archivo del campus "7.arrays_asociativos.php" escribir el siguiente texto:

"El teléfono 665533 es de Marc que vive en Torrelles de Foix"

Asignar un valor nuevo a la clave "ciudad"


echo "//EJERCICIO 2 con variables asociativas <br>";
$profesor['ciudad']="Torrelles de Foix"; //Primero asignamos valor y luego mostramos
echo "El teléfono " . $profesor['telefono'] . " es de ". $profesor['nombre'] . " que vive en " . $profesor['ciudad'];


Anuncio: "EJERCICIO 1. Utilizando el archivo del…"
Marc Esteve Garcia
Fecha de creación: AyerAyer
EJERCICIO

1. Utilizando el archivo del campus "7.array_multidimensional.php" escribir el siguiente texto:

"Hola, soy Héctor y tengo 35 años."

utilizad la variable $amigos


RESPUESTA:
echo $amigos[2][2] . ", soy " . $amigos[1][0] . " y  tengo " . $amigos[0][1] . " años.";
1 comentario de clase

Marc Esteve GarciaAyer
$amigos[2][2] es equivalente que la variable $hola


Anuncio: "Sincronización de Mailchimp con…"
Marc Esteve Garcia
Fecha de creación: 6 may6 may
Sincronización de Mailchimp con WordPress
https://jamboard.google.com/d/11Ocm6vJ1zUo1JOobWikuFOuWxSeWdFWVKHczoGIopA8/edit?usp=sharing


Anuncio: "Contactos de correo de vuestros…"
Marc Esteve Garcia
Fecha de creación: 5 may5 may
Contactos de correo de vuestros compañeros

contacts.csv
Valores separados por comas

Material: "8. Operadores en PHP"
Marc Esteve Garcia ha publicado nuevo material: 8. Operadores en PHP
Fecha de creación: 5 may5 may

Anuncio: "Dos documentos .ph print y echo"
Marc Esteve Garcia
Fecha de creación: 5 may5 may
Dos documentos .ph print y echo

echo.php
PHP

print.php
PHP


Anuncio: "Archivo constantes.php del ejemplo…"
Marc Esteve Garcia
Fecha de creación: 5 may5 may
Archivo constantes.php del ejemplo modificado

constantes.php
PHP


Anuncio: "Hay meet de la clase:…"
Marc Esteve Garcia
Fecha de creación: 5 may5 may
Hay meet de la clase:
https://meet.google.com/zfh-ycbz-zhy?authuser=0


Anuncio: "Variable.php explicado y ejercicio"
Marc Esteve Garcia
Fecha de creación: 4 may4 may
Variable.php explicado y ejercicio

variable.php
PHP

Material: "7. Tipos de datos PHP"
Marc Esteve Garcia ha publicado nuevo material: 7. Tipos de datos PHP
Fecha de creación: 4 may4 may (Última modificación: 6 may)
Material: "6. Print, echo y comentarios en PHP"
Marc Esteve Garcia ha publicado nuevo material: 6. Print, echo y comentarios en PHP
Fecha de creación: 4 may4 may
Material: "5. Constantes PHP"
Marc Esteve Garcia ha publicado nuevo material: 5. Constantes PHP
Fecha de creación: 4 may4 may

Anuncio: "<label> Tu correo electrónico [email*…"
Marc Esteve Garcia
Fecha de creación: 3 may3 may (Última modificación: 4 may)
<label> Tu correo electrónico
    [email* your-email] </label>

[select* menu-727 include_blank "Mares" "Océanos"]

[group grupo1]
Escoge el mar:
[checkbox checkbox-682 use_label_element "Mediterraneo" "Rojo"]
[/group]

[group grupo2]
Escoge el océano:
[checkbox checkbox-2 use_label_element "Pacífico" "Atlántico"]
[/group]

[number number-32 min:0 max:10]
[group group3]
Su número es correcto, el 3
[/group]

[submit "Enviar"]
1 comentario de clase

Marc Esteve Garcia4 may
CAMPOS CONDICIONALES "TEXTO":

show [grupo1] if [menu-727] equals "Mares"
show [grupo2] if [menu-727] equals "Océanos"
show [group3] if [number-32] equals "3"

Material: "4. Variables PHP"
Marc Esteve Garcia ha publicado nuevo material: 4. Variables PHP
Fecha de creación: 3 may3 may
Material: "3. Editores de código PHP"
Marc Esteve Garcia ha publicado nuevo material: 3. Editores de código PHP
Fecha de creación: 3 may3 may

Anuncio: "examen"
Marc Esteve Garcia
Fecha de creación: 3 may3 may
examen

web3.html
HTML

Material: "2. Xampp"
Marc Esteve Garcia ha publicado nuevo material: 2. Xampp
Fecha de creación: 3 may3 may
Material: "1. Introducción a PHP"
Marc Esteve Garcia ha publicado nuevo material: 1. Introducción a PHP
Fecha de creación: 29 abr29 abr (Última modificación: 29 abr)

Anuncio: "Ejemplos de técnicas de accessibilidad…"
Marc Esteve Garcia
Fecha de creación: 28 abr28 abr
Ejemplos de técnicas de accessibilidad web

accesibilidad.html
HTML


Anuncio: "Acceso a ReCaptcha developers:…"
Marc Esteve Garcia
Fecha de creación: 27 abr27 abr (Última modificación: 27 abr)
Acceso a ReCaptcha developers:
https://www.google.com/recaptcha/admin

<?php
print("Hola mundo<br>");
print "print() también funciona sin paréntesis.<br>";

print "Esto separa
múltiples líneas. Los saltos de línea también
se mostrarán<br>";

print nl2br('1Esto separa\nmúltiples líneas. Los salos de línea también\nse mostrarán.<br>');//comillas simples no entiende \n

print nl2br("2Esto separa\nmúltiples líneas. Los salos de línea también\nse mostrarán.<br>");//comillas dobles SI entiende \n

// También se puede usar variables usando print
$foo = "foobar";
$bar = "barbaz";

print "foo es $foo"; // foo es foobar
print '<br>';
// También se pueden usar arrays
$bar = array("value" => "foo");

print "Esto es {$bar['value']} !"; // Esto es foo !
print '<br>';
$fruita = ["platano", "limon", "manzana"];
print implode(", ", $fruita) . " son frutas"; //función implode muestra platano, limon, manzana de la variable array $fruita
print '<br>';

// Al usar comillas simples se mostrará el nombre de la variable, no su valor
print 'foo is $foo'; // foo is $foo
print '<br>';
// Si no se necesita mostrar otros caracteres, se puede simplemente mostrar variables

print $foo;          // foobar
print '<br>';

$variable = "variable";
print <<<END
Este párrafo utiliza la sintaxis "here document" para mostrar
múltiples líneas con la interpolación de $variable. Nótese
que el terminador de here document debe aparecer al final
de la línea con punto y coma y ¡ningún espacio en blanco extra!
END;
?>