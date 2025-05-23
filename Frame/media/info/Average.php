<header>
    <h3>JMAC Docs</h3><span><a>JMAC</a> / <a href="index.php">docs</a> / Average()</span>
</header>
<hr>
<section id="intro">
    <h3>Average()<span class="mono">Method : JMath</span></h3>
    <p>Calculates the average of a variable amount of numbers</p>
</section>
<hr class="inter">
<section id="main">
    <div id="values">
        <h3>Values</h3>
        <div class="snippet">
            <span class="code">function Average(...values: Number): float</span>
        </div>
    </div>
    <hr>
    <div id="parameters">
        <h3>Parameters</h3>
        <dl>
            <dt>values</dt>
            <dd>A variable length <span class="mono">Array</span> which can be passed any amount of numbers.</dd>
            <dd>Has no default value - required</dd>
        </dl>
        <h3>Returns</h3>
        <dl>
            <dt>float</dt>
            <dd>The average of all passed parameters expressed in an unrounded <span class="mono">float</span>.</dd>
        </dl>
    </div>
    <hr>
    <div id="errors">
        <h3>Common Errors</h3>
        <dl>
            <dt>TypeError: At least 1 parameter is not a number or float</dt>
            <dd>Often occurs when <a href="#parameters">values</a> is accidentaly passed an <span class="mono">Array</span>.</dd>
        </dl>
    </div>
    <hr>
    <div id="example">
        <h3>Example</h3>
        <div class="snippet">
<pre>
<span class="code">
const average = JMath.Average(3, 8, 1, 9, 3, 8, 25);
</span>
<span class="comment">// Should return:</span>
<span class="code">
8.14285714285
</span>
</pre>
        </div>
    </div>
    <hr>
    <div id="notes">
        <h3>Notes</h3>
        <ul>
            <li>This method is probably most useful when Array deconstruction is used to dynamically pass a larger collection of numbers.</li>
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
        </div>
    </div>
</section>