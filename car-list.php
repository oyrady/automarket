
<?php include("php/core.php"); include("cabecera.php"); ?>

<div id="page-content">

<section id="car-pagination">
    <div class="content-holder">
        <div class="page-main-heading extra-space">
            <div class="heading-location">
                <h2><span class="bold">Mercedes-Benz</span> CLS 320</h2>
                <p class="page-location">
                    <a href="index.html">Home </a>
                    <span class="greater-than">&gt;&gt;</span>
                    <a href="car-list.html">Cars</a>
                    <span class="greater-than">&gt;&gt;</span>
                    <a href="#">Mercedes-Benz</a>
                    <span class="greater-than">&gt;&gt;</span>
                    <a href="#">Mercedes-Benz CLS 320</a>
                </p>
            </div>
        
        </div>
        
        <nav class="default-tabs split-tabs">
            <ul>
                <li class="current-item"><a href="#">All Cars</a></li>
                <li><a href="#">New Cars</a></li>
                <li><a href="#">Used Cars</a></li>
            </ul>
        </nav>
        
        <div class="view-select-tabs">
            <a href="#" id="list-view"><span>List View</span></a>
            <a href="#" id="grid-view" class="current"><span>Grid View</span></a>
        </div>
    </div>
</section><!--#car-pagination -->
    
