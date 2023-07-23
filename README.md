# Gym Managment System

<br>
<p>PHP based managment system for Gym</p>

## Pages

The website was created for the needs of a fictional restaurant. It consists of dynamic .php pages that provide useful informations to website users. Website contains protection against SQL injection attacks.

## Styles

Styles are written using CSS Modules. `assets/styles.css` is, as you guessed, a global CSS file injected on every page.

## Modules

The website contains an `assets/includes/store-hours.php` file that contains settings for dynamically defining restaurant opening hours. 

## Project structure

```
project/
├── assets/
│   ├── img/
│   ├── includes/
│   │   ├── arrays.php   // dinamic arrays for php pages (navigacion etc.)
│   │   ├── copyright.php  
│   │	├── footer.php
│   │	├── header.php
│   │	├── nav.php
│   │	└── store-hours.php //restaurant opening hours dinamic system
│   ├── syntaxhighlighter/
│   └── styles.css
├── index.php
├── team.php
├── menu.php
├── dish.php
└── contact.php
```
