<?php include 'header.php'; ?>

<div id="form-page">



       <h1>Add a Camp</h1>

<section class="form-content">
       
        <p>Please fill out the following information about the camp that you would like us to add:</p>
        
        <form id="add-a-camp-form">
            
            <label for="camp-name">Camp name</label>
            <input type="text">
            
            <label for="camp-city" id="camp-city">City</label>
            <input type="text" id="camp-city">
            
            <label for="camp-state">State</label>
            <input type="text" id="camp-state">
            
            <label for="camp-url">Camp's website</label>
            <input type="url">
            
            <label for="your-name" id="your-name">Your name</label>
            <input type="text">
            
            <label for="your-email">Your email</label>
            <input type="email">
            
            <label for="comments">Comments</label>
            <textarea name="comments" id="comments"></textarea>

            <div class="captcha"><img src="../images/reCAPTCHA_Sample_Clean.png"></div>

            <input type="submit" value="submit" id="submit">


        </form>
            

</section><!--end  content-->   



<section class ="form-right-sidebar">
               
</section><!--end details right sidebar-->    




</div><!--end form page-->        
        
    
<?php include 'footer.php'; ?>

    
    