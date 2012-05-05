<?php
#---------------------------------------# 
#               Whatcore                #
#---------------------------------------#
#       ¡Content Management System!     #
#---------------------------------------#

// Definicion de el Sistema


#---------------------------------------------
# Archivos Nesesarios para iniciar el Sistema
#---------------------------------------------

require('Whatdata().php');

#---------------------------------------------
# Envios de Cabezera [ Header ]
#---------------------------------------------

header('X-Powered-By: Whatcore CMS');

#------------------------------------------
# Inicio de Conexiones [ MYSQL ]
#------------------------------------------

mysql_connect("$Connect_Host", "$Connect_Username", "$Connect_Password") or die(require('/Templates/Houston.php')); mysql_select_db("$Connect_Basedatos") or die(require('/Templates/Houston.php'));

#------------------------------------------
# Filtros de seguridad 
#------------------------------------------

#------------------------------------------
# Funciondes de Seguridad
#------------------------------------------

#------------------------------------------
# Generacion de Ticket SSO
#------------------------------------------

#------------------------------------------
# Variables internas de el sistema
#------------------------------------------
$title_errors = "Whatcore CMS ~ Sistema de errores";
?>

