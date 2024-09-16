<?php
    //Importar la base de datos
    require 'includes/config/database.php';
    $db = conectarDB();

    //Consultar la base de datos
    $query = "SELECT * FROM propiedades LIMIT $limite";
    //Obtener resultado
    $resultado = mysqli_query($db, $query);

?>

<div class="contenedor-anuncios">
    <?php while($propiedad = mysqli_fetch_assoc($resultado)):?>
            <div class="anuncio">
                    <img src="/imagenes/<?php echo $propiedad['imagen']?>" alt="Casa en venta" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3><?php echo $propiedad['titulo']?></h3>
                    <p><?php echo $propiedad['descripcion']?></p>
                    <p class="precio"><?php echo "$" . $propiedad['precio']?></p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                            <p><?php echo $propiedad['wc']?></p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                            <p><?php echo $propiedad['estacionamiento']?></p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorios" loading="lazy">
                            <p><?php echo $propiedad['habitaciones']?></p>
                        </li>
                    </ul>

                    <a href="anuncio.php?id=<?php echo $propiedad['id']?>" class="boton-amarillo-block">Ver Propiedad</a>
                </div> <!--Contenido -anuncio-->
            </div> <!--Anuncio-->
            <?php endwhile;?>
        </div><!--contenedor-anuncios-->

<?php
    //Liberar memoria del resultado
    mysqli_free_result($resultado);
    //Cerrar la conexión
    mysqli_close($db);
?>