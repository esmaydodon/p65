<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
<!--


-->
 
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
   <script src="js/ccvalidate.js"></script>
 <!-- <link rel="stylesheet" href="/resources/demos/style.css" />-->
  <script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  
  </script>
<script type="text/javascript">
$(document).ready(function(){
var left = parseInt( $(document).width()) - parseInt( $('#demo-side-bar').outerWidth()) - 146;
$('#demo-side-bar').css({'left': left +'px',display:'block'});

$('.cc-container').ccvalidate({ onvalidate: function(isValid) {
                if (!isValid) {
                    alert('Incorrect Credit Card format');
                    return false;
                }
            }
            });
});
</script>
  
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/ccvalidate.css" />

</head>

<body>

<div class="container">
  <div class="header"><a href="#"><img src="" alt="Insertar logotipo aquí" name="Insert_logo" width="180" height="90" id="Insert_logo" style="background: #C6D580; display:block;" /></a> 
    <!-- end .header --></div>
 <div id="accordion">
  <h3>Usuarios</h3>
  <div>
    
<ul class="nav">
      <li><a href="usuario.php"> Registrar Usuarios</a></li>
       <li><a href="#"> Usuarios Programas sociales</a></li>
      <li><a href="#"> Aurotidadeds</a></li>
      <li><a href="#"> Comision</a></li>
      </ul>
    
  </div>
  <h3>Ubicasion</h3>
  <div>
<ul class="nav">
      <li><a href="#"> Departamento</a></li>
       <li><a href="#">Provincia</a></li>
       <li><a href="#">Centro Poblado</a></li>
       <li><a href="#">Caserio</a></li>
      </ul>
  </div>
  <h3>Programas Sociales</h3>
  <div>
  <ul class="nav">
      <li><a href="#"> Pensio 65</a></li>
       <li><a href="#">Beca 18</a></li>
       <li><a href="#">SIS</a></li>
      </ul>
     
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictu.
    </p>
    <p>
    Suspe
    </p>
  </div>
    <ul class="nav">

            <li><a href="#"> Reportes</a></li>
       <li><a href="#"> Reportes Usuarios</a></li>
       <li><a href="#"> Reportes Usuarios - Programas Sociales</a></li>
       <li><a href="#"> Reportes Usuarios, Progamas soaiales, por Centros poblados</a></li>
       <li><a href="#">Reportes Usuarios, Progamas soaiales, por Caserios</a></li> 
    </ul>
</div>
  <div class="sidebar1">
    <p> Resumen Usuarios Enviados</p>
    <!-- end .sidebar1 -->
    
    </div>

  <div class="content">
   
     
     <div class="eightcol last">

    <!-- Begin Form -->

<div class="cc-contents">
                    <table cellpadding="4" cellspacing="0">
                        <tbody><tr>
                            <td style="width: 97px">
                                <label>
                                    Card Type</label>
                            </td>
                            <td style="width: 270px">&nbsp;</td>
                        </tr>
             
                   
                    
                    </tbody></table>
                
                    <table>
                    <tbody>
                    <form name="form1" method="post" action="">
                      <p>
                        <label for="nombre_usuario">Nombre</label>
                        <input type="text" name="cPerNombres" id="cPerNombres_txt">
                      </p>
                      <p>
                        <label for="apellido_usuario">Apellido</label>
                        <input type="text" name="cPerApellidos" id="cPerApellidos_txt">
                      </p>
                      <p>
                        <label for="apellido_usuario">DNI</label>
                        <input type="text" name="nPerDNI" id="nPerDNI_txt">
                      </p>
                  
                      <p>
                        <label for="dPerNacimiento">dPerNacimiento</label>
                        <input type="text" name="dPerNacimiento" id="dPerNacimiento_txt">
                      </p>
                      <p>
                        <label for="nDepaCodigo">dPerNacimiento</label>
                        <input type="text" name="nDepaCodigo" id="nDepaCodigo_txt">
                      </p>
                      <p>
                        <label for="nDepaCodigo">nProvCodigo</label>
                        <input type="text" name="nProvCodigo" id="nProvCodigo_txt">
                      </p>
                      <p>
                        <label for="nDisCodigo">nDisCodigo</label>
                        <input type="text" name="nDisCodigo" id="nDisCodigo_txt">
                      </p>
                      <p>
                        <label for="nCPCodigo">nCPCodigo</label>
                        <input type="text" name="nCPCodigo" id="nCPCodigo_txt">
                      </p>
                        <p>Caserio  
                        <label for="nCPCodigo">nCasCodigo</label>
                        <input type="text" name="nCasCodigo" id="nCasCodigo_txt">
                      </p>
                      <p>
                      <p>
                        <label for="cPerDireccion">Direccion</label>
                      <input type="text" name="cPerDireccion" id="cPerDireccion_txt">
                                                   
                      </p>
                      <p>
                        <label for="cPerReferencia">Referencia</label>
                      <input type="text" name="cPerReferencia" id="cPerReferencia_txt">
                                                   
                      </p>
                      <p><label for="cPerReferencia">Estados</label>
                          <div id="estados" >
                               
                                   <br>En Lista <input type="checkbox" id="bPerLista" name="bPerLista" value="1" />
                       <br>Enviado <input type="checkbox" id="bPerEnviado" name="bPerEnviado" value="1" />
                        <br>                  RecibePago <input type="checkbox" id="bPerRecibePago" name="bPerRecibePago" value="1" />         
                           <br>               bPerObservado <input type="checkbox" id="bPerObservado" name="bPerObservado" value="1" />  
                          </div>       
                      </p>
                    </form>
                    </tbody>
                        </table>
</div>
 <h1>Instrucciones</h1>
    <p>Tenga en cuenta que la CSS para estos diseños cuenta con numerosos comentarios. Si realiza la mayor parte de su trabajo en la vista Diseño, eche un vistazo al código para obtener sugerencias sobre cómo trabajar con la CSS para diseños fijos. Puede quitar estos comentarios antes de lanzar el sitio. Para obtener más información sobre las técnicas usadas en estos diseños CSS, lea este artículo en el Centro de desarrolladores de Adobe: <a href="http://www.adobe.com/go/adc_css_layouts">http://www.adobe.com/go/adc_css_layouts</a>.</p>
 
    <!-- End Form -->

  </div>
    <!-- end .content --></div>
	
  <div class="footer">
    <p>Este .footer contiene la declaración position:relative; para dar a Internet Explorer 6 hasLayout para .footer y provocar que se borre correctamente. Si no es necesario proporcionar compatibilidad con IE6, puede quitarlo.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
 
</body>
</html>