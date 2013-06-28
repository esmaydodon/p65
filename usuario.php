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
    <h1>Instrucciones</h1>
    <p>Tenga en cuenta que la CSS para estos diseños cuenta con numerosos comentarios. Si realiza la mayor parte de su trabajo en la vista Diseño, eche un vistazo al código para obtener sugerencias sobre cómo trabajar con la CSS para diseños fijos. Puede quitar estos comentarios antes de lanzar el sitio. Para obtener más información sobre las técnicas usadas en estos diseños CSS, lea este artículo en el Centro de desarrolladores de Adobe: <a href="http://www.adobe.com/go/adc_css_layouts">http://www.adobe.com/go/adc_css_layouts</a>.</p>
    <h2>Método de borrado</h2>
    <p>Dado que todas las columnas son flotantes, este diseño usa una declaración clear:both en la regla .footer. Esta técnica de borrado fuerza a .container a conocer dónde terminan las columnas con el fin de mostrar cualquier borde o color de fondo que coloque en .container. Si su diseño exige la eliminación de .footer de .container, deberá usar un método de borrado diferente. El más fiable consiste en añadir una &lt;br class=&quot;clearfloat&quot; /&gt; o &lt;div  class=&quot;clearfloat&quot;&gt;&lt;/div&gt; tras la última columna flotante (pero antes de que se cierre .container). Esto proporcionará el mismo efecto de borrado.</p>
    <h3>Sustitución de logotipo</h3>
    <p>Se ha utilizado un marcador de posición de imagen en el .header de este diseño, en el que lo más probable es que desee colocar un logotipo. Se recomienda quitar el marcador de posición y reemplazarlo por su propio logotipo vinculado. </p>
    <p> Tenga en cuenta que si utiliza el inspector de propiedades para navegar hasta la imagen de su logotipo empleando el campo Origen (en lugar de quitar y reemplazar el marcador de posición), deberá quitar el fondo en línea y mostrar las propiedades. Estos estilos en línea sólo se utilizan para hacer que el marcador de posición del logotipo aparezca en los navegadores para fines de demostración. </p>
    <p>Para quitar los estilos en línea, asegúrese de que el panel Estilos CSS está configurado como Actual. Seleccione la imagen y, en la sección Propiedades del panel Estilos CSS, haga clic con el botón derecho del ratón y elimine las propiedades de visualización y de fondo. (Por supuesto que siempre podrá ir directamente al código y eliminar allí los estilos en línea de la imagen o el marcador de posición.)</p>
    <h4>Fondos</h4>
    <p>Por naturaleza, el color de fondo de cualquier div sólo se muestra a lo largo del contenido. Esto significa que si está usando un color de fondo o un borde para crear el aspecto de una columna lateral, éste no se extenderá hasta el pie de página, sino que se detendrá donde termine el contenido. Si la div de .content siempre va a incluir más contenido, puede colocar un borde en la div de .content para separarla de la columna.</p>
    
     
     <div class="eightcol last">

    <!-- Begin Form -->

<div class="cc-contents">
                    <table cellpadding="4" cellspacing="0">
                        <tbody><tr>
                            <td style="width: 97px">
                                <label>
                                    Card Type</label>
                            </td>
                            <td style="width: 270px">
                                <div class="cc-ddl">
                                    <div class="cc-ddl-o">
                                        <select id="cc-types" class="cc-ddl-type">
                                            <option value="mcd">Master Card</option>
                                            <option value="vis">Visa Card</option>
                                            <option value="amx">American Express</option>
                                            <option value="dnr">Diner Club</option>
                                            <option value="dis">Discover</option>
                                        </select>
                                    </div>
                                    <div class="cc-ddl-header">
                                        <div class="cc-ddl-title">Master Card</div>
                                    </div>
                                    <div class="cc-ddl-contents" style="display: none;">
                                        <a href="javascript:return void(0)">Master Card</a> <a href="javascript:return void(0)">
                                            Visa Card</a> <a href="javascript:return void(0)">American Express</a> <a href="javascript:return void(0)">
                                                Diners Club</a> <a href="javascript:return void(0)">Discover</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Card Number</label>
                            </td>
                            <td>
                                <input type="text" id="card-number" class="large cc-card-number">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Expires on</label>
                            </td>
                            <td>
                                <div class="cc-ddl" style="width: 110px; float: left;">
                                    <div class="cc-ddl-o">
                                        <select id="cc-month">
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                    <div class="cc-ddl-header">
                                        <div class="cc-ddl-title">
                                                            October</div>
                                    </div>
                                    <div class="cc-ddl-contents" style="width: 108px; display: none;">
                                        <a href="javascript:return void(0)">January</a> <a href="javascript:return void(0)">
                                            February</a> <a href="javascript:return void(0)">March</a> <a href="javascript:return void(0)">
                                                April</a> <a href="javascript:return void(0)">May</a> <a href="javascript:return void(0)">
                                                    June</a> <a href="javascript:return void(0)">July</a> <a href="javascript:return void(0)">
                                                        August</a> <a href="javascript:return void(0)">September</a> <a href="javascript:return void(0)">
                                                            October</a> <a href="javascript:return void(0)">November</a>
                                        <a href="javascript:return void(0)">December</a>
                                    </div>
                                </div>
                                <div class="cc-ddl" style="width: 80px; float: left; margin-left: 4px;">
                                    <div class="cc-ddl-o">
                                        <select id="Select1">
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                        </select>
                                    </div>
                                    <div class="cc-ddl-header">
                                        <div class="cc-ddl-title">2013</div>
                                    </div>
                                    <div class="cc-ddl-contents" style="width: 78px; display: none;">
                                        <a href="javascript:return void(0)">2011</a> <a href="javascript:return void(0)">2012</a>
                                        <a href="javascript:return void(0)">2013</a> <a href="javascript:return void(0)">2014</a>
                                        <a href="javascript:return void(0)">2015</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    CVV</label>
                            </td>
                            <td>
                                <input type="text" class="small">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                <input type="submit" value="Checkout" class="cc-checkout" id="check-out">
                            </td>
                        </tr>
                    </tbody></table>
                </div>

    <!-- End Form -->

  </div>
    <!-- end .content --></div>
	
  <div class="footer">
    <p>Este .footer contiene la declaración position:relative; para dar a Internet Explorer 6 hasLayout para .footer y provocar que se borre correctamente. Si no es necesario proporcionar compatibilidad con IE6, puede quitarlo.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
 
</body>
</html>