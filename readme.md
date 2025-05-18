<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/zyx-0314/">
  <!-- TODO: If you want to add logo or banner you can add it here -->
    <img src="./assets/img/masterball.png" alt="Masterball" width="150" height="150">
  </a>
<!-- TODO: Change Title to the name of the title of your Project -->
  <h3 align="center">AD-Task2</h3>
</div>
<!-- TODO: Make a short description -->
<div align="center">
  A web-based Pokémon Starter Dex that allows users to explore starter Pokémon across all generations, filter by type, and view organized card-style information.
</div>

<br />

<!-- TODO: Change the zyx-0314 into your github username  -->
<!-- TODO: Change the WD-Template-Project into the same name of your folder -->

![](https://visit-counter.vercel.app/counter.png?page=Clive-04/AD-CI4-Template-Project)

[![wakatime](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8.svg)](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8)

---

<br />
<br />

<!-- TODO: If you want to add more layers for your readme -->
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

<!-- TODO: To be changed -->
<!-- The following are just sample -->

A simple, responsive Pokémon Starter Dex built with PHP, HTML, and CSS. Users can explore starter Pokémon by generation, filter by type (Grass, Fire, Water), and enjoy a clean UI inspired by modern design standards.

### Key Components

<!-- TODO: List of Key Components -->
<!-- The following are just sample -->

- Dynamic Generation Grouping
- Type Filtering (Grass, Fire, Water)
- Reusable Navbar & Footer Components
- Grid Layout with CSS for Starter Cards

### Technology

<!-- TODO: List of Technology Used -->
#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

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

## Resources

<!-- TODO: Add References -->

| Title        | Purpose                                                                       | Link          |
| ------------ | ----------------------------------------------------------------------------- | ------------- |
| MDN Web Docs | HTML/CSS/JS reference | https://developer.mozilla.org |
| GitHub Docs | Git and GitHub best practices | https://docs.github.com |
| Pokemon API | Reference for Pokémon data | https://pokeapi.co |
| Pokemon Images | Reference for Pokemon Images | https://art.pixilart.com/bbe680e9dccf15e.png https://www.pinclipart.com/picdir/big/185-1853222_pokemon-fire-red-charmander-sprite-clipart.png https://www.pngkey.com/png/full/439-4399737_squirtle-pokemon-squirtle-sprite.png https://art.pixilart.com/sr2912c5ddfd5cf.png https://64.media.tumblr.com/8d0487116374ff60e90737c84061136c/tumblr_prfb61O2D01y8n9fro2_1280.png https://64.media.tumblr.com/dab83664f4a894573ca1af8f643f260a/tumblr_pv67cl6o5Y1y8n9fro2_1280.png https://art.pixilart.com/e80249cec539531.png https://www.shatteredlight.wiki/assets/images/pokemon/front/TORCHIC.png https://i.pinimg.com/originals/04/2f/c6/042fc603cc2dc033303c288ae4577b49.png https://th.bing.com/th/id/R.781ca7ef6156a20b00bbcf4bb6081a0d?rik=oQdpWP5qxheA7g&riu=http%3a%2f%2fpixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com%2fimage%2f538033ba66d0423.png&ehk=rBuETtBQlhieMpjq7dPYlQ0P8pgOQawx2qdXxSo113M%3d&risl=&pid=ImgRaw&r=0 https://th.bing.com/th/id/OIP.pIZ9a98Gw_UadbsJrEJtJQAAAA?cb=iwp2&rs=1&pid=ImgDetMain https://i.pinimg.com/736x/4f/aa/80/4faa80b8683bfbb1bb14700b2283aecf.jpg https://th.bing.com/th/id/OIP.55q0NztSoye1-y0t6JSWlAHaHF?cb=iwp2&rs=1&pid=ImgDetMain https://th.bing.com/th/id/OIP.1tizU9g5pC_zUT6T-GbhOQHaIz?cb=iwp2&rs=1&pid=ImgDetMain https://th.bing.com/th/id/R.c34334717b75e75c1fe6e4475a161193?rik=fwLCS40Y5dIQgQ&riu=http%3a%2f%2fpixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com%2fimage%2f854978fded0e849.png&ehk=1XTRXRBh0NY%2b8aiEpQt6kf8G1pfrQWLKpDI5FxUsttw%3d&risl=&pid=ImgRaw&r=0 https://wallpapercave.com/wp/wp8155277.png https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c861d306-8f42-4864-ab2e-61a271518c8a/df3czl0-481707bd-7c8e-4402-b8d1-e364deef6b8a.png/v1/fill/w_1280,h_1281,strp/master_ball_by_ace_zeroartic_df3czl0-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTI4MSIsInBhdGgiOiJcL2ZcL2M4NjFkMzA2LThmNDItNDg2NC1hYjJlLTYxYTI3MTUxOGM4YVwvZGYzY3psMC00ODE3MDdiZC03YzhlLTQ0MDItYjhkMS1lMzY0ZGVlZjZiOGEucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.mB7nC5evG50D-LlXYayrWD0mhD1sCSuo-UkhsDLvIp4 |
