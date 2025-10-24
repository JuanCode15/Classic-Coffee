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
-- Crear base de datos para el proyecto
CREATE DATABASE framework;

-- Tablas

CREATE TABLE tiposdocumentos (
  idTipoDocumento INT AUTO_INCREMENT PRIMARY KEY,
  Descripcion VARCHAR(15) DEFAULT NULL
);

CREATE TABLE roles (
  idRol INT AUTO_INCREMENT PRIMARY KEY,
  Descripcion VARCHAR(20) NOT NULL,
  Estado TINYINT(1) DEFAULT 1
);

CREATE TABLE personas (
  idPersona INT AUTO_INCREMENT PRIMARY KEY,
  Nombres VARCHAR(100),
  Apellidos VARCHAR(100),
  idTipoDocumento INT,
  NumeroDocumento VARCHAR(30),
  FOREIGN KEY (idTipoDocumento) REFERENCES tiposdocumentos(idTipoDocumento)
);

CREATE TABLE usuarios (
  idUsuario INT AUTO_INCREMENT PRIMARY KEY,
  Usuario VARCHAR(50),
  Clave VARCHAR(100),
  idPersona INT,
  idRol INT,
  Estado TINYINT(1) DEFAULT 1,
  idTipoDocumento INT,
  FOREIGN KEY (idPersona) REFERENCES personas(idPersona),
  FOREIGN KEY (idRol) REFERENCES roles(idRol),
  FOREIGN KEY (idTipoDocumento) REFERENCES tiposdocumentos(idTipoDocumento)
);

CREATE TABLE sugerencias (
  idSugerencia INT AUTO_INCREMENT PRIMARY KEY,
  Descripcion TEXT,
  Fecha DATE,
  idUsuario INT,
  FOREIGN KEY (idUsuario) REFERENCES usuarios(idUsuario)
);

CREATE TABLE reservas (
  idReserva INT AUTO_INCREMENT PRIMARY KEY,
  FechaReserva DATE,
  Hora TIME,
  CantidadPersonas INT,
  idUsuario INT,
  FOREIGN KEY (idUsuario) REFERENCES usuarios(idUsuario)
);

-- Datos demo para login

-- Tipo de documento
INSERT INTO tiposdocumentos (idTipoDocumento, Descripcion)
VALUES (1, 'DNI');

-- Rol administrador
INSERT INTO roles (idRol, Descripcion, Estado)
VALUES (1, 'Administrador', 1);

-- Persona asociada al usuario
INSERT INTO personas (idPersona, Nombres, Apellidos, idTipoDocumento, NumeroDocumento)
VALUES (1, 'Admin', 'Classic', 1, '00000000');

-- Usuario demo (contraseña en texto plano PARA DEMO: 'admin123')
INSERT INTO usuarios (idUsuario, Usuario, Clave, idPersona, idRol, Estado, idTipoDocumento)
VALUES (1, 'admin', 'admin123', 1, 1, 1, 1);
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

