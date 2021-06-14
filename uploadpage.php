<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Item Creation · Be-Archaeo Resources Site · Be-Archaeo Project
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="page">      
    <div id="wrap">
        <header>
            <h1>
                <a href="/omeka-s/s/bearchaeo-resources-site" class="site-title">
                    <img src="https://bearchaeo.di.unito.it/omeka-s/files/asset/8beb41dc0b0a112de25cc45f9025fcfb3e15780e.png" alt="Be-Archaeo Resources Site">
                </a>
            </h1>
            
            <nav>
                <ul class="navigation">
                    <li>
                        <a href="/omeka-s/s/bearchaeo-resources-site/item">Browse</a>
                    </li>
                    <li>
                        <a href="/omeka-s/s/bearchaeo-resources-site/page/SUrecords">Stratigraphic unit records</a>
                    </li>
                    <li>
                        <a href="/omeka-s/s/bearchaeo-resources-site/page/afRecords">Archaeological Finding records</a>
                    </li>
                    <li>
                        <a href="uploadpage.html">Item Create</a>
                    </li>
                    <li>
                        <a href="/omeka-s/s/bearchaeo-resources-site/page/gallery">Media</a>
                    </li>
                </ul>                
            </nav>
        </header>
        
        <div id="content" role="main">
            <div class="blocks">
                <h2>Create an Item</h2>
                <!--FORM-->
                
                <link href="styleform.css" rel="stylesheet">
                <div class="container">
                    <form id="BIGFORM">
                        <div class="row">
                            <h4>IDENTIFICATION</h4>
                            <button type="button" class="accordion"></button>
                            <div class="panel">
                                <div>&nbsp;</div>
                                <div class="col-half">
                                    <div id="etichetta">
                                        <p>Title</p>
                                    </div>
                                </div>
                                <div class="col-half" id="nopad">
                                    <div class="input-group">
                                        <input type="text" name="Title" id="title"/>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div id="etichetta">
                                        <p>Description</p>
                                    </div>
                                </div>
                                <div class="col-half" id="nopad">
                                    <div class="input-group">
                                        <input type="text" name="Descrption" id="description"/>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div id="etichetta">
                                        <p>Date</p>
                                    </div>
                                </div>
                                <div class="col-half" id="nopad">
                                    <div class="input-group">
                                        <input type="date" name="Date" id="date"/>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div id="etichetta">
                                        <p>SU Number</p>
                                    </div>
                                </div>
                                <div class="col-half" id="nopad">
                                    <div class="input-group">
                                        <input type="number" name="SUnumber" id="sunumber"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h4>Registry</h4>
                            <button type="button" class="accordion"></button>
                            <div class="panel">
                                <div>&nbsp;</div>
                                <div class="col-half">
                                    <div id="etichetta">
                                        <p>Acronym</p>
                                    </div>
                                </div>
                                <div class="col-half" id="nopad">
                                    <div class="input-group">
                                        <input type="text" name="Acronym" id="acronym"/>
                                        <button type="button" class="adder" onclick="unhide(1)" id="btn1">+Value</button>
                                    </div>
                                </div>
                                <!--add field-->        <div id="hidden1" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Acronym</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Acronym1" id="acronym1" />
                                            <button type="button" class="adder" onclick="unhide(2)" id="btn2">+Value</button>&nbsp;<button type="button" class="remover" onclick="hide(1)" id="btn1">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="hidden2" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Acronym 2</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Acronym2" id="acronym2" />
                                            <button type="button" class="adder" onclick="unhide(3)" id="btn3">+Value</button>&nbsp;<button type="button" class="remover" onclick="hide(2)" id="btn2">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="hidden3" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Acronym 3</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Acronym3" id="acronym3"/>
                                            <button type="button" class="adder" onclick="unhide(4)" id="btn4">+Value</button>&nbsp;<button type="button" class="remover" onclick="hide(3)" id="btn3">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="hidden4" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Acronym 4</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Acronym4" id="acronym4" />
                                            <button type="button" class="remover" onclick="hide(4)" id="btn4">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div id="etichetta">
                                        <p>Trench</p>
                                    </div>
                                </div>
                                <div class="col-half" id="nopad">
                                    <div class="input-group">
                                        <input type="text" name="Trench" id="trench" />
                                        <button type="button" class="adder" onclick="unhide(5)" id="btn5">+Value</button>
                                    </div>
                                </div>
                                <div id="hidden5" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Trench</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Trench1" id="trench1" />
                                            <button type="button" class="adder" onclick="unhide(6)" id="btn6">+Value</button>&nbsp;<button type="button" class="remover" onclick="hide(5)" id="btn5">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="hidden6" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Trench 2</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Trench2" id="trench2" />
                                            <button type="button" class="adder" onclick="unhide(7)" id="btn7">+Value</button>&nbsp;<button type="button" class="remover" onclick="hide(6)" id="btn6">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="hidden7" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Trench 3</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Trench3" id="trench3"/>
                                            <button type="button" class="adder" onclick="unhide(8)" id="btn8">+Value</button>&nbsp;<button type="button" class="remover" onclick="hide(7)" id="btn7">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="hidden8" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Trench 4</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Trench4" id="trench4" />
                                            <button type="button" class="remover" onclick="hide(8)" id="btn8">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div id="etichetta">
                                        <p>Sector</p>
                                    </div>
                                </div>
                                <div class="col-half" id="nopad">
                                    <div class="input-group">
                                        <input type="text" name="Sector" id="sector"/>
                                        <button type="button" class="adder" onclick="unhide(9)" id="btn9">+Value</button>
                                    </div>
                                </div>
                                <!--add field-->        <div id="hidden9" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Sector</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Sector1" id="sector1" />
                                            <button type="button" class="adder" onclick="unhide(10)" id="btn10">+Value</button>&nbsp;<button type="button" class="remover" onclick="hide(9)" id="btn9">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="hidden10" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Sector 2</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Sector2" id="sector2" />
                                            <button type="button" class="adder" onclick="unhide(11)" id="btn11">+Value</button>&nbsp;<button type="button" class="remover" onclick="hide(10)" id="btn10">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="hidden11" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Sector 3</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Sector3" id="sector3" />
                                            <button type="button" class="adder" onclick="unhide(12)" id="btn12">+Value</button>&nbsp;<button type="button" class="remover" onclick="hide(11)" id="btn11">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="hidden12" style="display: none;">
                                    <div class="col-half" id="nopad">
                                        <div id="etichetta">
                                            <p>Other Sector 4</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Sector4" id="sector4" />
                                            <button type="button" class="remover" onclick="hide(12)" id="btn12">-Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h4>Stratigraphy</h4>
                            <button type="button" class="accordion"></button>
                            <div class="panel">
                                <div>&nbsp;</div>
                                <div class="col-half">
                                    <div id="etichetta">
                                        <p>Is equal to:</p>
                                    </div>
                                </div>
                                <div class="col-half" id="nopad">
                                    <div class="input-group">
                                        <select name="IsEqualTo" id="cuts">
                                        <?php
                                            $hostname="localhost";
                                            $dbname="omeka-s";
                                            $username="root";
                                            $password="";

                                            $conn=mysqli_connect("$hostname", "$username", "$password", "$dbname");

                                            if (mysqli_connect_errno()){
                                                echo"connessione fallita".mysqli_connect_error();
                                            }

                                            $result=mysqli_query($conn, 
                                            "SELECT * FROM `resource` 
                                            WHERE `title` LIKE 'SU%' 
                                            AND `title` NOT LIKE '%reg%' 
                                            AND `title` NOT LIKE '%desc%' 
                                            AND `title` NOT LIKE '%strat%' 
                                            AND `title` NOT LIKE '%dat%' 
                                            AND `title` NOT LIKE '%sam%'");

                                            echo"<option> -select a SU- </option>";
                                            while($row=mysqli_fetch_array($result)){
                                                echo"<option>$row[title]</option>";
                                            }
                                            mysqli_close();
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div id="etichetta">
                                        <p>Is covered by:</p>
                                    </div>
                                </div>
                                <div class="col-half" id="nopad">
                                    <div class="input-group">
                                        <select name="IsCoveredBy" id="filledby">
                                        <?php
                                            $hostname="localhost";
                                            $dbname="omeka-s";
                                            $username="root";
                                            $password="";

                                            $conn=mysqli_connect("$hostname", "$username", "$password", "$dbname");

                                            if (mysqli_connect_errno()){
                                                echo"connessione fallita".mysqli_connect_error();
                                            }

                                            $result=mysqli_query($conn, 
                                            "SELECT * FROM `resource` 
                                            WHERE `title` LIKE 'SU%' 
                                            AND `title` NOT LIKE '%reg%' 
                                            AND `title` NOT LIKE '%desc%' 
                                            AND `title` NOT LIKE '%strat%' 
                                            AND `title` NOT LIKE '%dat%' 
                                            AND `title` NOT LIKE '%sam%'");

                                            echo"<option> -select a SU- </option>";
                                            while($row=mysqli_fetch_array($result)){
                                                echo"<option>$row[title]</option>";
                                            }
                                            mysqli_close();
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-half">
                                    <div id="etichetta">
                                        <p>Definition</p>
                                    </div>
                                </div>
                                <div class="col-half" id="nopad">
                                    <div class="input-group">
                                        <textarea name="Definition" id="definition"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <h4>Description</h4>
                                <button type="button" class="accordion"></button>
                                <div class="panel">
                                    <div>&nbsp;</div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Distinguishing criteria</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="Distinguishing criteria"/>
                                        </div>
                                    </div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Color term</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad"> 
                                        <div class="input-group">
                                            <select name="Color term">
                                                <option> - </option>
                                                <option>Brown</option>
                                                <option>Dark Brown</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Formation process:</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad"> 
                                        <div class="input-group">
                                            <select name="FormationProcess" id="formationprocess">
                                                <option> - </option>
                                                <option>Accumulation</option>
                                                <option>Cutting</option>
                                                <option>Erosion</option>
                                                <option>Deposition</option>
                                                <option>Construction</option>
                                                <option>Use</option>
                                                <option>Destruction</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Other formation process</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="OtherFormationProcess" id="oformationprocess"/>
                                        </div>
                                    </div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Soil/Matrix</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <select name="Soil/Matrix" id="soil/matrix">
                                                <option>-</option>
                                                <option>Clay</option>
                                                <option>Silt</option>
                                                <option>Sand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Compaction</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <select name="Compaction" id="compaction">
                                                <option>-</option>
                                                <option>Soft</option>
                                                <option>Loose</option>
                                                <option>Friable</option>
                                                <option>Compact</option>
                                                <option>Hard</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>State of Preservation</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="StateOfPreservation" id="preservation"/>
                                        </div>
                                    </div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Limits of the unit</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <select name="LimitsOfTheUnit" id="limit">
                                                <option>-</option>
                                                <option>Original</option>
                                                <option>Not Original</option>
                                                <option>Excavation</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Description</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <textarea name="Description" id="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4>Datation</h4>
                                <button type="button" class="accordion"></button>
                                <div class="panel">
                                    <div>&nbsp;</div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Dating Element AF</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                        <select name="Select a dating element" id="datingelem">
                                        <?php
                                            $hostname="localhost";
                                            $dbname="omeka-s";
                                            $username="root";
                                            $password="";

                                            $conn=mysqli_connect("$hostname", "$username", "$password", "$dbname");

                                            if (mysqli_connect_errno()){
                                                echo"connessione fallita".mysqli_connect_error();
                                            }

                                            $result=mysqli_query($conn, 
                                            "SELECT * FROM `resource` 
                                            WHERE `title` LIKE 'AF%'");

                                            echo"<option> -select a Dating Element- </option>";
                                            while($row=mysqli_fetch_array($result)){
                                                echo"<option>$row[title]</option>";
                                            }
                                            mysqli_close();
                                        ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h4>Sampling</h4>
                                <button type="button" class="accordion"></button>
                                <div class="panel">
                                    <div>&nbsp;</div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Stratigraphic Reliability</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" id="stratreliability"/>
                                        </div>
                                    </div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Quantitative data</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="text" name="QuantitativeData"/>
                                        </div>
                                    </div>
                                    <div class="col-half">
                                        <div id="etichetta">
                                            <p>Soil samples (%)</p>
                                        </div>
                                    </div>
                                    <div class="col-half" id="nopad">
                                        <div class="input-group">
                                            <input type="number" id="soilsamplesperc"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>&nbsp;</div>
                                <p id="divider"></p>
                            </div>
                            <div class="row">
                                <input type="submit" id="Submit" value="Create Item">
                            </div>
                        </form>
                        <script type="text/javascript" src="upload.js"></script>
                    </div>
                    
                    <!--fine del form-->
                </div>
                
                <div class="site-page-pagination">
                    <a href="/omeka-s/s/bearchaeo-resources-site/page/afRecords">Prev</a>    
                    <a href="/omeka-s/s/bearchaeo-resources-site/page/gallery">Next</a>
                </div>
            </div>
            
            <footer>Be-Archaeo resources site. Powered by Omeka S</footer>
        </div>
    </body>