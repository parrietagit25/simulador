<?php 
      include_once 'clases/controladores.php';
      $autos_id_instance = new Simulacion();
      $autos_id = $autos_id_instance->DatosUnidadId($_POST['id_auto_primera']);
      $autos_id_vendidos = $autos_id_instance->DatosUnidadIdVendida($_POST['id_auto_primera']);

      /*echo '<pre>';
      echo var_dump($_POST);
      echo '</pre>';
      echo '###################################################################################'; */
    if (isset($_POST['tabla']) && $_POST['tabla'] ==1) {

        foreach ($autos_id as $key => $value) { 
            /*
            echo '<pre>';
            echo var_dump($value);
            echo '</pre>';
            */
            $meses = $value['Meses'];
            $modelo = $value['Modelo'];
            $kilometraje = number_format($value['Kilometraje'], 0, '', ',');
            $costoVehiculo = number_format($value['CostoVehiculo'], 2, '.', ',');
            $diasRental = $value['DiasRental'];

            $tipo_venta = $value['TipoCompra'];
            $dias_fs = $value['DiasFS'];

            $ingresosAlquiler = number_format($value['TotaldeIngresos'], 2, '.', ',');
            $ingresosVtaAuto = number_format($value['IngresosVtaAuto'], 2, '.', '');
            $suma_total_ingreso = number_format($value['TotaldeIngresos'] + $value['IngresosVtaAuto'], 2, '.', '');
            $margenRetornoMensual = number_format($value['MargenRetornoMensual'], 2, '.', '');
            $diasFS = number_format($value['DiasFS'], 2, '.', '');
            $otrosCostos = number_format($value['OtrosCostos'], 2, '.', '');
            $totalCostos = number_format($value['TOTALCOSTOS'], 2, '.', '');
            $intereses = number_format($value['Intereses'], 2, '.', '');
            $seguro = number_format($value['Seguro'], 2, '.', '');
            $depreciacionAcumulada = number_format($value['DEPRECIACIONACUMULADA'], 2, '.', '');
            $gastoAdmon = number_format($value['GastoAdmon'], 2, '.', '');
            $total_costos_gastos = number_format($value['OtrosCostos'] + $value['TOTALCOSTOS'] + $value['Intereses'] + $value['Seguro'] + $value['DEPRECIACIONACUMULADA'] + $value['GastoAdmon'], 2, '.', '');
            $contribucionContable = number_format($value['ContribucionContable'], 2, '.', '');
            $precioVenta = number_format($value['PRECIOVENTA'], 2, '.', '');
            $totalContribucionContable = number_format($value['TotalContribucionContable'], 2, '.', '');
            $margenRetorno = number_format($value['MargenRetorno'], 2, '.', '');
            
            ?>

            <table class="table">
                <tr>
                    <td>Meses Flota</td>
                    <td><?php echo $meses; ?></td>
                </tr>
                <tr>
                    <td>Modelo</td>
                    <td><?php echo $modelo; ?></td>
                </tr>
                <tr>
                    <td>KM</td>
                    <td><?php echo $kilometraje; ?></td>
                </tr>
                <tr>
                    <td>Costo auto</td>
                    <td><?php echo '$ '.$costoVehiculo; ?></td>
                </tr>
                <tr>
                    <td>Dias Rental</td>
                    <td><?php echo $diasRental; ?></td>
                </tr>

                <tr>
                    <td>Tipo Venta</td>
                    <td><?php echo $tipo_venta; ?></td>
                </tr>
                <tr>
                    <td>Dias FS</td>
                    <td><?php echo $dias_fs; ?></td>
                </tr>

                <tr>
                    <td>Ingresos</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ingreso alquiler</td>
                    <td><?php echo '$ '.$ingresosAlquiler; ?></td>
                </tr>
                <tr>
                    <td>Otros ingresos</td>
                    <td><?php echo '$ '.$ingresosVtaAuto; ?></td>
                </tr>
                <tr>
                    <td>Total Ingreso</td>
                    <td><?php echo '<b>'.'$ '.$suma_total_ingreso.'</b>'; ?></td>
                </tr>
                <tr>
                    <td>Revenue Mensual</td>
                    <td><?php echo $margenRetornoMensual; ?></td>
                </tr>
                <tr>
                    <td>Revenue Per Day</td>
                    <td><?php echo $diasFS; ?></td>
                </tr>

                <tr>
                    <td>Costos / Otros</td>
                    <td><?php echo $otrosCostos; ?></td>
                </tr>
                <tr>
                    <td>Total Costos</td>
                    <td><?php echo $totalCostos; ?></td>
                </tr>
                <tr>
                    <td>Intereses</td>
                    <td><?php echo $intereses; ?></td>
                </tr>
                <tr>
                    <td>Seguro</td>
                    <td><?php echo $seguro; ?></td>
                </tr>
                <tr>
                    <td>Depreciacion</td>
                    <td><?php echo $depreciacionAcumulada; ?></td>
                </tr>
                <tr>
                    <td>Gasto Administrativos</td>
                    <td><?php echo $gastoAdmon; ?></td>
                </tr>
                <tr>
                    <td>Total costo y gastos</td>
                    <td><?php echo '<b>'.$total_costos_gastos.'</b>'; ?></td>
                </tr>

                <tr>
                    <td>Contrib. Contable Neta</td>
                    <td><input type="text" class="from-control" id="cont_con_net" readonly value="<?php echo $contribucionContable; ?>"></td>
                </tr>
                <tr>
                    <td>Precio Venta Estimado</td>
                    <td><input id="t1_pr_ven" onkeyup="simulacion_bi_ficha()" value="<?php echo $precioVenta; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Total Contribu. Contable Estimado</td>
                    <td><?php echo $totalContribucionContable; ?></td>
                </tr>
                <tr>
                    <td>% Margen Retorno Inversión Estimado</td>
                    <td><?php echo $margenRetorno; ?></td>
                </tr>
                <tr>
                    <td>% Margen Retorno Mensual Estimado (MRM)</td>
                    <td><?php echo $margenRetornoMensual; ?></td>
                </tr>
            </table>
    <?php } 
    
    }elseif (isset($_POST['tabla']) && $_POST['tabla'] ==2) {
    
        foreach ($autos_id as $key => $value) { 

            /* 
            echo '<pre>';
            echo var_dump($value);
            echo '</pre>';*/
            
            
            $total_costos_gastos = $value['OtrosCostos'] + $value['TOTALCOSTOS'] + $value['Intereses'] + $value['Seguro'] + $value['DEPRECIACIONACUMULADA'] + $value['GastoAdmon'];
            $margen_retorno_inversion = $value['MargenRetorno'] * $value['MargenRetornoMensual'];
            $totoal_contribucion = $margen_retorno_inversion*$value['CostoVehiculo'];
            $contri_contable_neta = $totoal_contribucion - $value['PRECIOVENTA'];
            $ingreso_alquiler = $contri_contable_neta + $total_costos_gastos;
            $total_ingresos = $ingreso_alquiler + $value['IngresosVtaAuto'];
            $revenue_mensual = $ingreso_alquiler / $value['Meses']; 
            $revenue_per_day = $total_ingresos / $value['DiasRental'];

            ?>

            <table class="table">
                <tr>
                    <td>Meses Flota</td><!-- H9 -->
                    <td><input id="t2_meses_flota" class="form-control" readonly type="text" value="<?php echo $value['Meses']; ?>"></td>
                </tr>
                <tr>
                    <td>Modelo</td>
                    <td><?php echo $value['Modelo']; ?></td>
                </tr>
                <tr>
                    <td>KM</td>
                    <td><?php echo $value['Kilometraje']; ?></td>
                </tr>
                <tr>
                    <td>Costo auto</td>
                    <td><input type="text" value="<?php echo number_format($value['CostoVehiculo'], 2, '.', ''); ?>" class="form-control" id="t2_costo_auto"></td>
                </tr>
                <tr>
                    <td>Dias Rental</td>
                    <td><input id="t2_dias_rental" class="form-control" readonly type="text" value="<?php echo $value['DiasRental']; ?>"></td>
                </tr>

                <tr>
                    <td>Ingresos</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ingreso alquiler</td>
                    <td><input id="t2_ingreso_alquiler" class="form-control" readonly type="text" value="<?php echo number_format($value['IngresosAlquiler'], 2, '.', ''); //number_format($ingreso_alquiler, 2, '.', ''); ?>" ></td>
                </tr>
                <tr>
                    <td>Otros ingresos</td>
                    <td><input id="t2_otros_ingresos" class="form-control" readonly type="text" value="<?php echo number_format($value['IngresosVtaAuto'], 2, '.', ''); ?>" ></td>
                </tr>
                <tr>
                    <td>Total Ingreso</td>
                    <?php $suma_total_ingreso = $value['IngresosAlquiler'] + $value['IngresosVtaAuto']; ?>
                    <td><input id="t2_total_ingresos" class="form-control" readonly type="text" value="<?php echo number_format($suma_total_ingreso, 2, '.', ''); ?>" ></td>
                </tr>
                <tr>
                    <td>Revenue Mensual</td>
                    <td><input id="t2_revenue_mensual" class="form-control" readonly type="text" value="<?php echo number_format($value['MargenRetornoMensual'], 2, '.', ''); //number_format($revenue_mensual, 2, '.', ''); ?>" ></td>
                </tr>
                <tr>
                    <td>Revenue Per Day</td>
                    <td><input id="t2_revenue_per_day" class="form-control" readonly type="text" value="<?php echo number_format($value['DiasFS'], 2, '.', ''); ?>" ></td>
                </tr>

                <tr>
                    <td>Costos / Otros</td>
                    <td><?php echo number_format($value['OtrosCostos'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Total Costos</td>
                    <td><?php echo number_format($value['TOTALCOSTOS'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Intereses</td>
                    <td><?php echo number_format($value['Intereses'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Seguro</td>
                    <td><?php echo number_format($value['Seguro'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Depreciacion</td>
                    <td><?php echo number_format($value['DEPRECIACIONACUMULADA'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Gasto Administrativos</td>
                    <td><?php echo number_format($value['GastoAdmon'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Total costo y gastos</td><!-- H29 -->
                    <?php $total_costos_gastos = $value['OtrosCostos'] + $value['TOTALCOSTOS'] + $value['Intereses'] + $value['Seguro'] + $value['DEPRECIACIONACUMULADA'] + $value['GastoAdmon']; ?>
                    <?php $total_costos_gastos = number_format($total_costos_gastos, 2, '.', '');  ?>
                    <td><input readonly id="t2_total_cos_gast" value="<?php echo $total_costos_gastos; ?>" class="form-control"></td>
                </tr>

                <tr>
                    <td>Contrib. Contable Neta</td>
                    <td><input readonly id="t2_cont_con_net" value="<?php echo number_format($value['ContribucionContable'], 2, '.', '');  ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Precio Venta Estimado</td>
                    <td><input readonly id="t2_pr_ven" value="<?php echo number_format($value['PRECIOVENTA'], 2, '.', ''); ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Total Contribu. Contable Estimado</td>
                    <td><input readonly value="<?php echo number_format($value['TotalContribucionContable'], 2, '.', ''); ?>" id="t2_cont_con_est" class="form-control"> </td>
                </tr>
                <tr>
                    <td>% Margen Retorno Inversión Estimado</td>
                    <td><input readonly type="text" id="t2_margen_retorno_inversion" value="<?php echo number_format($margen_retorno_inversion, 2, '.', ''); ?>" class="form-control" ></td>
                </tr>
                <tr>
                    <td>% Margen Retorno Mensual Estimado (MRM)</td>
                    <td><input type="text" id="t2_margen_retorno_mensual" value="<?php echo number_format($value['MargenRetornoMensual'], 2, '.', ''); ?>" class="form-control" onkeyup="margen_retorno()"></td>
                </tr>
            </table>
    <?php } 

    }elseif (isset($_POST['tabla']) && $_POST['tabla'] ==3) {
    
        foreach ($autos_id as $key => $value) { ?>

            <?php $total_costos_gastos = $value['OtrosCostos'] + $value['TOTALCOSTOS'] + $value['Intereses'] + $value['Seguro'] + $value['DEPRECIACIONACUMULADA'] + $value['GastoAdmon']; ?>

            <table class="table">
                <tr>
                    <td>Meses Flota</td><!-- K9 -->
                    <td><input id="t3_meses_flota" onkeyup="meses_flota()" class="form-control" type="text" value="<?php echo $value['Meses']; ?>"></td>
                </tr>
                <tr>
                    <td>Modelo</td>
                    <td><?php echo $value['Modelo']; ?></td>
                </tr>
                <tr>
                    <td>KM</td>
                    <td><?php echo $value['Kilometraje']; ?></td>
                </tr>
                <tr>
                    <td>Costo auto</td>
                    <td><?php echo number_format($value['CostoVehiculo'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Precio Flota Actual</td> <!-- K13 -->
                    <td><input id="t3_precio_flota_actual" class="form-control" type="text" value="0" onkeyup="k13()"></td>
                </tr>
                <tr>
                    <td>Dias Rental</td> <!-- K14 -->
                    <td><input id="t3_dias_rental" class="form-control" readonly type="text" value="<?php echo $value['DiasRental']; ?>"></td>
                </tr>

                <tr>
                    <td>Ingresos</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ingreso alquiler</td><!-- K17 -->
                    <td><input id="t3_ingreso_alquiler" class="form-control" readonly type="text" value="<?php echo $value['IngresosAlquiler']; ?>"></td>
                </tr>

                <tr>
                    <td>Otros ingresos</td>
                    <td><input id="t3_otro_ingreso" class="form-control" readonly type="text" value="0"></td>
                </tr>
                <?php $suma_total_ingreso = $value['IngresosAlquiler'] + $value['IngresosVtaAuto']; ?>
                <tr>
                    <td>Total Ingreso</td><!-- K19 -->
                    <?php $suma_total_ingreso = $value['IngresosAlquiler'] + $value['IngresosVtaAuto']; ?>
                    <td><input id="t3_total_ingresos" class="form-control" readonly type="text" value="<?php echo number_format($suma_total_ingreso, 2, '.', ''); ?>" ></td>
                </tr>
                <tr>
                    <td>Revenue Mensual</td><!-- K21 -->
                    <td><input onkeyup="k21()" id="t3_revenue_mensual" class="form-control" type="text" value="<?php echo number_format($value['MargenRetornoMensual'], 2, '.', ''); ?>" ></td>
                </tr>
                <tr>
                    <td>Revenue Per Day</td>
                    <td><?php echo $value['DiasFS']; ?></td>
                </tr>

                <tr>
                    <td>Costos / Otros</td>
                    <td><?php echo number_format($value['OtrosCostos'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Total Costos</td>
                    <td><?php echo number_format($value['TOTALCOSTOS'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Intereses</td>
                    <td><?php echo number_format($value['Intereses'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Seguro</td>
                    <td><?php echo number_format($value['Seguro'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Depreciacion</td>
                    <td><?php echo number_format($value['DEPRECIACIONACUMULADA'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Gasto Administrativos</td>
                    <td><?php echo number_format($value['GastoAdmon'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Accesorios</td><!-- K30 -->
                    <td><input onkeyup="k30()" id="t3_accesorios" value="0" class="form-control"></td>
                </tr>
                <tr>
                    <td>Total costo y gastos</td><!-- K31 -->
                    <td><input readonly id="t3_total_cos_gast" value="<?php echo $total_costos_gastos; ?>" class="form-control"></td>
                </tr>

                <tr>
                    <td>Contrib. Contable Neta</td><!-- K33 -->
                    <td><input readonly id="t3_cont_con_net" value="<?php echo number_format($value['ContribucionContable'], 2, '.', '');  ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Precio Venta Estimado</td><!-- K35 -->
                    <td><input onkeyup="k35()" id="t3_estimado_precio_venta" value="<?php echo $value['PRECIOVENTA']; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Total Contribu. Contable Estimado</td><!-- K37 -->
                    <td><input readonly id="t3_cont_con_est" value="<?php echo $value['TotalContribucionContable']; ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>% Margen Retorno Inversión Estimado</td><!-- K39 -->
                    <td><input readonly type="text" id="t3_margen_retorno_inversion" value="<?php echo number_format($value['MargenRetorno'], 2, '.', ''); ?>" class="form-control" ></td>
                </tr>
                <tr>
                    <td>% Margen Retorno Mensual Estimado (MRM)</td><!-- K41 -->
                    <td><input readonly type="text" id="t3_margen_retorno_mensual_estimado" value="<?php echo $value['MargenRetornoMensual']; ?>" class="form-control" ></td>
                </tr>
            </table>
    <?php } 

    }elseif (isset($_POST['tabla']) && $_POST['tabla'] ==4) {
    
        foreach ($autos_id_vendidos as $key => $value) { ?>

            <?php $total_costos_gastos = $value['OtrosCostos'] + $value['TOTALCOSTOS'] + $value['Intereses'] + $value['Seguro'] + $value['DEPRECIACIONACUMULADA'] + $value['GastoAdmon']; ?>

            <table class="table">
                <tr>
                    <td>Meses Flota</td><!-- K9 -->
                    <td><?php echo $value['Meses']; ?></td>
                </tr>
                <tr>
                    <td>Modelo</td>
                    <td><?php echo $value['Modelo']; ?></td>
                </tr>
                <tr>
                    <td>KM</td>
                    <td><?php echo $value['Kilometraje']; ?></td>
                </tr>
                <tr>
                    <td>Costo auto</td>
                    <td><?php echo number_format($value['CostoVehiculo'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Precio Flota Actual</td> <!-- K13 -->
                    <td></td>
                </tr>
                <tr>
                    <td>Dias Rental</td> <!-- K14 -->
                    <td><?php echo $value['DiasRental']; ?></td>
                </tr>

                <tr>
                    <td>Ingresos</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ingreso alquiler</td><!-- K17 -->
                    <td><?php echo $value['IngresosAlquiler']; ?></td>
                </tr>

                <tr>
                    <td>Otros ingresos</td>
                    <td></td>
                </tr>
                <?php $suma_total_ingreso = $value['IngresosAlquiler'] + $value['IngresosVtaAuto']; ?>
                <tr>
                    <td>Total Ingreso</td><!-- K19 -->
                    <?php $suma_total_ingreso = $value['IngresosAlquiler'] + $value['IngresosVtaAuto']; ?>
                    <td><?php echo number_format($suma_total_ingreso, 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Revenue Mensual</td><!-- K21 -->
                    <td><?php echo number_format($value['MargenRetornoMensual'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Revenue Per Day</td>
                    <td><?php echo $value['DiasFS']; ?></td>
                </tr>

                <tr>
                    <td>Costos / Otros</td>
                    <td><?php echo number_format($value['OtrosCostos'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Total Costos</td>
                    <td><?php echo number_format($value['TOTALCOSTOS'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Intereses</td>
                    <td><?php echo number_format($value['Intereses'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Seguro</td>
                    <td><?php echo number_format($value['Seguro'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Depreciacion</td>
                    <td><?php echo number_format($value['DEPRECIACIONACUMULADA'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Gasto Administrativos</td>
                    <td><?php echo number_format($value['GastoAdmon'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>Accesorios</td><!-- K30 -->
                    <td></td>
                </tr>
                <tr>
                    <td>Total costo y gastos</td><!-- K31 -->
                    <td><?php echo $total_costos_gastos; ?>></td>
                </tr>

                <tr>
                    <td>Contrib. Contable Neta</td><!-- K33 -->
                    <td><?php echo number_format($value['ContribucionContable'], 2, '.', '');  ?></td>
                </tr>
                <tr>
                    <td>Precio Venta Estimado</td><!-- K35 -->
                    <td><?php echo $value['PRECIOVENTA']; ?></td>
                </tr>
                <tr>
                    <td>Total Contribu. Contable Estimado</td><!-- K37 -->
                    <td><?php echo $value['TotalContribucionContable']; ?></td>
                </tr>
                <tr>
                    <td>% Margen Retorno Inversión Estimado</td><!-- K39 -->
                    <td><?php echo number_format($value['MargenRetorno'], 2, '.', ''); ?></td>
                </tr>
                <tr>
                    <td>% Margen Retorno Mensual Estimado (MRM)</td><!-- K41 -->
                    <td><?php echo $value['MargenRetornoMensual']; ?></td>
                </tr>
            </table>
    <?php } 

    }

    ?>