<?php
    //Importar la base de datos
    require 'includes/config/database.php';
    $db = conectarDB();

    //Consultar la base de datos
    $query = "SELECT * FROM propiedades";

    //Obtener resultado
    $resultado = mysqli_query($db, $query);

?>

<div class="contenedor-anuncios">
    <?php while($propiedad = mysqli_fetch_assoc($resultado)):?>
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img src="build/img/anuncio3.jpg" alt="Casa en venta" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa en el lago con excelente vista. acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorios" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.php" class="boton-amarillo-block">Ver Propiedad</a>
                </div> <!--Contenido -anuncio-->
            </div> <!--Anuncio-->
            <?php endwhile;?>
        </div><!--contenedor-anuncios-->