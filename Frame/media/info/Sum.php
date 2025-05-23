<header>
    <h3>JMAC Docs</h3><span><a>JMAC</a> / <a href="index.php">docs</a> / Sum()</span>
</header>
<hr>
<section id="intro">
    <h3>Sum()<span class="mono">Method : JMath</span></h3>
    <p>Calculates the sum of a variable amount of numbers</p>
</section>
<hr class="inter">
<section id="main">
    <div id="values">
        <h3>Values</h3>
        <div class="snippet">
            <span class="code">function Sum(...values: Number): Number</span>
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
            <dt>Number</dt>
            <dd>The sum of all passed parameters.</dd>
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
const sum = JMath.Sum(3, 8, 1, 9, 3, 8, 25);
</span>
<span class="comment">// Should return:</span>
<span class="code">
57
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
            <section>
                <h4>JMAC b | 21-05-25</h4>
                <p>Method seperated from <a href="index.php?file=Average">Average()</a>, error catch fixed.</p>
            </section>
        </div>
    </div>
</section>