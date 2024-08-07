<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta junto al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="Imagen de la propiedad" loading="lazy">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento"
                        loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorios" loading="lazy">
                    <p>4</p>
                </li>
            </ul>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, exercitationem molestiae neque suscipit, cupiditate in quisquam quo iure nobis repudiandae dicta. Aut iusto ratione atque et veritatis amet quis obcaecati.
                Culpa, repellendus voluptatum alias ea tempore nemo accusamus, quos autem quo fugit. Quo, quidem!
                Quisquam, cumque? Consequatur, quia? Voluptatibus, repellendus, quia, consequuntur, delectus perspiciatis
                voluptatum voluptas vel, aperiam, laudantium, vitae, et expedita autem non eveniet labore!
                Minus, illum repellendus. Officia, consequatur? Quisquam, corporis? Asperiores, quia?
                Quisquam, quo? Consequatur, quia? Voluptatibus, repellendus, quia, consequuntur, delectus perspiciatis
                voluptatum voluptas vel, aperiam, laudantium, vitae, et expedita autem non eveniet labore!

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sequi et, ea eveniet recusandae nesciunt nostrum accusantium molestiae repellat a libero, reprehenderit nulla, maxime dolores neque! Unde, quibusdam cum! Earum!
                Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum! Earum!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sequi et, ea eveniet recusandae nesciunt nostrum accusantium molestiae repellat a libero, reprehenderit nulla, maxime dolores neque! Unde, quibusdam cum! Earum!
            </p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>