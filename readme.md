<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href=https://github.com/gaganalexa>
    <img src="./assets/img/amg_logo.png" alt="Nyebe" width="130" height="130">
  </a>

  <h3 align="center">AD-Meeting-Calendar</h3>
</div>

<div align="center">
  A PHP app with Docker, PostgreSQL, and MongoDB setup, using `.env` for config, composer for dependencies, and scripts for automated DB reset and seeding.

</div>

<br />

![](https://visit-counter.vercel.app/counter.png?page=gaganalexa/AD-Meeting-Calendar)

[![wakatime](https://wakatime.com/badge/user/443593d2-a49b-4deb-9e6c-bfa25506f1aa/project/0d9751cb-7dc0-42c4-a288-dc01fc66ec96.svg)](https://wakatime.com/badge/user/443593d2-a49b-4deb-9e6c-bfa25506f1aa/project/0d9751cb-7dc0-42c4-a288-dc01fc66ec96)

---

<br />
<br />

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview



Here's a **short overall description** for the entire setup:

---

This project sets up a PHP application with Docker, PostgreSQL, and MongoDB integration. It includes structured steps for configuring environment variables, updating dependencies, designing the database schema, and automating table resets. Tools like `phpdotenv` are used for secure config management, and GUI database managers help verify connections. Automation scripts ensure easy resets and seeders prepare data for testing or development.
.

### Key Components




- Authentication & Authorization
- CRUD Operations for Invetory System

### Technology


#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Databases
![MongoDB](https://img.shields.io/badge/MongoDB-47A248?style=for-the-badge&logo=mongodb&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-336791?style=for-the-badge&logo=postgresql&logoColor=white)


## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Accoun.util.php                   |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-ProjectName
└─ assets
|   └─ css
|   |   └─ name.css
|   └─ img
|   |   └─ name.jpeg/.jpg/.webp/.png
|   └─ js
|       └─ name.js
└─ components
|   └─ name.component.php
|   └─ templates
|      └─ name.component.php
└─ handlers
|   └─ name.handler.php
└─ layout
|   └─ name.layout.php
└─ pages
|  └─ pageName
|     └─ assets
|     |  └─ css
|     |  |  └─ name.css
|     |  └─ img
|     |  |  └─ name.jpeg/.jpg/.webp/.png
|     |  └─ js
|     |     └─ name.js
|     └─ index.php
└─ staticData
|  └─ name.staticdata.php
└─ utils
|   └─ name.utils.php
└─ vendor
└─ .gitignore
└─ bootstrap.php
└─ composer.json
└─ composer.lock
└─ index.php
└─ readme.md
└─ router.php
```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

