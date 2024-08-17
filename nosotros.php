<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor">
        <h1>Conoce sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Sobre nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>
                    Bienes Raices es una empresa dedicada a la venta de bienes raíces en todo el país. Contamos con
                    amplia experiencia en el mercado inmobiliario, ofreciendo productos y servicios de calidad.

                    25 años de experiencia en la construcción y venta de casas, apartamentos, locales comerciales y
                    edificios.
                    Nuestros clientes son personas físicas y jurídicas, ofreciendo un atención personalizada y
                    confiable.
                    Nuestro objetivo es satisfacer sus necesidades y garantizar un excelente servicio de alta calidad.
                    Contamos con una amplia red de asesores profesionales y expertos en el mercado inmobiliario, que
                    están a tu disposición para ofrecerle el mejor servicio y garantizar la excelencia en su compra y
                    venta de bienes raíces.
                    Si estás buscando un inmueble en venta o alquiler, no dudes en contactar con nosotros a través de
                    nuestro formulario de contacto o llamando al número que aparece en la página principal.


                </p>
            </div>

        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Vero, quam laudantium officia sapiente libero hic aut voluptas consequatur quas porro officiis
                    fugiat,
                    nesciunt, enim inventore consequuntur quis provident exercitationem commodi.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Vero, quam laudantium officia sapiente libero hic aut voluptas consequatur quas porro officiis
                    fugiat,
                    nesciunt, enim inventore consequuntur quis provident exercitationem commodi.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Vero, quam laudantium officia sapiente libero hic aut voluptas consequatur quas porro officiis
                    fugiat,
                    nesciunt, enim inventore consequuntur quis provident exercitationem commodi.</p>
            </div>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?>