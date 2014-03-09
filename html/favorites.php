<?php include 'header.php'; ?>

<div id="favorites-page">

<h1>My Campers and Favorites</h1>


<section class ="favorites-left-sidebar">
    
    <div class="favorites-menu">
        <p class="menu-head">Campers</p>
            <ul id ="menu-camper-list">
                <li><a href="#">Anna<span class="number-of-camps"> (3 camps)</span></a></li>
                <li><a href="#">Lori<span class="number-of-camps"> (2 camps)</span></a></li>
            </ul>
            <p class="small-link"><a href="#">Manage campers</a></p>
            
        <button type="button" id="share-favorites">share favorites</button>

    </div><!--end favorites menu-->
    
</section><!--end favorites left sidebar-->    



    <section class="favorites-content">
    
         
        <!--------------------------single camper's favorites-------------------------------->
        <!--this section comes up at right when you click one of the camper's names at left--> 
        <div id="single-camper-favorites">      
        
            <h2>Anna<span class="apostrophe">&#x27;s</span> Camps and Sessions</h2>
            
                <div id="single-campers-camp-list">
             
              
            <div class="single-camper-favorite-single-camp">
  
              <div class="single-camper-favorites-edit-buttons">
                        <button type="button" id="view-session-page">view</button>
                        <button type="button" id="delete">delete</button>
                    </div>
                    
                    <p class ="favorites-camp-name bold">Art for All Camp</a></p>
                    <p class ="favorites-session-name"><span class="bold">Session: </span>Photography Adventures</p>
                    <p class= "favorites-session-start"><span class="bold">Start date: </span>August 1, 2014</p>
                    <p class= "favorites-session-length"><span class="bold">Length: </span>1 week</p>
                
                   
            </div><!--end single camper favorite single camp-->
                
                
      
      
       <div class="single-camper-favorite-single-camp">
  
              <div class="single-camper-favorites-edit-buttons">
                        <button type="button" id="view-session-page">view</button>
                        <button type="button" id="delete">delete</button>
                    </div>
                    
                    <p class ="favorites-camp-name bold">Art for All Camp</a></p>
                    <p class ="favorites-session-name"><span class="bold">Session: </span>Photography Adventures</p>
                    <p class= "favorites-session-start"><span class="bold">Start date: </span>August 1, 2014</p>
                    <p class= "favorites-session-length"><span class="bold">Length: </span>1 week</p>
                
                   
            </div><!--end single camper favorite single camp-->
            
            
            
             <div class="single-camper-favorite-single-camp">
  
              <div class="single-camper-favorites-edit-buttons">
                        <button type="button" id="view-session-page">view</button>
                        <button type="button" id="delete">delete</button>
                    </div>
                    
                    <p class ="favorites-camp-name bold">Art for All Camp</a></p>
                    <p class ="favorites-session-name"><span class="bold">Session: </span>Photography Adventures</p>
                    <p class= "favorites-session-start"><span class="bold">Start date: </span>August 1, 2014</p>
                    <p class= "favorites-session-length"><span class="bold">Length: </span>1 week</p>
                
                   
            </div><!--end single camper favorite single camp-->
                
                
                      
                
                
                
         </div><!--end single-campers-camp-list-->
         </div><!--end single camper favorites-->
        <!----------------------------------------------------------------------------------->




        <!------------------------------manage campers--------------------------------------->
        <!--this section comes up at right when you click manage campers link at left-------->
        <div id="manage-campers-screen">      
        
            <h2>Add, edit or remove campers</h2>
            
                <div id="campers-to-manage">
                    <p class ="manageable-camper"><span class="manageable-camper-name">Anna<span class="manageable-camper-controls">
                            <a href="#">rename  </a>|
                            <a href="#">delete</a></span>
                        </p>

                <p class ="manageable-camper"><span class="manageable-camper-name">Lori<span class="manageable-camper-controls">
                            <a href="#">rename  </a>|
                            <a href="#">delete</a></span>
                        </p>
               
               
               </div><!--end campers to manage-->
               
                                    
                <h3 class="favorites-h3">Add a new camper</h3>
                <form>
                    <label for="name">Name</label>
                    <input type="text" placeholder="name" id="name">
                    
                    
                    <label for="age">Age</label>
                    <input type="number" id="age"
                    min="0"
                    max="18"
                    step="1"
                    value="6">
                    
                    
                   
                    
                    
                    <label for="gender">Gender</label>                    
                    <select id="gender">
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>
                    
                    <label for="interests">Interests</label>                    
                    <div id="interests">
                        <input type="checkbox" name="sports" id="interests-box"> Sports
                        <input type="checkbox" name="art" id="interests-box"> Art
                        <input type="checkbox" name="nature" id="interests-box"> Nature
                        <input type="checkbox" name="technology" id="interests-box"> Technology
                    </div>
                    
                    <button type="button" id="save">save</button>
                    <button type="button" id="cancel">cancel</button>

                </form>

                                    
                </div><!--end manage campers screen-->
        <!----------------------------------------------------------------------------------->
        
        
        
        
        <!------------------------------share favorites-------------------------------------->
        <!--this section comes up at right when you click share favorites at left------------>       
        
    <div id="share-favorites-form">    
        <h2>Share favorite camps by email</h2>
        
        <form>
            <label for="shareable-campers">Share camps for:</label>
               <div id="shareable-campers">
                    <input type="checkbox" name="camper1"> Anna<br>
                    <input type="checkbox" name="camper2"> Lori<br>
               </div>
               
            <label for="sendto-email">Email to:</label>   
            <input type="email" id="sendto-email" placeholder="email address">
            
            <label for="message">Message</label>   
            <textarea id="message" placeholder="your message here">            </textarea>
            
          <div id="share-favorites-form-buttons">  
            <button type="button" id="cancel2">cancel</button>
            <button type="button" id="send">send</button>
          </div>
        </form>
        
    </div>        <!----------------------------------------------------------------------------------->

        
    
    </section><!--end favorites content-->   

</div><!--end favorites page-->        
        
    
<?php include 'footer.php'; ?>

    
    