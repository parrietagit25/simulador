<?php include_once 'clases/controladores.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <div class=" text-left" style="border: solid 1px #df3232; padding:20px; width:100%;">
        <div class="row">

            <div class="col-4" style="border: solid 1px #df3232; padding:20px;">
                <label for="">Unidad</label>
                <select style="color:black !important" class="form-control autos" id="select2-input" onchange="seleccionar_auto()">
                    <option value="">Seleccionar</option>
                    <?php 
                    
                    $todos_autos_instance = new Simulacion();
                    $autos = $todos_autos_instance->TodasUnidades();

                    /* echo '<pre>';
                    var_dump($todos_autos);
                    echo '</pre>'; */
                    
                    foreach ($autos as $key => $value) { ?>
                        
                        <option value="<?php echo $value['Unidad']; ?>" style="color:black !important"><?php echo $value['Unidad']; ?></option>

                   <?php } ?>
                </select>
                <br>
                <h2>Simulación BI Ficha</h2>
                <div class="primera">
                    <table class="table">
                        <tr>
                            <td>Meses Flota</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Modelo</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>KM</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Costo auto</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Costo auto con Impuestos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Dias Rental</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tipo Venta</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Dias FS</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Ingresos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Ingreso alquiler</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Otros ingresos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Ingreso</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Revenue Mensual</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Revenue Per Day</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Costos / Otros</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Costos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Intereses</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Seguro</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Depreciacion</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gasto Administrativos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total costo y gastos</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Contrib. Contable Neta</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Precio Venta Estimado</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Contribu. Contable Estimado</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>% Margen Retorno Inversión Estimado</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>% Margen Retorno Mensual Estimado (MRM)</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-4" style="border: solid 1px #df3232; padding:20px;">
                <label for="">Estado</label>
                <br>
                <h2>Simulación Ingreso por Alquiler</h2>
                <div class="segunda">
                    <table class="table">
                        <tr>
                            <td>Meses Flota</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Modelo</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>KM</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Costo auto</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Costo auto con Impuestos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Dias Rental</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tipo Venta</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Dias FS</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Ingresos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Ingreso alquiler</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Otros ingresos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Ingreso</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Revenue Mensual</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Revenue Per Day</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Costos / Otros</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Costos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Intereses</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Seguro</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Depreciacion</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gasto Administrativos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total costo y gastos</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Contrib. Contable Neta</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Precio Venta Estimado</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Contribu. Contable Estimado</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>% Margen Retorno Inversión Estimado</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>% Margen Retorno Mensual Estimado (MRM)</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-4" style="border: solid 1px #df3232; padding:20px;">
                <label for="">Estado</label>
                <br>
                
                <h2>Simulación Múltiple</h2>
                <div class="tercera">
                    <table class="table">
                        <tr>
                            <td>Meses Flota</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Modelo</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>KM</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Costo auto</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Costo auto con impuesto</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Precio Flota Actual</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Dias Rental</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Dias FS</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Ingresos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Ingreso alquiler</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Otros ingresos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Ingreso</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Revenue Mensual</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Revenue Per Day</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Costos / Otros</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Costos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Intereses</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Seguro</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Depreciacion</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gasto Administrativos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Accesorios</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total costo y gastos</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Contrib. Contable Neta</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Precio Venta Estimado</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Contribu. Contable Estimado</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>% Margen Retorno Inversión Estimado</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>% Margen Retorno Mensual Estimado (MRM)</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-4" style="border: solid 1px #df3232; padding:20px;">
                <label for="">Unidad</label>
                <select style="color:black !important" class="form-control autos" id="select2-input" onchange="seleccionar_auto_historico()">
                    <option value="">Seleccionar</option>
                    <?php 
                    $todos_autos_instance = new Simulacion();
                    $autos = $todos_autos_instance->TodasUnidadesVendidas();
                    foreach ($autos as $key => $value) { ?>
                        <option value="<?php echo $value['Unidad']; ?>" style="color:black !important"><?php echo $value['Unidad']; ?></option>
                   <?php } ?>
                </select>
                <br>
                <h2>Histórico PCR</h2>
                <div class="tercera">
                    <table class="table">
                        <tr>
                            <td>Meses Flota</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Modelo</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>KM</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Costo auto</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Costo auto con impuesto</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Dias Rental</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Fecha de Venta</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Ingreso alquiler</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Otros ingresos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Ingreso</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Revenue Mensual</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Revenue Per Day</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Costos / Otros</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Costos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Intereses</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Seguro</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Depreciacion</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gasto Administrativos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total costo y gastos</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Contrib. Contable Neta</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Precio Venta</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Total Contribu. Contable Estimado</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>% Margen Retorno Inversión Estimado</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>% Margen Retorno Mensual Estimado (MRM)</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#select2-input').select2({
                placeholder: 'Seleccione una opción',
                allowClear: true
            });
        });

        async function seleccionar_auto() {

            let id_auto_primera = document.querySelector(".autos").value;
            
            try {
                const formData1 = new FormData();
                formData1.append('id_auto_primera', id_auto_primera);
                formData1.append('tabla', 1);

                const response1 = await fetch('datos.php', {
                    method: 'POST',
                    body: formData1
                });
                if (!response1.ok) {
                    throw new Error('Error en la respuesta del servidor para la primera petición');
                }
                const data1 = await response1.text();
                document.querySelector(".primera").innerHTML = data1;
            } catch (error) {
                console.error('Error en la primera petición:', error.message);
            }

            // Segunda petición
            try {
                const formData1 = new FormData();
                formData1.append('id_auto_primera', id_auto_primera);
                formData1.append('tabla', 2);
                const response2 = await fetch('datos.php', {
                    method: 'POST',
                    body: formData1
                });
                if (!response2.ok) {
                    throw new Error('Error en la respuesta del servidor para la segunda petición');
                }
                const data2 = await response2.text();
                document.querySelector(".segunda").innerHTML = data2;
            } catch (error) {
                console.error('Error en la segunda petición:', error.message);
            }

            // tercera petición
            try {
                const formData1 = new FormData();
                formData1.append('id_auto_primera', id_auto_primera);
                formData1.append('tabla', 3);
                const response2 = await fetch('datos.php', {
                    method: 'POST',
                    body: formData1
                });
                if (!response2.ok) {
                    throw new Error('Error en la respuesta del servidor para la segunda petición');
                }
                const data2 = await response2.text();
                document.querySelector(".tercera").innerHTML = data2;
            } catch (error) {
                console.error('Error en la segunda petición:', error.message);
            }
        }

        function simulacion_bi_ficha() { /* T1 */
            const getVal = sel => {
                let value = parseFloat(document.querySelector(sel).value);
                if (isNaN(value)) {
                    console.warn(`El valor de ${sel} no es un número. Usando 0 en su lugar.`); 
                    value = 0;
                }
                console.log(`Valor de ${sel}:`, value);
                return value;
            };
            
            const setVal = (sel, val) => {
                val = parseFloat(val.toFixed(2));
                document.querySelector(sel).value = val;
            };

            setVal("#t2_pr_ven", getVal("#t1_pr_ven")); /** H34 */
            setVal("#t2_cont_con_net", getVal("#t2_cont_con_est") - getVal("#t2_pr_ven")); /** H31 */
            setVal("#t2_ingreso_alquiler", getVal("#t2_total_cos_gast") + getVal("#t2_cont_con_net")); /** H16 */
            setVal("#t2_total_ingresos", getVal("#t2_ingreso_alquiler") + getVal("#t2_otros_ingresos")); /** H18 */
            setVal("#t2_revenue_mensual", getVal("#t2_ingreso_alquiler") / parseInt(getVal("#t2_meses_flota"), 10)); /** H20 */
            setVal("#t2_revenue_per_day", getVal("#t2_total_ingresos") / parseInt(getVal("#t2_dias_rental"), 10)); /** H21*/
        }

        function margen_retorno(){ /* T2 */

            const getVal = sel => {
                let value = parseFloat(document.querySelector(sel).value);
                if (isNaN(value)) {
                    console.warn(`El valor de ${sel} no es un número. Usando 0 en su lugar.`); 
                    value = 0;
                }
                console.log(`Valor de ${sel}:`, value);
                return value;
            };
            
            const setVal = (sel, val) => {
                val = parseFloat(val.toFixed(2));
                document.querySelector(sel).value = val;
            };

            setVal("#t2_pr_ven", getVal("#t2_meses_flota") * getVal("#t2_margen_retorno_mensual")); /** H37 vf*/
            setVal("#t2_cont_con_est", getVal("#t2_pr_ven") * getVal("#t2_costo_auto")); /** H35 */
            setVal("#t2_cont_con_net", getVal("#t2_cont_con_est") - getVal("#t2_pr_ven")); /** H31 */
            setVal("#t2_ingreso_alquiler", getVal("#t2_total_cos_gast") + getVal("#t2_cont_con_net")); /** H16 */
            setVal("#t2_total_ingresos", getVal("#t2_ingreso_alquiler") + getVal("#t2_otros_ingresos")); /** H18 */
            setVal("#t2_revenue_mensual", getVal("#t2_ingreso_alquiler") / getVal("#t2_meses_flota")); /** H20 */
            setVal("#t2_revenue_per_day", getVal("#t2_total_ingresos") / getVal("#t2_dias_rental")); /** H21 */
            
        }

        function meses_flota(){ /* K9 */

            const getVal = sel => {
                let value = parseFloat(document.querySelector(sel).value);
                if (isNaN(value)) {
                    console.warn(`El valor de ${sel} no es un número. Usando 0 en su lugar.`); 
                    value = 0;
                }
                console.log(`Valor de ${sel}:`, value);
                return value;
            };

            const setVal = (sel, val) => {
                val = parseFloat(val.toFixed(2));
                document.querySelector(sel).value = val;
            };

            setVal("#t3_dias_rental", getVal("#t3_meses_flota") * 30); /** K14 */
            setVal("#t3_ingreso_alquiler", getVal("#t3_revenue_mensual") * getVal("#t3_meses_flota")); /** k17 */
            setVal("#t3_total_cos_gast", ((getVal("#t2_total_cos_gast") / getVal("#t2_meses_flota")) * (getVal("#t3_meses_flota"))) + getVal("#t3_accesorios")); /** K31 */
            setVal("#t3_cont_con_est", getVal("#t3_total_ingresos") - getVal("#t3_total_cos_gast")); /** K33 */
            setVal("#t3_cont_con_est", getVal("#t3_cont_con_net") + getVal("#t3_estimado_precio_venta")); /** K37 */

        }

        function k13(){ 

            const getVal = sel => {
                let value = parseFloat(document.querySelector(sel).value);
                if (isNaN(value)) {
                    console.warn(`El valor de ${sel} no es un número. Usando 0 en su lugar.`); 
                    value = 0;
                }
                console.log(`Valor de ${sel}:`, value);
                return value;
            };

            const setVal = (sel, val) => {
                val = parseFloat(val.toFixed(2));
                document.querySelector(sel).value = val;
            };

            setVal("#t3_margen_retorno_inversion", getVal("#t3_cont_con_est") / getVal("#t3_precio_flota_actual")); /** K39 */ 
            setVal("#t3_margen_retorno_mensual_estimado", getVal("#t3_margen_retorno_inversion") / getVal("#t3_meses_flota")); /** k41 */

        }

        function k21(){ 

            const getVal = sel => {
                let value = parseFloat(document.querySelector(sel).value);
                if (isNaN(value)) {
                    console.warn(`El valor de ${sel} no es un número. Usando 0 en su lugar.`); 
                    value = 0;
                }
                console.log(`Valor de ${sel}:`, value);
                return value;
            };

            const setVal = (sel, val) => {
                val = parseFloat(val.toFixed(2));
                document.querySelector(sel).value = val;
            };

            setVal("#t3_ingreso_alquiler", getVal("#t3_revenue_mensual") * getVal("#t3_meses_flota")); /** K17 */ 
            setVal("#t3_total_ingresos", getVal("#t3_ingreso_alquiler") + getVal("#t3_otro_ingreso")); /** k41 */
            setVal("#t3_cont_con_net", getVal("#t3_total_ingresos") - getVal("#t3_accesorios")); /** K33 */ 
            setVal("#t3_cont_con_est", getVal("#t3_cont_con_net") + getVal("#t3_estimado_precio_venta")); /** k37 */
            setVal("#t3_cont_con_est", getVal("#t3_cont_con_est") / getVal("#t3_precio_flota_actual")); /** k39 */
            setVal("#t3_margen_retorno_mensual_estimado", getVal("#t3_margen_retorno_inversion") / getVal("#t3_meses_flota")); /** k41 */

        }

        function k30(){ 

            const getVal = sel => {
                let value = parseFloat(document.querySelector(sel).value);
                if (isNaN(value)) {
                    console.warn(`El valor de ${sel} no es un número. Usando 0 en su lugar.`); 
                    value = 0;
                }
                console.log(`Valor de ${sel}:`, value);
                return value;
            };

            const setVal = (sel, val) => {
                val = parseFloat(val.toFixed(2));
                document.querySelector(sel).value = val;
            };

            setVal("#t3_total_cos_gast", ((getVal("#t2_total_cos_gast") / getVal("#t2_meses_flota")) * getVal("#t3_meses_flota")) + getVal("#t3_accesorios")); /** K31 */ 
            setVal("#t3_cont_con_net", getVal("#t3_total_ingresos") - getVal("#t3_total_cos_gast")); /** k33 */
            setVal("#t3_cont_con_est", getVal("#t3_cont_con_net") + getVal("#t3_estimado_precio_venta")); /** K37 */ 
            setVal("#t3_margen_retorno_inversion", getVal("#t3_cont_con_est") / getVal("#t3_precio_flota_actual")); /** k39 */
            setVal("#t3_margen_retorno_mensual_estimado", getVal("#t3_margen_retorno_inversion") / getVal("#t3_meses_flota")); /** k41 */

        }

        function k35(){ 

            const getVal = sel => {
                let value = parseFloat(document.querySelector(sel).value);
                if (isNaN(value)) {
                    console.warn(`El valor de ${sel} no es un número. Usando 0 en su lugar.`); 
                    value = 0;
                }
                console.log(`Valor de ${sel}:`, value);
                return value;
            };

            const setVal = (sel, val) => {
                val = parseFloat(val.toFixed(2));
                document.querySelector(sel).value = val;
            };

            setVal("#t3_cont_con_est", getVal("#t3_cont_con_net") + getVal("#t3_estimado_precio_venta")); /** K37 */ 
            setVal("#t3_margen_retorno_inversion", getVal("#t3_cont_con_est") / getVal("#t3_precio_flota_actual")); /** k39 */
            setVal("#t3_margen_retorno_mensual_estimado", getVal("#t3_margen_retorno_inversion") / getVal("#t3_meses_flota")); /** K41 */ 
            
        }


    </script>
</body>
</html>