<header>
    <h3>JMAC Docs</h3><span><a>JMAC</a> / <a href="index.php">docs</a> / DynSort()</span>
</header>
<hr>
<section id="intro">
    <h3>DynSort()<span class="mono">Method : Array.prototype</span></h3>
    <p>Sorts an array of objects by user-provided property key</p>
</section>
<hr class="inter">
<section id="main">
    <div id="values">
        <h3>Values</h3>
        <div class="snippet">
            <span class="code">function DynSort(type: string, invert?: boolean): Array</span>
        </div>
    </div>
    <hr>
    <div id="parameters">
        <h3>Parameters</h3>
        <dl>
            <dt>type</dt>
            <dd>A string containing the name of the nested property key to sort by. Must be present in every nested object.</dd>
            <dd>Defaults to an empty <span class="mono">String</span>.</dd>
            <dt>invert</dt>
            <dd>If set to true, function will return a reverse sort.</dd>
            <dd>Defaults to <span class="mono">false</span>.</dd>
        </dl>
        <h3>Returns</h3>
        <dl>
            <dt>Array</dt>
            <dd>A new <span class="mono">Array</span> mutated by either a logical or inverted DynSort.</dd>
        </dl>
    </div>
    <hr>
    <div id="errors">
        <h3>Common Errors</h3>
        <dl>
            <dt>TypeError: Parameter 'type' must be assigned a value</dt>
            <dd>Usually occurs when <a href="#parameters">type</a> is passed a non-string or <span class="mono">undefined</span>.</dd>
            <dt>Error: Parameter 'type' does not match any key in <span class="mono">this</span></dt>
            <dd>Occurs when <a href="#parameters">type</a> is not a valid property key in any child of the <span class="mono">Array</span> calling the method.</dd>
        </dl>
    </div>
    <hr>
    <div id="example">
        <h3>Example</h3>
        <div class="snippet">
<pre>
<span class="code">
const array1 = [
{"name": "connor", "age": 29, "sex": "M"},
{"name": "markus", "age": 32, "sex": "M"},
{"name": "kara", "age": 26, "sex": "F"}];

const newArray1 = array1.DynSort("age");

console.log(newArray1);
</span>
<span class="comment">// Should return:</span>
<span class="code">
newArray1(
{"name": "kara", "age": 26, "sex": "F"},
{"name": "connor", "age": 29, "sex": "M"},
{"name": "markus", "age": 32, "sex": "M"});
</span>
</pre>
        </div>
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