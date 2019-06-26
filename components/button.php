<div class="component-content" id="button">
  <div class="component-header">
    <h2 class="component-title">Button</h2>
    <p>Select your options:</p>
  </div>
  <div class="component-body container">
    <div class="row">
      <div class="options container col-md-8">
        <div class="option row">
          <div class="col-md-3">
            <h3 class="option-title btn-text">Button Text</h3>
          </div>
          <div class="row col-md-9 option-select">
            <input type="text" id="btn-text" name="btn-text" placeholder="Button Text">
          </div> 
        </div>
        <div class="option row">
          <div class="col-md-3">
            <h3 class="option-title">Button Style</h3>
          </div>
          <div class="row option-select col-md-9">
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-primary btn-style active" id="style-primary">
                <input type="radio" name="options" autocomplete="off" checked>Primary
              </label>
              <label class="btn btn-secondary btn-style" id="style-secondary">
                <input type="radio" name="options" autocomplete="off">Secondary
              </label>
            </div>
          </div>          
        </div>
        <div class="option row">
          <div class="col-md-3">
            <h3 class="option-title">Button Width</h3>
          </div>
          <div class="row option-select col-md-9">
            <div class="btn-group-toggle btn-group-block" data-toggle="buttons">
              <label class="btn btn-primary btn-width btn-std-width active">
                <input type="radio" name="options" id="width-standard" autocomplete="off" checked>Standard
              </label>
              <label class="btn btn-primary btn-width btn-block col-md-12">
                <input type="radio" name="options" id="width-full" autocomplete="off">Full-width
              </label>
            </div>
          </div>
        </div>
        <div class="option row">
          <div class="col-md-3">
            <h3 class="option-title">Tags</h3>
            <p>Description</p>
          </div>
          <div class="row option-select col-md-9">
            <div class="btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-outline-dashed tag-type tag-button active">
                <input type="radio" name="options" id="tag-button" autocomplete="off"checked>&lt;button&gt;
              </label>
              <label class="btn btn-outline-dashed tag-type tag-a">
                <input type="radio" name="options" id="tag-a" autocomplete="off">&lt;a&gt;
              </label>
              <label class="btn btn-outline-dashed tag-type tag-input">
                <input type="radio" name="options" id="tag-input" autocomplete="off">&lt;input&gt;
              </label>
            </div>
            <div class="input-set" id="tag-link">
              <label for="btn-link" class="no-margin">Link: </label>
              <input type="text" id="btn-link" "name="btn-link" placeholder="#" value="">
            </div>
          </div>
        </div>
        <div class="option row">
          <div class="col-md-3">
            <h3 class="option-title">Button Icons</h3>
          </div>
          <div class="row option-select col-md-9">
            <div class="input-group">
              <select class="custom-select" id="icon-select" aria-label="Icon selector">
                <option selected>Choose...</option>
                <option value="1">set</option>
                <option value="2">list</option>
                <option value="3">of</option>
                <option value="4">icons</option>
                <option value="5">from</option>
                <option value="6">UX</option>
              </select>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary no-margin btn-icon disabled" type="button">Prepend</button>
                <button class="btn btn-outline-secondary no-margin btn-icon disabled" type="button">Append</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 container" id="button">
        <div class="preview">
          <h2 class="preview-title">Preview</h2>
          <div id="btn-preview-pane">
            <button type="button" class="btn btn-primary" disabled>Button Text</button>
          </div>
        </div>
        <div class="component-code">
          <h2 class="code-title">And here's the code...</h2>
          <div class="code-box">
            <pre class="code-text">
<span id="btn-print-code"><span id="code-open-tag">&lt;<span class="code-btn-tag">button</span>&#32;<span id="code-btn-type">type&#61;&#34;<span id="code-btn-type-value">button</span>&#34;&#32;</span><span id="code-btn-link">href&#61;&#34;<span id="code-btn-link-text">#</span>&#34;&#32;</span>class&#61;&#34;<span id="code-btn-class-style">btn&#32;btn&#45;primary</span><span id="code-btn-class-width"></span>&#34;<span id="code-btn-value">&#32;value&#61;&#34;<span class="code-btn-text"></span>&#34;</span>&gt;</span>
  <span class="code-btn-text" id="code-btn-text">Button Text</span>
<span id="code-close-tag">&lt;&#47;<span class="code-btn-tag">button</span>&gt;</span></span>
            </pre>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>