<!DOCTYPE html>
<html lang="es-co">
<head>
<meta charset="utf-8" />
<title>Insertar Usuarios </title>
<meta name="application-name" content="WebColsam"/>
<meta name="author" content="Hector Teran<inghecter@gmail.com>"/>
<meta name='created' content="12/12/2014"/> 
<meta name="last-modified" content="12/12/2014"/>
<meta name="keywords" content="Usuarios"/>
<meta name="description" content="Inserta, actualiza, elimina y consulta datos de la tabla usuarios"/>
<meta name='license' content="http://opensource.org/licenses/gpl-license.php  GNU Public License"/> 
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" href="../img/logo.png" type="image">
<link rel="icon" href="../img/save.png" type="image">
<link rel="stylesheet" href="../css/miestilo.css"/>
</head>
<body>
<header>
  <p>Menu----------------------------------------------</p>
</header>
<main>
<section class="sectionMenu">
<input  type="text"   class="textBuscar"   id="textConsulta"  placeholder="Buscar por c&oacute;digo/nombre de usuario" autofocus/>
<nav>
<button class="buttonBuscar" id="btnUsuarioBuscar">Consultar</button>
<button class="buttonNuevo" id="btnUsuarioInsertar">Nuevo</button>
<button class="buttonLimpiar" id="btnUsuarioLimpiar">Limpiar</button>
</nav>
</section>

<section class="sectionMensaje" id="divMensaje">
<p>
  dasvdhjaklsdasdaskdaskdjka
  hjhjh
</p>
</section>
<section class="sectionInsertar" id="divInsertar">
<form id="frmMiFormulario">
<fieldset >
     <label for="usuariosCodigo">C&oacute;digo </label><br/>
     <input class="txtTexto"   name="usuariosCodigo"  type="text" id="usuariosCodigo" placeholder="Codigo de Usuario" value="" required autofocus /><br />
      <label for="usuariosNombre">Usuario</label><br />
      <input  class="txtTexto"  name="usuariosNombre" type="text" id="usuariosNombre" placeholder="Nombre del Usuario" value="" required  /><br />
	  <label for="usuariosContrasena">Contrase&ntilde;a</label><br />
      <input  class="txtTexto"  name="usuariosContrasena" type="password" id="usuariosContrasena" placeholder="Contrase&ntilde;a del Usuario" value=""  required /><br />
		  <label for="usuariosTipoUsuario">Tipo de Usuario</label><br />
    <select    class="txtTexto"  name="usuariosTipoUsuario" type="text" id="usuariosTipoUsuario" placeholder="Tipo Usuario" required />
  </select>
<br/>	  
<br/>   
   <button  type="submit"  class="botonGuardar" id="btnUsuarioGuardar" data-opcion="insertar" alt="Insertar">Guardar</button>
   <button  type="submit"  class="botonActualizar" id="btnUsuarioActualizar">Actualizar</button>
  </fieldset>
</form>
</section>
<section class="sectionConsulta" id="divConsulta"><p></p></section>
</main>
<aside>
<h4>HRT</h4>
<p>The Epcot Center is a theme park in Disney World, Florida.</p>
</aside>
<footer>
<details>
<summary>&copy; 2014  <abbr title="Colegio San ALberto Magno">COLSAM</abbr>    Todos los derechos reservados.</summary>
<p>Todo el contenido en este sitio Web es propiedad del Colegio San Alberto Magno.</p><address>
<address>
</details>
</footer>

<!-- Inicio de los scriptt obligatorios -->
<script src="../js/misFunciones.js"></script> 
<script src="../js/jquery-2.1.1.min"></script>
<script src="js/usuario.js"></script>
<!-- Fin de los scriptt obligatorios -->
</body>
</html>
