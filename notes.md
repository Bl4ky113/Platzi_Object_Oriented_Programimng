# Programación Orientada a Objetos

## Por que?
- Eficiencia
- Analisis previo
- Dejar de ser Jr
- Dejar tambien de pegar y copiar código
- En general poder generar un código de mejor calidad

## Que vamos a hacer?
- Analizar código
- Plasmar Analisis
- Diagramar las soluciones
- Y ahí si escribir el código

## Que resuelve la OOP?

Primero los errores de la Programación Estructurada:
- Código muy largo
- Si algo falla, todo se rompe
- Dificíl de mantener
- Código Spagetti

Todo esto se puede evitar al hacer código OOP.

## Origen de OOP
El orgien de OOP viene de la orientación a objetos. Siendo una teoria que suministra la base y modelo para 
resolver problemas. Para despues estas soluciones llevarlas a código.

Haciendo uso general de 4 elementos:
- Clases
- Propiedades
- Métodos
- Objetos

Y uso de 4 pilares:
- Encapsulamiento
- Abstracción
- Herencia
- Polimorfismo

## Algunos lenguajes para usar OOP

- Java
	- Diseñado para OOP
	- Se puede usar para Android
	- Lenguaje copilado
- PHP
	- Diseñado para la Web
	- Lenguaje Interpretado
- Python
	- Diseñado para ser fácil de usar
	- Multiples usos:
		- Backend
		- Data Science
		- Automatización
		- ...
- JavaScript
	- Orientando a prototipos
	- Lenguaje Interpretado
	- Pensado para la Web, pero se puede usar para un millón más de cosas.

## Diagramas de Modelado

Existen dos tipos de diagramas de modelado:

- OMT / Object Modeling Techniques (1991):
	Son una metodología para el analisis orientado a Objectos. Es una forma en la que tomamos a las classes y objects
	y los explicamos, relacionamos y describimos haciendo uso de diferentes recuadros donde van a tener y recidir los elementos.
	Sin embargo este tipo de diagrama es antiguo.
- UML / Unified Modeling Language (1997):
	Se basa en las bases del OMT, pero se agrega más elementos y conceptos que el OMT. siendo:
	- Clases
	- Casos de Uso
	- Objetos
	- Actividades
	- Iteración
	- Estados
	- Implementación
	- ...
	Estos son más usados en el ambito laboral y es una buena practica realizarlos. Es el standar mordeno.
## UML

Unified Modeling Language es un lenguage de modelado de sistemas orientados a objetos.

En estos modelados vamos a usar diferentes elementos cómo:

- Clases:
	Es la parte superior se va a tener su nombre, en la cabecera de la clase. En el primer recuadro
	se va a definir las propieades o atributos, en el segundo, se definiran las operaciones.

	Estas propiedades, o atributos se pueden usar cómo un tipo de plantillas para objects en el código, suponiendo.

	Cada de estos atributos debe tener definido su tipo de valor (str, int, bool, float, ...)
	Un ejemplo es el un zoológico:

	Clase: Animales
	----------------
	-nombre: string
	-ID: int
	-edad: int

	Las operaciones tambien deben estar definidas cómo functions que va a poder hacer el elemento en sí, definiendo sus parametros
	con el tipo de valor y el tipo de valor del return. Mismo Ejemplo

	Clase: Animales
	----------------
	...
	----------------
	-cambiarNombre(nombreAntiguo:valor):tipoValorReturn

	Tanto los atributos, propiedades o operaciones tienen que iniciar con un simbolo que cambia dependiendo 
	de su visibilidad. Siendo algo muy importante al hacer uno de los pilares, Encapsulamiento.

	Estos simbolos pueden ser:
	- - private
	- + public
	- # protected
	- ~ default

Estas clases van a interactuar entre si en nuestro programa, haciendo diferentes tipos de relaciones, siendo estas representadas por:

- Asociación:
	Una flecha sencilla, sin tiangulo al final y sin relleno. Al asociar dos elementos, significa que uno tiene 
	al otro dentro de su definición, apuntandose desde la clase que depende a la clase que es la dependencia. 
- Herencia:
	Una flecha con triangulo al final y sin relleno. Estas interacciones ocurren solo entre una clase padre y una clase hijo. 
	llendo desde el hijo hacía a el padre.
- Agregación:
	Una flecha con un rombo y sin relleno. Indica a los participantes de un grupo (? pero este grupo puede existir sin sus participantes, 
	quedandose vaico.
- Composición:
	Una flecha con un rombo y relleno. Indica a los participantes de un grupo (? pero este grupo solo puede existir si tiene participantes.

## Objects

Los objects son elementos principales para OOP. Los objetos son aquellos que son sustantivos, y que principalmente en programación, tienen 
propiedades y comportamientos o functions.

Pueden ser tanto físicos cómo conceptuales. Cómo una manzana o una idea. Un usuario y una sesión.

Las propiedades o variables de un objeto tambien pueden ser usados cómo sustantivos. Mientras que los comportamientos pueden ser 
verbos o acciones. 

## Classes & Abstraction

Al momento de tener que hacer muchos objects, con varios metodos, vamos a tener que repetir mucho código si solo usamos los objetos.

Para eso vamos a hacer una clase, la cual nos va a servir de plantilla, la cual contiene propiedades, atributos, variables y metodos, funciones o 
acciones. Cuando usamos estas clases, nos va a dar un objeto. Pero para hacer una clase debemos hacer abstracción de los datos de un object.

## Modularidad

La modularidad de un programa consiste en dividir diferentes partes todo el programa, generalmente por cada proceso elemento. Esto nos permite:
- Reutilizar código o módulos
- Evitar Colapsos Masivos o de todo el programa
- Mantener de una forma más sencilla el código
- Tener una mayor legibilidad en el código
- Incrementar la velocidad al resolver problemas

Es buena practica dividir cada clase por un archivo, cómo en Java.

## Herencia

Cuando tengamos que hacer varias clases con tan leves variaciones entre sí, lo mejor va a ser uso de la herencia.
Creando una clase a partir de otras clases, en donde se va a crear una Clase Padre y las clases hijos, haciendo esto apartir del concepto
anterior de abstracción de clases. 

La clase padre se le referenciara cómo SUPER Clase y a las clases hijos cómo sub clases.

La Super Clase va a tener todas las propiedades & metodos que se tengan repetidos en las sub clases, y si necesitamos 
unos propiedades o metodos especiales para cada sub clase, es valido crear una sub clase con esas propiedades y metodos.


