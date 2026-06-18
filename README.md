# exercise-2-sprint-3 Patterns

## Descripción

Este repositorio contiene ejercicios prácticos sobre patrones de diseño en PHP.

Actualmente se han implementado:

* **Level 1 - Part 1:** Singleton Pattern.
* **Level 1 - Part 2:** Dependency Injection.

Los niveles 2 y 3 se encuentran vacíos por el momento y serán completados en futuras entregas.

---

## Estructura del proyecto

```text
src/
├── level1/
│   ├── part1/
│   └── part2/
├── level2/
└── level3/
```

---

## Level 1 - Part 1

### Singleton Pattern

En este ejercicio se ha refactorizado la clase `Tigger` aplicando el patrón de diseño **Singleton**.

### Objetivos

* Garantizar que solo exista una instancia de la clase.
* Impedir la creación directa de objetos desde el exterior.
* Proporcionar un punto único de acceso mediante `getInstance()`.
* Contabilizar el número de rugidos realizados por Tigger.

### Funcionalidades implementadas

* Constructor privado.
* Instancia única almacenada en una propiedad estática.
* Método estático `getInstance()`.
* Método `roar()` para emitir rugidos.
* Método `getCounter()` para obtener el número total de rugidos realizados.

### Conceptos practicados

* Propiedades estáticas.
* Métodos estáticos.
* Constructor privado.
* Patrón Singleton.

---

## Level 1 - Part 2

### Dependency Injection

En este ejercicio se ha implementado el patrón de **Inyección de Dependencias** simulando una persona que sale de casa para estudiar o trabajar.

### Objetivo

Demostrar cómo una clase puede recibir los objetos que necesita desde el exterior en lugar de crearlos internamente.

### Componentes

* `Person`
* `Wallet`
* `Keys`
* `Smartphone`
* `Transport`

### Implementación

La clase `Person` recibe todas sus dependencias mediante el constructor:

* Cartera (`Wallet`)
* Llaves (`Keys`)
* Smartphone (`Smartphone`)
* Transporte (`Transport`)

De esta forma, la clase queda desacoplada de la creación de dichos objetos y puede trabajar con cualquier implementación que se le proporcione.

### Conceptos practicados

* Dependency Injection.
* Composición de objetos.
* Desacoplamiento entre clases.
* Inyección mediante constructor.

---

## Tecnologías utilizadas

* PHP
* Programación Orientada a Objetos (POO)
* vsCode

---

## Autor

Ejercicios desarrollados como práctica de patrones de diseño en PHP.