<section id="search-list">
    <div class="content-holder">
        <div class="full-width">
        
            <div class="one-half col-241 search-area">
                <form id="search-filters" action="#">
                    <fieldset class="grey-corner-box">
                        <legend><span class="bold">Search</span> filters</legend>
                        <ul>
                            <li>
                                <label for="manufacturer">Manufacturer:</label>
                                <select id="manufacturer">
                                    <option selected="selected">Select</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </li>
                            <li>
                                <label for="model">Model:</label>
                                <select id="model">
                                    <option selected="selected">Select</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </li>
                            <li class="select-two">
                                <div>
                                    <label for="min-price">Min Price:</label>
                                    <select id="min-price">
                                        <option selected="selected">Select</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="max-price">Max Price:</label>
                                    <select id="max-price">
                                        <option selected="selected">Select</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>					
                                </div>
                            </li>
                            <li>
                                <label for="engine">Engine:</label>
                                <select id="engine">
                                    <option selected="selected">Select</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </li>
                            <li>
                                <label for="transmission">Transmission:</label>
                                <select id="transmission">
                                    <option selected="selected">Select</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </li>
                            <li>
                                <label for="fuel-type">Fuel type:</label>
                                <select id="fuel-type">
                                    <option selected="selected">Select</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </li>
                            <li>
                                <label for="body-type">Body type:</label>
                                <select id="body-type">
                                    <option selected="selected">Select</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </li>
                            <li>
                                <label for="color">Color:</label>
                                <select id="color">
                                    <option selected="selected">Select</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </li>
                            <li>
                                <label for="kilometers-one">Kilometers:</label>
                                <select id="kilometers-one">
                                    <option selected="selected">Select</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </li>
                            <li class="select-two">
                                <div>
                                    <label for="min-year">Min Year:</label>
                                    <select id="min-year">
                                        <option selected="selected">Select</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="max-year">Max Year:</label>
                                    <select id="max-year">
                                        <option selected="selected">Select</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>					
                                </div>
                            </li>
                            <li>
                                <label for="kilometers-two">Kilometers:</label>
                                <select id="kilometers-two">
                                    <option selected="selected">Select</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </li>
                            <li>
                                <!-- add this to general styles -->
                                <div class="search-button">
                                    <input type="submit" value="Search" />
                                </div>
                            </li>
                        </ul>
                    </fieldset>
                    
                    <fieldset id="loan-calculator" class="grey-corner-box">
                        <legend><span class="bold">Loan</span> calculator</legend>
                        <ul>
                            <li>
                                <label for="loan-amount">Loan Amount:</label>
                                <select id="loan-amount">
                                    <option value="0" selected="selected">0.00 Euro</option>
                                    <option value="1000">1000.00 Euro</option>
                                    <option value="5000">5000.00 Euro</option>
                                    <option value="10000">10000.00 Euro</option>
                                </select>							
                            </li>
                            <li>
                                <label for="down-payment">Down Payment:</label>
                                <select id="down-payment">
                                    <option value="0" selected="selected">0.00 Euro</option>
                                    <option value="1000">1000.00 Euro</option>
                                    <option value="5000">5000.00 Euro</option>
                                    <option value="10000">10000.00 Euro</option>
                                </select>							
                            </li>
                            <li>
                                <label for="annual-rate">Annual Rate:</label>
                                <select id="annual-rate">
                                    <option value="0" selected="selected">0.00 %</option>
                                    <option value="0.1">10.00 %</option>
                                    <option value="0.2">20.00 %</option>
                                    <option value="0.3">30.00 %</option>
                                </select>							
                            </li>
                            <li>
                                <label for="loan-period">Loan Period:</label>
                                <select id="loan-period">
                                    <option value="3" selected="selected">3 Years</option>
                                    <option value="1">1 Year</option>
                                    <option value="2">2 Years</option>
                                    <option value="3">4 Years</option>
                                </select>
                            </li>
                            <li>
                                <div class="submit-button"><input type="submit" value="calculate" /></div>
                            </li>
                            <li class="rate-value">
                                <p>Rate value: <span class="amount-value">0,00</span></p>
                            </li>
                        </ul>							
                    </fieldset>
                </form>
            </div>
            
            <div class="results-list one-half col-701">
                <div class="sort-view layer-one">
                
                    <div id="sort-by">
                        <select name="sort-by">
                            <option selected="selected">Sort by</option>
                            <option>Date</option>
                            <option>Price</option>
                            <option>Views</option>
                        </select>
                    </div>
                    <div id="view-on-page">
                        <select name="view-on-page">
                            <option selected="selected">View amount</option>
                            <option>10</option>
                            <option>20</option>
                            <option>30</option>
                        </select>
                    </div>			
                    
                    <div class="pagination">
                        <a href="#" class="current-item"><span>1</span></a>
                        <a href="#"><span>2</span></a>
                        <a href="#"><span>3</span></a>
                        <span class="space-between">...</span>
                        <a href="#"><span>8</span></a>
                        <a href="#" class="last-button">Next</a>
                    </div>
                </div>
                
                <div class="layer-two">
                    
                    <div id="cars-list" class="grid-view list-content">
                        <ul class="offer-small">
                            
                    <?php 

                   $core  = new Core;
                   $autos = $core->ConsultaVehiculos();
                    if($autos == "error"){
                        echo respuesta("No existen vehiculos registrados","danger");
                    }else{
                        foreach($autos as $auto){
                            $imagenes = unserialize($auto['fotos_array']);
                        
                            echo '<li>
                            <a href="car-details.html" class="item-link">
                                <img src="php/imagenes/'.$imagenes[0].'.jpg" alt="offer car" />
                                <div class="entry-label">
                                    <h4 class="car-title">'.$auto['marca'].'</h4>
                                    <span class="price-tag">'.number_format($auto['precio'],0,".",".").' '.$auto['moneda'].'</span>
                                    <span class="location-car">Ciudad: '.$auto['ciudad'].'</span>
                                </div>
                            
                                <div class="entry-overlay">
                                    <ul class="car-list-details item-specs">
                                        <li>Año '.$auto['anio_fabricacion'].'</li>
                                        <li>'.$auto['cilindrada'].' '.$auto['combustible'].'</li>
                                        <li>'.$auto['transmision'].'</li>
                                        <li>'.$auto['modelo'].'</li>
                                        <li>'.number_format($auto['kilometros'],0,".",".").' KM</li>
                                    </ul>
                                </div>
                                <span class="v-sign">V</span>
                                <span class="dealer-data">Vehicle Dealer</span>
                            </a>
                        </li>';
                        }
                    }
                        

                    ?>
                            
                            <!-- Best deal car post -->
                            
                           
                            
                        </ul>					
                    </div>
                
                </div><!--.layer-two-->
            
                <div class="layer-three">
                    <div class="pagination">
                        <a href="#" class="current-item"><span>1</span></a>
                        <a href="#"><span>2</span></a>
                        <a href="#"><span>3</span></a>
                        <span class="space-between">...</span>
                        <a href="#"><span>8</span></a>
                        <a href="#" class="last-button">Next</a>
                    </div>											
                </div>
            </div>
        
    
        </div>
    </div>
</section><!--#search-list-->

</div><!--#page-content-->
<?php include("footer.php");?>