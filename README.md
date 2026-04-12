# ☕ Classic Coffee

**Classic Coffee** es una aplicación web desarrollada en **PHP (MVC)** con base de datos **MySQL**, pensada para la gestión de reservas y administración de un café.  
Permite realizar y gestionar reservas, registrar usuarios, recibir sugerencias de clientes y administrar el personal desde un panel de control.

---

## 🚀 Características principales

- Sistema **MVC (Modelo - Vista - Controlador)** en PHP.
- Base de datos relacional en **MySQL**.
- Módulo de **autenticación de usuarios** (login).
- Gestión completa de **reservas**:
  - Crear, editar, eliminar y cambiar estado.
- **Buzón de sugerencias** para clientes.
- Panel de **administrador**:
  - CRUD de usuarios/trabajadores.
  - Control del estado de las reservas.
- Alertas interactivas con **JSAlert (JavaScript)**.
- Interfaz amigable basada en plantilla HTML gratuita (adaptada y personalizada).

---



## 🗄️ Estructura de la Base de Datos y Usuario demo

Puedes importar la estructura completa desde el siguiente script SQL.  
Además se incluye un **usuario demo** para login rápido.

```sql
CREATE DATABASE IF NOT EXISTS framework CHARACTER SET utf8 COLLATE utf8_general_ci;
USE framework;

CREATE TABLE IF NOT EXISTS tiposdocumentos (
    idTipoDocumento INT(11) NOT NULL AUTO_INCREMENT,
    Descripcion VARCHAR(50) NOT NULL,
    PRIMARY KEY (idTipoDocumento)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO tiposdocumentos (Descripcion) VALUES
('Cédula de Ciudadanía'),
('Cédula de Extranjería'),
('Pasaporte'),
('NIT'),
('Tarjeta de Identidad'),
('Registro Civil');

CREATE TABLE IF NOT EXISTS roles (
    idRol INT(11) NOT NULL AUTO_INCREMENT,
    Descripcion VARCHAR(50) NOT NULL,
    Estado INT(1) NOT NULL DEFAULT 1,
    PRIMARY KEY (idRol)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO roles (Descripcion, Estado) VALUES
('Administrador', 1),
('Cliente', 1),
('Mesero', 1),
('Cajero', 1);

CREATE TABLE IF NOT EXISTS personas (
    idPersona INT(11) NOT NULL AUTO_INCREMENT,
    Documento VARCHAR(20) NOT NULL,
    Nombres VARCHAR(100) NOT NULL,
    Apellidos VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Telefono VARCHAR(20) DEFAULT NULL,
    Direccion VARCHAR(150) DEFAULT NULL,
    Genero VARCHAR(10) DEFAULT NULL,
    FechaNacimiento DATE DEFAULT NULL,
    idTipoDocumento INT(11) NOT NULL,
    PRIMARY KEY (idPersona),
    FOREIGN KEY (idTipoDocumento) REFERENCES tiposdocumentos(idTipoDocumento)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS usuarios (
    idUsuario INT(11) NOT NULL AUTO_INCREMENT,
    idPersona INT(11) NOT NULL,
    Usuario VARCHAR(50) NOT NULL,
    Clave VARCHAR(255) NOT NULL,
    idRol INT(11) NOT NULL,
    Estado INT(1) NOT NULL DEFAULT 1,
    PRIMARY KEY (idUsuario),
    FOREIGN KEY (idPersona) REFERENCES personas(idPersona) ON DELETE CASCADE,
    FOREIGN KEY (idRol) REFERENCES roles(idRol),
    UNIQUE KEY unique_usuario (Usuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS reservas (
    idReserva INT(11) NOT NULL AUTO_INCREMENT,
    nomCompleto VARCHAR(150) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    cantidad INT(3) NOT NULL,
    sede VARCHAR(100) NOT NULL,
    Mesa VARCHAR(20) NOT NULL,
    EstadoR INT(1) NOT NULL DEFAULT 1,
    PRIMARY KEY (idReserva)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS sugerencias (
    id INT(11) NOT NULL AUTO_INCREMENT,
    yourname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    fechaRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS song (
    id INT(11) NOT NULL AUTO_INCREMENT,
    artist VARCHAR(255) NOT NULL,
    track VARCHAR(255) NOT NULL,
    link VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO personas (Documento, Nombres, Apellidos, Email, Telefono, Direccion, Genero, FechaNacimiento, idTipoDocumento) 
VALUES ('1234567890', 'Administrador', 'Sistema', 'admin@classiccoffee.com', '3001234567', 'Calle Principal 123', 'Masculino', '1990-01-01', 1);

INSERT INTO usuarios (idPersona, Usuario, Clave, idRol, Estado) 
VALUES (1, 'admin', 'admin123', 1, 1);;
```

---

## ⚙️ Instalación y ejecución (Laragon )

1. Copia la carpeta del proyecto dentro de:
   C:\laragon\www\

2. Inicia **Laragon** y arranca los servicios **Apache** y **MySQL**.  

3. En el navegador visita:  
   👉 http://classic-coffee.test  
   (o http://localhost/classic-coffee si no tienes dominio automático en Laragon)

---

## 🧰 Tecnologías utilizadas

| Tecnología | Descripción |
|-------------|-------------|
| **PHP** | Lenguaje principal del backend, implementando el patrón MVC. |
| **MySQL** | Sistema de gestión de base de datos relacional. |
| **HTML5** | Estructura y contenido de las vistas. |
| **CSS** | Diseño y estilos del sitio. |
| **JavaScript** | Interactividad y alertas dinámicas (JSAlert). |
| **Laragon / XAMPP** | Entorno local de desarrollo. |

