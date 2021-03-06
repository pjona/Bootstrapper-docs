<section id="buttonDropdowns">
  <div class="page-header">
    <h1>Button dropdown menus <small>Built on button groups to provide contextual menus</small></h1>
  </div>

  <h2>Button dropdowns</h2>
  <div class="row">
    <div class="span4">
      <h3>Overview and examples</h3>
      <p>Dropdown button functions expect a value, array of links, and an optional attributes array. Any optional attributes will be applied to the top level div.</p>
      <p>Use any button to trigger a dropdown menu by placing it within a <code>.btn-group</code> and providing the proper menu markup.</p>
      <div class="btn-toolbar" style="margin-top: 18px;">
        <?php echo DropdownButton::normal('Action', 
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ); 
        ?>

        <?php echo DropdownButton::primary('Primary', 
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ); 
        ?>

        <?php echo DropdownButton::danger('Danger',               
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ); 
        ?>
      </div>
      <div class="btn-toolbar">

        <?php echo DropdownButton::warning('Warning',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ); 
        ?>

        <?php echo DropdownButton::success('Success', 
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ); 
        ?>

        <?php echo DropdownButton::info('Info', 
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ); 
        ?>

        <?php echo DropdownButton::inverse('Inverse', 
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ); 
        ?>
      </div><!-- /btn-toolbar -->
    </div>
    <div class="span8">
      <h3>Example call</h3>
      <p>Similar to the call below you can use <code>DropdownButton::primary</code>, <code>DropdownButton::danger</code>, <code>DropdownButton::warning</code>, <code>DropdownButton::success</code>, <code>DropdownButton::info</code>, or <code>DropdownButton::inverse</code>.</p>
<pre class="prettyprint linenums">
echo DropdownButton::normal('Action', 
    Navigation::links(
      array(
        array('Action', '#'),
        array('Another action', '#'),
        array('Something else here', '#'),
        array(Navigation::DIVIDER),
        array('Separated link', '#'),
      )
    )
  ); 
</pre>
    </div>
  </div>
  <div class="row">
    <div class="span4">
      <h3>Works with all button sizes</h3>
      <p>Button dropdowns work at any size. your button sizes to <code>DropdownButton::large</code>, <code>DropdownButton::small</code>, or <code>DropdownButton::mini</code>.</p>
      <div class="btn-toolbar" style="margin-top: 18px;">
        <?php echo DropdownButton::large('Action', 
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ); 
        ?>

        <?php echo DropdownButton::small('Action',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ); 
        ?>

        <?php echo DropdownButton::mini('Action',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            ); 
        ?>
      </div><!-- /btn-toolbar -->
    </div><!--/span-->
    <div class="span4">
      <h3>Combined Calls</h3>
      <p>You can mix and match the dropdown button color and size. Simply add an underscore between types.
        Example: <code>DropdownButton::large_danger</code> or <code>DropdownButton::mini_inverse</code> and pass in the same link array.</p>

      <h3>Requires javascript</h3>
      <p>Dropdown buttons require the bootstrap.js to be include.</p>
    </div><!--/span-->
  </div><!--/row-->
  <br>

  <h2>Split button dropdowns</h2>
  <div class="row">
    <div class="span4">
      <h3>Overview and examples</h3>
      <p>You can create Split button dropdowns just like normal Dropdown Buttons, just use the <code>DropdownButton::</code> class instead of <code>DropdownButton::</code></p>
      <div class="btn-toolbar" style="margin-top: 18px;">
        <?php echo DropdownButton::normal('Action',               
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->split(); 
        ?>

        <?php echo DropdownButton::primary('Primary',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->split(); 
        ?>

        <?php echo DropdownButton::danger('Danger',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->split(); 
        ?>

      </div>
      <div class="btn-toolbar">
        <?php echo DropdownButton::warning('Warning',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->split(); 
        ?>

        <?php echo DropdownButton::success('Success',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->split(); 
        ?>

        <?php echo DropdownButton::info('Info',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->split(); 
        ?>

      </div>
      <div class="btn-toolbar">
        <?php echo DropdownButton::inverse('Inverse',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->split(); 
        ?>
      </div><!-- /btn-toolbar -->
      <h3>Sizes</h3>
      <p>Button dropdowns work at any size. your button sizes to <code>DropdownButton::large</code>, <code>DropdownButton::small</code>, or <code>DropdownButton::mini</code>.</p>
      <div class="btn-toolbar">
        <?php echo DropdownButton::large('Large Action',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->split(); 
        ?>
      </div><!-- /btn-toolbar -->
      <div class="btn-toolbar">
        <?php echo DropdownButton::small('Small Action',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->split(); 
        ?>
      </div><!-- /btn-toolbar -->
      <div class="btn-toolbar">
        <?php echo DropdownButton::mini('Mini Action',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->split(); 
        ?>
      </div><!-- /btn-toolbar -->
      <h3>Right Align Menu</h3>
      <p>You can right align the dropdown menu by calling <code>pull_right()</code>.</p>   
    </div>
    <div class="span8">
      <h3>Example markup</h3>
<pre class="prettyprint linenums">
echo DropdownButton::normal('Action',
  Navigation::links(
    array(
      array('Action', '#'),
      array('Another action', '#'),
      array('Something else here', '#'),
      array(Navigation::DIVIDER),
      array('Separated link', '#'),
    )
  )
)->split(); 
</pre>
      <h3>Dropup menus</h3>
      <p>If you want your dropdown menu to go above the button (dropup) you can simply call <code>dropup()</code>.</p>
      <div class="btn-toolbar" style="margin-top: 9px;">
        <?php echo DropdownButton::normal('Dropup',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->dropup(); 
        ?>

        <?php echo DropdownButton::normal('Right dropup',
              Navigation::links(
                array(
                  array('Action', '#'),
                  array('Another action', '#'),
                  array('Something else here', '#'),
                  array(Navigation::DIVIDER),
                  array('Separated link', '#'),
                )
              )
            )->pull_right()->dropup()->split(); ?>

      </div>
<pre class="prettyprint linenums">
echo DropdownButton::normal('Right dropup',
  Navigation::links(
    array(
      array('Action', '#'),
      array('Another action', '#'),
      array('Something else here', '#'),
      array(Navigation::DIVIDER),
      array('Separated link', '#'),
    )
  )
)->pull_right()->dropup()->split();
</pre>
    </div>
  </div>
</section>