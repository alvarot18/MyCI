<?php

/*
 * Este Helper es el encargado de ejecutar las acciones necesarias al inicio de la aplicación como lo son la definición
 * de constantes, carda de Helpers, Libraries y demas.
 * 
 * @author Jose Wilson Capera Castaño <josewilsoncc@hotmail.com>
 * @date 2014/12/29
 */

//Instancia de CodeIgniter (this)
$ci = & get_instance();

//Carga de Helpers de CI
$ci->load->helper(array(
  'form',
  'html',
  'url'
));

//Carga de libraries de CI
$ci->load->library(array(
  'form_validation'
));

//Carga de drivers de CI
$ci->load->driver(array(
  'session'
));

//Carga de Helpers de My CI
$ci->load->helper(array(
  'assets',
  'essential',
  'elements'
));

//Carga de Models de My CI
$ci->load->model(array(
  'basic_model'
));

/*
 * Todas las constantes de My CI siguen el siguiente patron 'MC*_*' donde los Astericos representan cualquier combinación
 * de caracteres, antes del guión bajo solo pueden ir ciertas combinaciones estandar que se explican a continuación.
 * 
 * Prefijos de las constantes:
 * 
 * 'MC_' Constante basica de My CI: Son constantes para ser usadas frecuentemente por el usuario de MY CI.
 * 
 * 'MCP_' Constante de posición de parametro: Son constantes que representan la posición de un parametro en un arreglo,
 * son usadas como KEY en un array de parametros.
 * 
 * 'MCI_' Constante Interna: Son constantes para desarrollo interno del framework, representan valores especificos.
 * 
 * 'MCU_' Constante de URI Interna: Establecen o contienen rutas por defecto a nivel de desarrollo interno.
 * 
 * @author Jose Wilson Capera Castaño - josewilsoncc@hotmail.com
 */

/**
 * Representa un asset del tipo JavaScript
 * @const JavaScript
 */
define('MC_JS', 'js');

/**
 * Representa un asset del tipo CSS
 * @const  Cascading Style Sheets
 */
define('MC_CSS', 'css');

/**
 * Representa un asset del tipo LESS
 * @const  LESS CSS
 */
define('MC_LESS', 'less');

/**
 * Numero maximo de filas:
 * En consultas de relevancia (con carga cosiderable a el sistema), su proposito es evitar que el sistema tarde mucho en
 * retornar un conjunto de tuplas, se usa para validar.
 * @const Maximun Number Of Rows
 */
define('MC_MNOR', 5000);

/**
 * Solo retorno:
 * Representa el parametro de solo retorno
 * @cosnt Only Return (My CI Param)
 */
define('MCP_OR', 'only_return');

/**
 * Ruta:
 * Usada en metodos como js_controller para indicar se desea la ruta a través del only return.
 * @const Route
 */
define('MCI_R', 'route');

/**
 * Falso: Ruta:
 * Usada en metodos como js_controller para indicar se desea la ruta a través del only return sin retornar.
 * @const Route False
 */
define('MCI_RF', 'route_false');

/**
 * Ruta sin Base Url:
 * Usada en metodos como js_controller para indicar que una ruta no requiere la url base.
 * @const Route Without Base Url
 */
define('MCI_RWBU', 'route_without_base_url');

/**
 * Falso: Ruta sin Base Url:
 * Usada en metodos como js_controller para indicar que una ruta no requiere la url base. Indicando un valor adicional
 * de falso, por ejemplo este valor se utiliza en el parametro only_return para indicar que no sera solo retornada sino
 * que sera impresa automaticamente con un echo.
 * @const Route Without Base Url _ False
 */
define('MCI_RWBU_F', 'false:route_without_base_url');

/**
 * URI Elements Helper:
 * Abrevia la URI con una constante a la hora de cargar assets ligados a Elements Helper.
 * @const URI Helper Elements
 */
define('MCU_HE', 'default/helper/elements/');