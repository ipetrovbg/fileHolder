

  <div id="container">
  
    <div id="user_section">
      <div class="user_wraper">
        <div id="user_section_pic"><img src="<?php echo URL ?>img/nav_user_pic.png" /></div>
        <div id="user_section_name"><span>Natasha Joe</span></div>
        <a href=""><div id="user_section_arrow_down"></div></a>
        <div class="cleared"></div>
      </div>

      <ul id="user_nav">
        <a href="#"><li><img src="<?php echo URL ?>/img/link.png"> My Files</li></a>
        <a href=""><li><img src="<?php echo URL ?>/img/add.png"> Add Files</li></a>
        <a href=""><li><img src="<?php echo URL ?>/img/favorites.png"> Favourites</li></a>
        <a href=""><li><img src="<?php echo URL ?>/img/deleted.png"> Deleted</li></a>
      </ul>

    </div>
    <div id="content">
    
      <h1>Simple Login with CodeIgniter</h1>
     <?php echo validation_errors(); ?>
      <form method="post" action="verifylogin">
         <label for="username">Username:</label>
         <input type="text" size="20" id="username" name="user_name"/>
         <br/>
         <label for="password">Password:</label>
         <input type="password" size="20" id="passowrd" name="password"/>
         <br/>
         <input type="submit" value="Login"/>
      <?php echo form_close(); ?>
      
    </div>
    <div class="cleared"></div>
</div>
