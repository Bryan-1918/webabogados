[English](README.md) | Español

# Lex & Asociados — Aplicación web para bufete de abogados

![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)

Aplicación web full stack y responsiva para un bufete de abogados (*Lex & Asociados*). Combina un sitio público moderno con registro de usuarios, autenticación y **acceso por roles** (cliente, abogado y super admin), respaldada por una base de datos MySQL gestionada con PHP.

## Tabla de contenido

- [Funcionalidades](#funcionalidades)
- [Roles de usuario](#roles-de-usuario)
- [Páginas](#páginas)
- [Tecnologías](#tecnologías)
- [Diseño](#diseño)
- [Primeros pasos](#primeros-pasos)
- [Estructura del proyecto](#estructura-del-proyecto)
- [Autor](#autor)

## Funcionalidades

- Diseño responsivo (móvil, tablet y escritorio) con Bootstrap 5.
- Páginas públicas: presentación del despacho, servicios por rama del derecho, blog de noticias jurídicas y contacto.
- Formulario de contacto y ubicación con Google Maps.
- Registro de usuarios e inicio de sesión con acceso por roles.
- Panel de super admin para crear, editar y eliminar usuarios (CRUD) almacenados en MySQL.

## Roles de usuario

| Rol | Descripción |
|---|---|
| **Cliente** | Se registra e inicia sesión para usar la plataforma como cliente del despacho. |
| **Abogado** | Tipo de cuenta para el equipo jurídico del despacho. |
| **Super admin** | Todos los privilegios: gestiona la base de datos y puede crear, editar y eliminar usuarios. |

## Páginas

| Página | Archivo | Contenido |
|---|---|---|
| Inicio | `index.html` | Servicios destacados, por qué elegirnos, testimonios y formulario de contacto |
| Nosotros | `nosotros.html` | Misión, visión y valores del equipo |
| Servicios | `servicios.html` | Listado detallado de especializaciones jurídicas |
| Contacto | `contacto.html` | Formulario de contacto y ubicación en Google Maps |
| Blog | `blog.html` | Noticias y artículos jurídicos |
| Login | `login.html` | Inicio de sesión de usuarios |
| Registro | `registrarse.html` | Registro de nuevos usuarios |
| Panel de cliente | `clienteDashboard.html` | Área para usuarios con rol de cliente |
| Panel de abogado | `abogadoDashboard.html` | Área para usuarios con rol de abogado |
| Ver casos / clientes | `verCasos.html`, `verClientes.html` | Vistas de casos y clientes |
| Gestión de usuarios | `crudUser.html`, `crearUsuario.html`, `listarUsuarios.html`, `actUsuario.html`, `eliminarUsuario.html` | Pantallas del super admin para crear, listar, actualizar y eliminar usuarios |

## Tecnologías

| Capa | Tecnología |
|---|---|
| Estructura | HTML5 |
| Estilos | CSS3, Bootstrap 5 (grilla y componentes responsivos) |
| Backend | PHP |
| Base de datos | MySQL |
| Entorno local | XAMPP (Apache + MySQL) |
| Tipografía | Google Fonts (Open Sans) |
| Mapas | Google Maps Embed |

## Diseño

Una paleta de colores neutros transmite seriedad y confianza:

| Uso | Color | Hex |
|---|---|---|
| Principal | Gris carbón | `#2C2C2C` |
| Secundario | Gris claro | `#E0E1DD` |
| Neutral | Blanco | `#FFFFFF` |
| Acento (textos y botones) | Marrón claro | `#C19A6B` |

## Primeros pasos

### Requisitos previos

- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP)
- Git

### Ejecución local

1. Clona el repositorio dentro de la carpeta `htdocs` de XAMPP:

   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/Bryan-1918/webabogados.git
   ```

2. Abre el Panel de Control de XAMPP e inicia **Apache** y **MySQL**.
3. Entra a `http://localhost/phpmyadmin`, crea una base de datos (usa el nombre definido en el archivo PHP de conexión en `php/`) e importa el script de la carpeta `database/` (`schema.sql`).
4. Verifica que las credenciales de la base de datos en el archivo PHP de conexión coincidan con tu configuración local.
5. Visita `http://localhost/webabogados` en tu navegador.

## Estructura del proyecto

```
.
├── index.html, nosotros.html, servicios.html,
│   contacto.html, blog.html                 # Páginas públicas
├── login.html, registrarse.html             # Autenticación
├── clienteDashboard.html                    # Panel de cliente
├── abogadoDashboard.html                    # Panel de abogado
├── crudUser.html, crearUsuario.html,
│   listarUsuarios.html, actUsuario.html,
│   eliminarUsuario.html                     # Gestión de usuarios (super admin)
├── verCasos.html, verClientes.html          # Vistas de casos y clientes
├── clientes.php
├── php/                                     # Scripts del backend
├── database/                                # Script de la base de datos
├── assets/                                  # CSS, imágenes y recursos estáticos
└── README.md
```

## Autor

**Bryan Steven Ruiz Hernández**
[LinkedIn](https://www.linkedin.com/in/bryan-ruiz-hernandez/) · [GitHub](https://github.com/Bryan-1918)
