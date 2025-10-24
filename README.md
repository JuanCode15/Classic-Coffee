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

## 🧱 Estructura del Proyecto

Classic-Coffee/
│
├── application/
│   ├── config/       # Configuración general y conexión a la base de datos
│   ├── controller/   # Controladores PHP
│   ├── core/         # Clases base del mini framework MVC
│   ├── model/        # Modelos (consultas SQL)
│   └── view/         # Vistas (archivos .php con HTML)
│
├── public/           # Carpeta pública (inicio del sitio)
│   ├── css/
│   ├── js/
│   ├── img/
│   └── index.php     # Punto de entrada principal
│
└── README.md

---

## 🗄️ Estructura de la Base de Datos

Este proyecto utiliza una base de datos MySQL con las siguientes tablas:

- **tiposdocumentos**
- **roles**
- **personas**
- **usuarios**
- **sugerencias**
- **reservas**

Puedes importar la estructura completa desde el siguiente script SQL:

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


---

## ⚙️ Instalación y ejecución (Laragon o XAMPP)

### 🔹 Opción 1: Usando **Laragon**

1. Copia la carpeta del proyecto dentro de:
   C:\laragon\www\

2. Inicia **Laragon** y arranca los servicios **Apache** y **MySQL**.  
3. Crea una nueva base de datos (por ejemplo `classic_coffee`) desde **phpMyAdmin**.  
4. Importa el archivo `classic_coffee.sql` incluido en el proyecto.  
5. Configura los datos de conexión en:  
   application/config/config.php  
   Ejemplo:

   define('DB_HOST', 'localhost');
   define('DB_NAME', 'classic_coffee');
   define('DB_USER', 'root');
   define('DB_PASS', '');

6. En el navegador visita:  
   👉 http://classic-coffee.test  
   (o http://localhost/classic-coffee si no tienes dominio automático en Laragon)

---

### 🔹 Opción 2: Usando **XAMPP**

1. Copia la carpeta del proyecto dentro de:
   C:\xampp\htdocs\

2. Inicia **Apache** y **MySQL** desde el panel de XAMPP.  
3. Crea una base de datos llamada `classic_coffee` en **phpMyAdmin**.  
4. Importa el script SQL incluido.  
5. Configura las credenciales de conexión en:  
   application/config/config.php  
   Ejemplo:

   define('DB_HOST', 'localhost');
   define('DB_NAME', 'classic_coffee');
   define('DB_USER', 'root');
   define('DB_PASS', '');

6. Abre el proyecto en el navegador:  
   👉 http://localhost/classic-coffee/public

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

