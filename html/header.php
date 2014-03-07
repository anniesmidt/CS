<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <title>Campseekers: Simplifying Summer Planning</title>
  
    <!--load fonts from google font api-->  
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bree+Serif">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">

    <!--load main stylesheet-->
    <link rel="stylesheet" href="../css/styles.css">

  
    <!--load scripts file-->
    <script src="../js/scripts.js"></script>

    <!--load jquery and jquery UI libraries-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

  </head><!--end head-->



<body>

    <div id="container">
    
        <header>
            
            <section id="login">
            
                <div id="greeting">
                <a href="#">Hi Shayne!</a> <!--**need to add pulldown menu here**-->
                </div> <!--end greeting-->           
            
            </section> <!--end login-->
            
            <section id="branding">
                    
                <div id="logo">
                <a href="#"><img src="../images/campseekers-logo.png" alt="campseekers-logo"></a><!--**add link**-->
                </div> <!--end logo-->
            
                <div id="tagline"> 
                    Simplifying <br>Summer Planning <!--**this br isn't semantic, should fix**-->
                </div><!--end tagline-->
                
            </section><!--end branding-->
                
        </header>
    
    
        <nav>
        
            <ul>
                <li><a href="#">Share Camps</a></li><!--**add link**-->
                <li><a href="#">My Profile</a></li><!--**add link**-->
                <li><a href="#">How it Works</a></li><!--**add link**-->
                <li><a href="#">Add a Camp</a></li><!--**add link**-->
                <li><a href="#">Contact</a></li><!--**add link**-->
            </ul>

        </nav>
    



        <section id= "search">
           <form id= "search-form">


                <fieldset id="search-fields">   
                
                    
                    <legend id= "search-instructions">
                    Find your summer camp session!
                    </legend><!--end search-instructions-->

                             
                    <input id ="location" placeholder="city or zip (Greater Boston Area)" type="search" autofocus>
                   
                   
                    <select id = "session-date">
                        <option value = "all">all sessions</option><!--**pull from DB**-->
                        <option value = "1">session 1</option><!--**pull from DB**-->
                        <option value = "2">session 2</option><!--**pull from DB**-->
                        <option value = "3">session 3</option><!--**pull from DB**-->
                        <option value = "4">session 4</option><!--**pull from DB**-->
                        <option value = "4">session 5</option><!--**pull from DB**-->
                        <option value = "4">session 6</option><!--**pull from DB**-->
                        <option value = "4">session 7</option><!--**pull from DB**-->
                        <option value = "4">session 8</option><!--**pull from DB**-->
                    </select> <!--end session-date-->

                   
                    <select id = "category">
                        <option value = "all">all categories</option><!--**pull from DB**-->
                        <option value = "1">one</option><!--**pull from DB**-->
                        <option value = "2">two</option><!--**pull from DB**-->
                        <option value = "3">three</option><!--**pull from DB**-->
                        <option value = "4">four</option><!--**pull from DB**-->
                    </select>
                                        
                    

                        <script>
                          $(function() {
                            $( "#age-slider" ).slider({
                              range: true,
                              min: 3,
                              max: 18,
                              values: [3, 18],
                              slide: function ( event, ui ) {
                                  $ ("#age").text(" " + ui.values[ 0 ] + "-" + ui.values[ 1 ] );
                              }
                            }); 
                            //$("#age").text(" 3-18");
                          });
                        </script>

                      
                      
                          <div id= "age-slider-label">  
                          <span class="bold">Age:</span>
                          <span id="age"></span>
                          </div>
                          <div id="age-slider">
                          </div>  
 
                    
                    
                    <input type="submit" value="search">
                </fieldset><!--end search-fields-->

            </form><!--end search-form-->

        </section><!--end search-->

