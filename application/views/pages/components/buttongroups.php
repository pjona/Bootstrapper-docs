<section id="buttonGroups">
  <div class="page-header">
    <h1>Button groups <small>Join buttons for more toolbar-like functionality</small></h1>
  </div>
  <div class="row">
    <div class="span4">
      <h3>Button groups</h3>
      <p>Use button groups to join multiple buttons together as one composite component. Build them with a series of <code>Button</code> elements.</p>

      <h3>Default example</h3>
      <p>Here's how you create a standard button group built with normal buttons:</p>
      <div class="">
        <?php echo ButtonGroup::open(null, array('style'=>"margin: 9px 0;"));
                echo Button::normal('Left');
                echo Button::normal('Middle'); 
                echo Button::normal('Right'); 
              echo ButtonGroup::close(); ?>
      </div>
<pre class="prettyprint linenums">
echo ButtonGroup::open();
  echo Button::normal('Left');
  echo Button::normal('Middle'); 
  echo Button::normal('Right'); 
echo ButtonGroup::close();
</pre>
</div>
    <div class="span4">
      <h3>Checkbox and radio flavors</h3>
      <p>Button groups can also function as radios , where only one button may be active, or checkboxes, where any number of buttons may be active.</p>
      
      <p><a class="btn" href="http://twitter.github.com/bootstrap/javascript.html#buttons">More Info</a></p>
      
      <div class="row" style="margin-bottom:15px;">
        <div class="span2">
        <?php echo ButtonGroup::open(ButtonGroup::TOGGLE_CHECKBOX);
                echo Button::danger_normal('Left');
                echo Button::danger_normal('Middle'); 
                echo Button::danger_normal('Right'); 
              echo ButtonGroup::close(); 
        ?>
      </div>
      <div class="span2">
        <?php echo ButtonGroup::open(ButtonGroup::TOGGLE_RADIO);
                echo Button::primary_normal('Left');
                echo Button::primary_normal('Middle'); 
                echo Button::primary_normal('Right'); 
              echo ButtonGroup::close(); 
        ?>
      </div>
      </div>

<pre class="prettyprint linenums">
echo ButtonGroup::open(ButtonGroup::TOGGLE_CHECKBOX);
  echo Button::danger_normal('Left');
  echo Button::danger_normal('Middle'); 
  echo Button::danger_normal('Right'); 
echo ButtonGroup::close(); 

echo ButtonGroup::open(ButtonGroup::TOGGLE_RADIO);
  echo Button::primary_normal('Left');
  echo Button::primary_normal('Middle'); 
  echo Button::primary_normal('Right'); 
echo ButtonGroup::close(); 
</pre>
    </div>
    <div class="span4">
        <h3>Toolbar example</h3>
      <p>You can combine sets of <code>ButtonGroup</code> into a <code>ButtonToolbar</code> for more complex components.</p>
      <?php echo ButtonToolbar::open();
          echo ButtonGroup::open();
            echo Button::normal('1');
            echo Button::normal('2'); 
            echo Button::normal('3');
            echo Button::normal('4'); 
          echo ButtonGroup::close();

          echo ButtonGroup::open();
            echo Button::normal('5');
            echo Button::normal('6'); 
            echo Button::normal('7');
          echo ButtonGroup::close();

          echo ButtonGroup::open();
            echo Button::normal('8');
          echo ButtonGroup::close();
        echo ButtonToolbar::close();
      ?>
<pre class="prettyprint linenums">
echo ButtonToolbar::open();
  echo ButtonGroup::open();
    ...
  echo ButtonGroup::close();

  echo ButtonGroup::open();
    ...
  echo ButtonGroup::close();
echo ButtonToolbar::close();
</pre>

      <h3>Dropdowns in button groups</h3>
      <p><span class="label label-info">Heads up!</span> Buttons with dropdowns must be individually wrapped in their own <code>ButtonGroup</code> within a <code>ButtonToolbar</code> for proper rendering.</p>
    </div>
  </div>
</section>