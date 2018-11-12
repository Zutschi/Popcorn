<?php

$products = [
  [
    'title' => 'Orange',
    'desc' => 'Eine Orange ist sehr gesund!'
  ],
  [
    'title' => 'Computer',
    'desc' => 'Damit kann man Programmieren lernen!'
  ],
]

 ?>
    <br />
    <br />
    <br />
    <div class="container">   
      <pre>
        <?php 
          foreach ($products as $items) {
            $productTitle = $items["title"];
            $productDesc = $items["desc"];
        ?>
        <div class='dropdown'>
          <button class='btn btn-default dropdown-toggle' type='button' id='openDP' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <?php echo $productTitle; ?>
            <span class='caret'></span>
          </button>
          <ul class='dropdown-menu' aria-labelledby='openDP'>
            <li>
              <p><?php echo $productDesc;?></p>
            <li>
          </ul> 
        </div>
        <?php 
          }
        ?>  
      </pre> 
    </div>