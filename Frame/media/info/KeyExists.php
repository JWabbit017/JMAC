<header>
    <h3>JMAC Docs</h3><span><a>JMAC</a> / <a href="index.php">docs</a> / KeyExists()</span>
</header>
<hr>
<section id="intro">
    <h3>KeyExists()<span class="mono">Method : Array.prototype</span></h3>
    <p>Sifts through an array of objects to check if a given property is defined</p>
</section>
<hr class="inter">
<section id="main">
    <div id="values">
        <h3>Values</h3>
        <div class="snippet">
            <span class="code">function KeyExists(key: string, returns?: boolean, returnOnFail?: boolean): boolean|array</span>
        </div>
    </div>
    <hr>
    <div id="parameters">
        <h3>Parameters</h3>
        <dl>
            <dt>key</dt>
            <dd>A string containing the name of the nested property key to search for.</dd>
            <dd>Defaults to an empty <span class="mono">String</span>.</dd>
            <dt>returns</dt>
            <dd>If set to true, function will return the property values found.</dd>
            <dd>Defaults to <span class="mono">false</span>.</dd>
            <dt>returnOnFail</dt>
            <dd>Test flag - if set to true, all non-matching indices will be logged in console.</dd>
            <dd>Defaults to <span class="mono">false</span>.</dd>
        </dl>
        <h3>Returns</h3>
        <dl>
            <dt>boolean</dt>
            <dd>Returns a <span class="mono">boolean</span> by default (true if key found).</dd>
            <dt>Array</dt>
            <dd>Returns array of found values when <a href="#paramaters">returns</a> is enabled.</dd>
        </dl>
    </div>
    <hr>
    <div id="errors">
        <h3>Common Errors</h3>
        <dl>
            <dt>False</dt>
            <dd>This method is designed to never throw an error - it returns <span class="mono">false</span> instead.</dd>
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

if (array1.KeyExists("name"))
{
    console.log("yep this exists")
}
else
{
    console.warn("names are missing");
}

console.log(newArray1);
</span>
<span class="comment">// Should return:</span>
<span class="code">
yep this exists
</span>
</pre>
        </div>
    </div>
    <hr>
    <div id="notes">
        <h3>Notes</h3>
        <ul>
            <li><a href="parameters">returnOnFail</a> will make the function log the array of non-matching indices irrespective of the state of <a href="parameters">returns</a>.</li>
        </ul>
    </div>
    <hr>
    <div id="log">
        <h3>Log</h3>
        <div>
            <section>
                <h4>JMAC b | 21-05-25</h4>
                <p>Method introduced.</p>
            </section>
        </div>
    </div>
</section>