window.addEventListener('load', function () {
    console.log("Ready");
}, false);

var orgConsoleLog = console.log;
var orgTime = Date.now();
console.log = function () {
    "use strict";
    var args = Array.prototype.slice.call(arguments, 0);
    var ztime = ((Date.now() - orgTime) / 1000).toFixed(1);
    args.unshift(zeroPad(ztime, 5));
    orgConsoleLog.apply(this, args);
    var text = args.join(" ");
    var node;
    var el;
    el = document.getElementById("id_ConsoleLog");
    if (el) {
        node = document.createTextNode(text + "\n");
        //el.appendChild(node);
        el.insertBefore(node, el.childNodes[0]);
    }

    function zeroPad(num, places) {
        var zero = places - num.toString().length + 1;
        return Array(+(zero > 0 && zero)).join("0") + num;
    }
};

/*
Add to buttom of HTML:
<script src="../../vendors/zeelib/ze.console.js"></script>
    <textarea id="id_ConsoleLog" wrap="off" rows="5" style="width:98%;font-family:courier;overflow: scroll;"></textarea>
*/