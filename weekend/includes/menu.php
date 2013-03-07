<?php
  $menu = array("index","about","speakers","schedule","register","volunteer","location");
?>
      
      <div class="row" style="margin-bottom:0;">
        <div class="span12">
            <div class="navbar">
              <div class="navbar-inner">
                <ul class="nav">
                <?php foreach($menu as $item):?>
                  <li <?php echo ($item == $active ? "class='active'" : "")?>><a href="<?php echo $item;?>"><?php echo ($item == "index" ? "home" : $item);?></a></li>
                <?php endforeach;?>
                </ul>
                <ul class="nav pull-right">
                    <li>
                        <a href="/~svc/" style="padding-top:0;vertical-align:bottom;">return to <img src="../graphics/SVC_logo_small.png" /></a>
                    </li>
              </div>
          </div>
        </div>
    </div>