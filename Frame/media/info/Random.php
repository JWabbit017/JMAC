<header>
    <h3>JMAC Docs</h3><span><a>JMAC</a> / <a href="index.php">docs</a> / Random()</span>
</header>
<hr>
<section id="intro">
    <h3>Random()<span class="mono">Method : JMath</span></h3>
    <p>Generates a pseudo-random number between a minimum and maximum value</p>
</section>
<hr class="inter">
<section id="main">
    <div id="values">
        <h3>Values</h3>
        <div class="snippet">
            <span class="code">function Random(min: Number, max: Number, decimals?: boolean): Number|float</span>
        </div>
    </div>
    <hr>
    <div id="parameters">
        <h3>Parameters</h3>
        <dl>
            <dt>min</dt>
            <dd>The minimum value of the generated output.</dd>
            <dd>Defaults to <span class="mono">0</span>.</dd>
            <dt>max</dt>
            <dd>The maximum value of the generated output.</dd>
            <dd>Defaults to <span class="mono">9</span>.</dd>
            <dt>decimals</dt>
            <dd>Determines whether or not the method can return a float.</dd>
            <dd>Defaults to <span class="mono">false</span>.</dd>
        </dl>
        <h3>Returns</h3>
        <dl>
            <dt>Number</dt>
            <dd>A pseudo-random integer between <a href="parameters">min</a> and <a href="parameters">max</a>.</dd>
            <dt>float</dt>
            <dd>A pseudo-random float between <a href="parameters">min</a> and <a href="parameters">max</a>. Only possible when <a href="parameters">decimals</a> is true.</dd>
        </dl>
    </div>
    <hr>
    <div id="errors">
        <h3>Common Errors</h3>
        <dl>
            <dt>Error: Invalid return value</dt>
            <dd>Often occurs when <a href="#parameters">min</a> or <a href="#parameters">max</a> has been passed a float, which can sometimes cause the return value to exceed <a href="#parameters">max</a>.</dd>
        </dl>
    </div>
    <hr>
    <div id="example">
        <h3>Example</h3>
        <div class="snippet">
<pre>
<span class="code">
console.log(JMath.Random(4, 39));
</span>
<span class="comment">// Could return:</span>
<span class="code">
23
</span>
<span class="code">
console.log(JMath.Random(5, 10, true));
</span>
<span class="comment">// Could return:</span>
<span class="code">
7.66666666
</span>
</pre>
        </div>
    </div>
    <hr>
    <div id="log">
        <h3>Log</h3>
        <div>
            <section>
                <h4>JMAC c | 22-05-25</h4>
                <p>Method introduced.</p>
            </section>
        </div>
    </div>
</section>