<?php include("head.php"); ?>


<div class="page">

    <section class="boto">
        <button class="regresar" onclick="back()"><i class="fa-solid fa-arrow-left"></i></button>
        <script type="text/javascript">
            function back() {
                history.back();
            }
        </script>
    </section>


    <br><br>


    <div id="historia">
        <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
                <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">

                    <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                        <div class="box-width-lg-470">
                            <h3>Parque Gonzalo Chávez</h3>
                            <!-- Bootstrap tabs-->
                            <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                                <!-- Nav tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item" role="presentation"></li>


                                </ul>
                                <!-- Tab panes-->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs-7-1">
                                        <p style="font-size: 18px;text-align: justify;">Este parque ubicado en el barrio Gonzales Chávez, se encuentra al frente del
                                            cementerio laureles de la paz, este parque prácticamente nuevo, cuenta con variedad de juegos para los niños, y espacios agradables para pasarlo en familia.
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center wow fadeInUp">
                        <a href="../PaginaComentarios.php?img=anconcito/imagenes/anconcito/0074_parque_gonzalo.jpg">
                            <img style="width: 590px; height: 385px;;" src="imagenes/anconcito/0074_parque_gonzalo.jpg" id="parque gonzalo chavez" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <br>


</div>

<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<?php include("footer.php");  ?>