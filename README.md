English | [Español](README.es.md)

# Lex & Asociados — Law Firm Web Application

![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)

Responsive full-stack web application for a law firm (*Lex & Asociados*). It combines a modern public website with user registration, authentication and **role-based access** (client, lawyer and super admin), backed by a MySQL database managed through PHP.

## Table of contents

- [Features](#features)
- [User roles](#user-roles)
- [Pages](#pages)
- [Tech stack](#tech-stack)
- [Design](#design)
- [Getting started](#getting-started)
- [Project structure](#project-structure)
- [Author](#author)

## Features

- Responsive layout (mobile, tablet and desktop) built with Bootstrap 5.
- Public pages: firm presentation, legal services by practice area, legal news blog and contact page.
- Contact form and embedded Google Maps location.
- User registration and login with role-based access.
- Super admin panel to create, edit and delete users (CRUD) stored in MySQL.

## User roles

| Role | Description |
|---|---|
| **Client** | Registers and signs in to use the platform as a client of the firm. |
| **Lawyer** | Account type for the firm's legal team. |
| **Super admin** | Full privileges: manages the database and can create, edit and delete users. |

## Pages

| Page | File | Content |
|---|---|---|
| Home | `index.html` | Featured services, why choose us, testimonials and contact form |
| About us | `nosotros.html` | Mission, vision and values of the team |
| Services | `servicios.html` | Detailed list of legal specializations |
| Contact | `contacto.html` | Contact form and Google Maps location |
| Blog | `blog.html` | Legal news and articles |
| Login | `login.html` | User sign-in |
| Register | `registrarse.html` | New user registration |
| Client dashboard | `clienteDashboard.html` | Area for users with the client role |
| Lawyer dashboard | `abogadoDashboard.html` | Area for users with the lawyer role |
| View cases / clients | `verCasos.html`, `verClientes.html` | Case and client views |
| User management | `crudUser.html`, `crearUsuario.html`, `listarUsuarios.html`, `actUsuario.html`, `eliminarUsuario.html` | Super admin screens to create, list, update and delete users |

## Tech stack

| Layer | Technology |
|---|---|
| Structure | HTML5 |
| Styling | CSS3, Bootstrap 5 (responsive grid and components) |
| Backend | PHP |
| Database | MySQL |
| Local environment | XAMPP (Apache + MySQL) |
| Typography | Google Fonts (Open Sans) |
| Maps | Google Maps Embed |

## Design

A neutral color palette conveys professionalism and trust:

| Role | Color | Hex |
|---|---|---|
| Primary | Charcoal gray | `#2C2C2C` |
| Secondary | Light gray | `#E0E1DD` |
| Neutral | White | `#FFFFFF` |
| Accent (text and buttons) | Light brown | `#C19A6B` |

## Getting started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP)
- Git

### Run locally

1. Clone the repository into XAMPP's `htdocs` folder:

   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/Bryan-1918/webabogados.git
   ```

2. Open the XAMPP Control Panel and start **Apache** and **MySQL**.
3. Open `http://localhost/phpmyadmin`, create a database (use the name set in the PHP connection file in `php/`) and import the script from the `database/` folder (`usuarios.sql`).
4. Check that the database credentials in the PHP connection file match your local setup.
5. Visit `http://localhost/webabogados` in your browser.

## Project structure

```
.
├── index.html, nosotros.html, servicios.html,
│   contacto.html, blog.html                 # Public pages
├── login.html, registrarse.html             # Authentication
├── clienteDashboard.html                    # Client dashboard
├── abogadoDashboard.html                    # Lawyer dashboard
├── crudUser.html, crearUsuario.html,
│   listarUsuarios.html, actUsuario.html,
│   eliminarUsuario.html                     # User management (super admin)
├── verCasos.html, verClientes.html          # Case and client views
├── clientes.php
├── php/                                     # Backend scripts
├── database/                                # Database script
├── assets/                                  # CSS, images and static resources
└── README.md
```

## Author

**Bryan Steven Ruiz Hernández**
[LinkedIn](https://www.linkedin.com/in/bryan-ruiz-hernandez/) · [GitHub](https://github.com/Bryan-1918)
