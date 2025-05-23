<header>
    <h3>JMAC Docs</h3><span><a>JMAC</a> / <a href="index.php">docs</a> / DumpFieldset()</span>
</header>
<hr>
<section id="intro">
    <h3>DumpFieldset()<span class="mono">Method : Element.prototype</span></h3>
    <p>Deposits the values of all inputs in a fieldset into an array</p>
</section>
<hr class="inter">
<section id="main">
    <div id="values">
        <h3>Values</h3>
        <div class="snippet">
            <span class="code">function DumpFieldset(fieldset: Object|HTMLElement, returns?: boolean): Array|void</span>
        </div>
    </div>
    <hr>
    <div id="parameters">
        <h3>Parameters</h3>
        <dl>
            <dt>fieldset</dt>
            <dd>The fieldset which should be dumped. Must be a HTML node.</dd>
            <dd>Defaults to <span class="mono">this</span> and can be left default in most cases.</dd>
            <dt>returns</dt>
            <dd>If set to true, function will return values of dumped fields.</dd>
            <dd>Defaults to <span class="mono">true</span>.</dd>
        </dl>
        <h3>Returns</h3>
        <dl>
            <dt>Array</dt>
            <dd>A new <span class="mono">Array</span> containing the values of all dumped input fields.</dd>
            <dt>void</dt>
            <dd>Returns nothing if <a href="#parameters">returns</a> is <span class="mono">false</span>.</dd>
        </dl>
    </div>
    <hr>
    <div id="errors">
        <h3>Common Errors</h3>
        <dl>
            <dt>TypeError: Invalid parameter type [type] - must be of type Object</dt>
            <dd>Occurs when <a href="#parameters">fieldset</a> is passed a wrong value manually or <span class="mono">this</span> is not a fieldset HTML element.</dd>
            <dt>Error: Parameter 'fieldset' is null</dt>
            <dd>Occurs when <a href="#parameters">fieldset</a> has been passed a valid <span class="mono">Object</span> but it does not contain any input fields.</dd>
        </dl>
    </div>
    <hr>
    <div id="example">
        <h3>Example</h3>
        <div class="snippet">
<pre>

<span class="comment">// HTML</span>
<span class="code">
&lt;form action="index.php" method="post"&gt;
    &lt;fieldset&gt;
        &lt;input type="text" name="complaint" placeholder="Type here..." value="hello this is a complaint" autofocus required&gt;
        &lt;input type="email" name="email" placeholder="person@mailservice.com" value="male@femail.dprk" required&gt;
    &lt;/fieldset&gt;
    &lt;input type="submit" name="submit" value="Submit"&gt;
&lt;/form&gt;
</span>
<span class="comment">// JS</span>
<span class="code">
const inputs = document.querySelector("fieldset");

const values = inputs.DumpFieldSet();

console.log(values);
</span>
<span class="comment">// Should return:</span>
<span class="code">
Array(
    "hello this is a complaint",
    "male@femail.dprk"
)
</span>
<span class="comment">// HTML fieldset values should now be empty</span>

</pre>
        </div>
    </div>
    <hr>
    <div id="notes">
        <h3>Notes</h3>
        <ul>
            <li>This method should, under all normal circumstances, be called without specifying any of the parameters.</li>
        </ul>
    </div>
    <hr>
    <div id="log">
        <h3>Log</h3>
        <div>
            <section>
                <h4>JMAC a | 17-05-25</h4>
                <p>Method introduced.</p>
            </section>
            <section>
                <h4>JMAC b | 21-05-25</h4>
                <p>Cleaned function code, changed example.</p>
            </section>
        </div>
    </div>
</section>