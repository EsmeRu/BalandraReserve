<?php
require_once '../includes/head.php';
?>
<header class="principal">
    <?php require_once '../includes/nav.php';?>
    <div class="header-content">
        <h1>Bienvenido</h1>
        <p>La playa de Balandra en Baja California Sur está llena de 
            fabulosos senderos que puedes recorrer. Para visitar este símbolo 
            de la ciudad de La Paz registrate o inicia
            sesión y reserva tu lugar.</p>
        <button id="SignIn" class="btn">Registrate</button>
    </div>
</header>

<main class="serch-form">
        <form class="flex-container serch-form-content">
            <div class="element-form">
                <label for="date">Fecha</label>
                <input type="date" name="date" id="date">
            </div>
            <div class="element-form">
                <label for="time">Hora de llegada</label>
                <input type="time" name="time" id="time" min="12:00" max="18:00">
            </div>
            <div class="element-form">
                <label for="time">Hora de salida</label>
                <input type="time" name="time" id="time" min="12:00" max="18:00">
            </div>
            <div class="element-form">
                <label for="nroAuto">Nro. de vehículos</label>
                <input type="number" name="nroAuto" id="nroAuto" min="0" value="1">
            </div>
            <div class="element-form">
                <label for="opciones">Tipo de vehículo</label>
                    <select id="opciones">
                        <option value="" disabled selected> --Seleccione-- </option>
                        <option value="auto">Automóvil</option>
                        <option value="camioneta">Camioneta</option>
                        <option value="Moto">Motocicleta</option>
                    </select>
            </div>
            <span style="width: 8rem;"></span>
            <button id="search" type="submit">BUSCAR</button>
        </form>
    </main>

    <section class="flex-container infoPage-container">
        <div class="infoImagePage">
            <img src="../../img/tabla.jpg" alt="">
            <img src="../../img/palapa.jpg" alt="">
        </div>
        <div class="infoPage-content">
            <hr class="line">
            <h4><strong>Apartado</strong></h4>
            <h1>Información</h1>
            <div class="infoPage">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Est, quia quisquam inventore qui enim error tempora odio 
                    asperiores illum iste dicta in repellat animi illo impedit
                    iure minus totam nobis?</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Est, quia quisquam inventore qui enim error tempora odio 
                    asperiores illum iste dicta in repellat animi illo impedit
                    iure minus totam nobis?</p>
                <button class="btn btn-golden">Nosotros</button>
            </div> 
        </div>
    </section>
    <?php require_once '../includes/footer.php';?>