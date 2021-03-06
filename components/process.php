<div class="component-content" id="component-process">
  <div class="component-header">
    <h2 class="component-title">Process</h2>
    <p><a href="https://keats.kcl.ac.uk/mod/page/view.php?id=3118002" target="_blank">Design System guidance and examples</a></p>
  </div>
  <div class="component-body container">
    <div class="alert alert-danger d-none" role="alert" id="prcss-alt-text-alert">
      <p>Please add alternative text for all images.</p>
    </div>
    <div class="row">
      <div class="options col-md-5">
        <section class="options">
          <h3>Options</h3>
          <p>Complete the following fields:</p>
          <form class="needs-validation" id="prcss-form" novalidate>
            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" id="prcss-check-label" unchecked>
              <label class="custom-control-label" id="prcss-label-label" for="prcss-check-label">Show All Labels</label>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="prcss-arrows">Choose arrow type for all cards</label>
              </div>
              <select class="custom-select" id="prcss-arrows">
                  <option value="1" selected>Arrow Down</option>
                  <option value="2">Arrow Up</option>
                  <option value="3">Double Arrow</option>
                  <option value="4">Relation</option>
              </select>                
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="prcss-cards">No. of cards</label>
              </div>
              <select class="custom-select" id="prcss-select">
                  <option value="2">2</option>
                  <option value="3" selected>3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
              </select>
            </div>                
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="prcss-check-img" checked>
              <label class="custom-control-label" id="prcss-label-img" for="prcss-check-img">Remove All Images</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="prcss-check-caption" checked>
              <label class="custom-control-label" id="prcss-label-caption" for="prcss-check-caption">Remove All Caption Titles</label>
            </div>            
          </form>
          <div class="collapse-container" id="prcss-collapse-container">
          
          </div>
        </section>
      </div>
      <div class="col-md-7">
        <section class="preview">
          <h3 class="preview-title">Preview</h3>
          <div class="preview-prcss">
            <div class="process-container container" role="list">
            </div>
          </div>
        </section>
        <section class="component-code">
          <div class="code-header">
            <h3 class="code-title">Code</h3>
            <button class="btn btn-secondary" id="copy-prcss-code">Copy Code</button>
          </div>
          <div class="code-box">
<pre class="code-text">
&lt;div class=&quot;process-container container&quot; role=&quot;list&quot;&gt;
  <span id="code-prcss"></span>&lt;/div&gt;
</pre>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
