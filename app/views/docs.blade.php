@extends('layout.main')

@section('title')
	Them.io - Features
@stop

@section('body')
data-spy="scroll" data-target="#navigation" data-offset="100"
@stop

@section('content')

<div class="container">
	<div class="row">

      <!-- Vertical Navigation -->
      <div class="col-md-3">
        <div id="navigation">
        <ul class="nav nav-pills nav-stacked bs-sidebar affix-top" data-spy="affix" data-offset-top="0" data-offset-bottom="0">
          <li class="active"><a href="#buttons" data-toggle="tab">Getting Started</a></li>
          <li><a href="#panels" data-toggle="tab">Panels</a></li>
          <li><a href="#info-boards" data-toggle="tab">Info boards</a></li>
          <li><a href="#navs" data-toggle="tab">Navs</a></li>
          <li><a href="#headlines" data-toggle="tab">Headlines</a></li>
        </ul>            
        </div>
      </div>

      <div class="col-md-9">
        
        <!-- Buttons -->
        <h2 class="headline first-child text-color" id="buttons">
          <span class="border-color">Getting Started</span>
        </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, quam, repellendus, fugit, laudantium ratione ipsam at aperiam aliquid accusantium dicta numquam natus eveniet culpa tempora veritatis. Enim, reprehenderit necessitatibus voluptatibus distinctio nam quaerat qui ut veniam amet dolores minus ipsam nisi eveniet porro iusto voluptatum ea eligendi sequi nobis provident!</p>
        <h3 class="primary-font">Classes</h3>
        <p>The Mosaic theme offers you new button classes that can be used along with the default Bootstrap 3 buttons:</p>
        <div class="panel panel-default">
          <div class="panel-heading">Example</div>
          <div class="panel-body">
            <a class="btn btn-green">Green</a> 
            <a class="btn btn-blue">Blue</a> 
            <a class="btn btn-orange">Orange</a> 
            <a class="btn btn-red">Red</a>
          </div>
          <div class="panel-footer">
            &lt;button type=<code>"button"</code> class=<code>"btn btn-green"</code>&gt;Green&lt;/button&gt;<br>
            &lt;button type=<code>"button"</code> class=<code>"btn btn-blue"</code>&gt;Blue&lt;/button&gt;<br>
            &lt;button type=<code>"button"</code> class=<code>"btn btn-orange"</code>&gt;Orange&lt;/button&gt;<br>
            &lt;button type=<code>"button"</code> class=<code>"btn btn-red"</code>&gt;Red&lt;/button&gt;<br>
          </div>
        </div>

<pre><code>/* ===== Sticky Navbar ===== */

$(window).load(function(){
  $(".navbar").sticky({ topSpacing: 0 });
});

</code></pre>        

        <h3 class="primary-font">Sizes</h3>
        <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
        <div class="panel panel-default">
          <div class="panel-heading">Example</div>
          <div class="panel-body">
            <p><a class="btn btn-lg btn-default">Large Button</a> <a class="btn btn-lg btn-green">Large Button</a> </p>
            <p><a class="btn btn-default">Default Button</a> <a class="btn btn-green">Default Button</a> </p>
            <p><a class="btn btn-sm btn-default">Small Button</a> <a class="btn btn-sm btn-green">Small Button</a> </p>
            <p><a class="btn btn-xs btn-default">Extra Small</a> <a class="btn btn-xs btn-green">Extra Small</a> </p>
          </div>
          <div class="panel-footer">
            <p>
              &lt;button type=<code>"button"</code> class=<code>"btn btn-default btn-lg"</code>&gt;Large button&lt;/button&gt;<br>
              &lt;button type=<code>"button"</code> class=<code>"btn btn-green btn-lg"</code>&gt;Large button&lt;/button&gt;<br>
            </p>
            <p>
              &lt;button type=<code>"button"</code> class=<code>"btn btn-default"</code>&gt;Default button&lt;/button&gt;<br>
              &lt;button type=<code>"button"</code> class=<code>"btn btn-green"</code>&gt;Default button&lt;/button&gt;<br>
            </p>
            <p>
              &lt;button type=<code>"button"</code> class=<code>"btn btn-default btn-sm"</code>&gt;Small button&lt;/button&gt;<br>
              &lt;button type=<code>"button"</code> class=<code>"btn btn-green btn-sm"</code>&gt;Small button&lt;/button&gt;<br>
           </p>
            <p>
              &lt;button type=<code>"button"</code> class=<code>"btn btn-default btn-xs"</code>&gt;Extra small button&lt;/button&gt;<br>
             &lt;button type=<code>"button"</code> class=<code>"btn btn-green btn-xs"</code>&gt;Extra small button&lt;/button&gt;<br>
            </p>
          </div>
        </div>

		    <!-- Panels -->
        <h2 class="headline text-color" id="panels">
          <span class="border-color">Panels</span>
        </h2>
        <p>
          While not always necessary, sometimes you need to put your DOM in a box. For those situations, try the panel component.

<pre><code>window.addEventListener('load', function() {
    FastClick.attach(document.body);
}, false);
</code></pre>        

          <br />
          In the Mosaic template we have added several new classes to the panel element. For full documentation on panels, please refer to the official <a href="http://getbootstrap.com/components/#panels">Bootstrap page</a>.
        <div class="panel panel-default">
          <div class="panel-heading">Example</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="panel panel-green">
                  <div class="panel-heading">Panel Title</div>
                  <div class="panel-body">
                    Panel Content
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="panel panel-blue">
                  <div class="panel-heading">Panel Title</div>
                  <div class="panel-body">
                    Panel Content
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="panel panel-orange">
                  <div class="panel-heading">Panel Title</div>
                  <div class="panel-body">
                    Panel Content
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="panel panel-red">
                  <div class="panel-heading">Panel Title</div>
                  <div class="panel-body">
                    Panel Content
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            &lt;div class=<code>"panel panel-green"</code>&gt; ... &lt;/div&gt;<br>
            &lt;div class=<code>"panel panel-blue"</code>&gt; ... &lt;/div&gt;<br>
            &lt;div class=<code>"panel panel-orange"</code>&gt; ... &lt;/div&gt;<br>
            &lt;div class=<code>"panel panel-red"</code>&gt; ... &lt;/div&gt;<br>
          </div>
        </div>              

        <!-- Info Boards -->
        <h2 class="headline text-color" id="info-boards">
          <span class="border-color">Info Boards</span>
        </h2>
        <p>You can emphasize some contents by wrapping it in a .info-board. Four classes are available:</p>
        <div class="panel panel-default">
          <div class="panel-heading">Example</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="info-board info-board-green">
                  <h4>Info board title</h4>
                  <p>Info board content</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="info-board info-board-blue">
                  <h4>Info board title</h4>
                  <p>Info board content</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="info-board info-board-orange">
                  <h4>Info board title</h4>
                  <p>Info board content</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="info-board info-board-red">
                  <h4>Info board title</h4>
                  <p>Info board content</p>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            &lt;div class=<code>"info-board info-board-green"</code>&gt; ... &lt;/div&gt;<br>
            &lt;div class=<code>"info-board info-board-blue"</code>&gt; ... &lt;/div&gt;<br>
            &lt;div class=<code>"info-board info-board-orange"</code>&gt; ... &lt;/div&gt;<br>
            &lt;div class=<code>"info-board info-board-red"</code>&gt; ... &lt;/div&gt;<br>
          </div>
        </div>

        
	</div>
  </div>
</div>

@stop

@section('scripts')

<!-- prettyprint -->
<script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=js"></script>

@stop

