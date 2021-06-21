<aside class="main-sidebar" style="background: #323339;">

    <section class="sidebar">

        <ul class="sidebar-menu">

            <?php

            if($_SESSION["perfil"] == "Super Usuario"){

                echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

            }

            if($_SESSION["perfil"] == "Super Usuario" || $_SESSION["perfil"] == "Técnico de Campo"){

                echo '<li>
                <a href="productos">

                    <i class="fa fa-product-hunt"></i>
                    <span>Trabajo a realizar</span>

                </a>
				

			</li>

			<li>
			   <a href="categorias">

					<i class="fa fa-th"></i>
					<span>Trabajo realizadas</span>

				</a>
			</li>';

            }

            if($_SESSION["perfil"] == "Super Usuario" || $_SESSION["perfil"] == "Cotizador"){

                echo '<li>

				<a href="clientes">

					<i class="fa fa-users"></i>
					<span>Clientes</span>

				</a>

			</li>';

            }

            if($_SESSION["perfil"] == "Super Usuario" || $_SESSION["perfil"] == "Cotizador" || $_SESSION["perfil"] == "Administrativo" ){

                echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Cotización</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="cotizaciones">
							
							<i class="fa fa-circle-o"></i>
							<span>Generar Cotizaci&oacute;n</span>

						</a>

					</li>

					<li>

						<a href="crear-venta">
							
							<i class="fa fa-circle-o"></i>
							<span>Generar Factura</span>

						</a>

					</li>';

                if($_SESSION["perfil"] == "Administrativo" || $_SESSION["perfil"] == "Cotizador" || $_SESSION["perfil"] == "Super Usuario" ){

                    echo '<li>

						<a href="reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reportes</span>

						</a>

					</li>';

                }



                echo '</ul>

			</li>';

            }

            ?>

        </ul>

    </section>

</aside>